<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $guarded = ['id'];
    protected $timestrap = true;

    //relationship with post model many to many
    public function room(){
        return $this->belongsToMany('App\Model\Room','room_services','service_id', 'room_id');
    }
}
