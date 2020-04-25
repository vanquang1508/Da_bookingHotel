<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
    protected $table = 'room_type';
    protected $guarded = ['id'];
    protected $timestamp = true;
    
    public function room(){
        return $this->hasMany('App\Model\Room');
    }
}
