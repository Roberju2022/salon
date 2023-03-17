<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyScheludeRequest;
use App\Models\Scheluder;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MyScheludeController extends Controller
{
    public function index()
    {

        $date = Carbon::parse(request()->input('date'));

        $dayScheduler = Scheluder::where('client_user_id', auth()->id())
            ->whereDate('from', $date->format('Y-m-d'))
            ->orderBy('from', 'ASC')
            ->get();

        return view('my-schelude.index')
            ->with([
                'date' => $date,
                'dayScheduler' => $dayScheduler,


            ]);
    }

    public function create()
    {


        $services = Service::all();
        $staffUsers = User::role('staff')->get();

        return view('my-schelude.create')->with([
            'services' => $services,
            'staffUsers' => $staffUsers,
        ]);

    }


    public function store(MyScheludeRequest $request)
    {
        $service = Service::find(request('service_id'));
        $from = Carbon::parse(request('from.date') . ' ' . request('from.time'));
        $to = Carbon::parse($from)->addMinutes($service->duration);
        $staffUser = User::find($request->input('staff_user_id'));

        $request->checkReservationRules($staffUser, auth()->user(), $from, $to, $service);

        $scheduler = Scheluder::create([
            'from' => $from,
            'to' => $to,
            'status' => 'pending',
            'staff_user_id' => request('staff_user_id'),
            'client_user_id' => auth()->id(),
            'service_id' => $service->id,
        ]);

       //$staffUser->notify(new SchedulerCreated($scheduler));

        return redirect(route('my-schelude', ['date' => $from->format('Y-m-d')]));
    }

}
