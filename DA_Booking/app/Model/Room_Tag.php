<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room_Tag extends Model
{
    protected $table = "room_tag";
    protected $guarded = ['id'];
    protected $timestrap = true;
}
