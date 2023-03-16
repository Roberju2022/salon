<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheluder extends Model
{
    use HasFactory;



    protected $table = 'scheluder';




    protected $casts = [
    'from' => 'datetime:h-s',
    'to' => 'datetime:h-s',
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
