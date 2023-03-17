<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheluder extends Model
{
    use HasFactory;



    protected $table = 'scheluder';


    protected $fillable = [
        'from',
        'to',
        'status',
        'staff_user_id',
        'client_user_id',
        'service_id',
    ];

    protected $casts = [
    'from' => 'datetime:h-s',
    'to' => 'datetime:Y-m-d H:00',
];



    public function service()
    {

        return $this->belongsTo(Service::class);

    }

    public function staffUser()
    {
        return $this->belongsTo(User::class);
    }

    public function clientUser()
    {
        return $this->belongsTo(User::class);
    }


}
