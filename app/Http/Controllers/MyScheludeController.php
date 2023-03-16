<?php

namespace App\Http\Controllers;

use App\Models\Scheluder;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MyScheludeController extends Controller
{
   public function index(){

$date = Carbon::parse(request()->input('date'));

$dayScheduler = Scheluder::where('client_user_id', auth()->id())
            ->whereDate('from', $date->format('Y-m-d'))
            ->orderBy('from', 'ASC')
            ->get();

 return view('my-schelude.index')
            ->with(  [
                'date' => $date,
                'dayScheduler' => $dayScheduler,


            ]         );
}

}
