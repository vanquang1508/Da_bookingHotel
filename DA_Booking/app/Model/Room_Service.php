<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room_Service extends Model
{
    protected $table = "room_services";
    protected $guarded = ['id'];
    protected $timestrap = true;
}
