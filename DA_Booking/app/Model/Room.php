<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $guarded = ['id'];
    protected $timestamp = true;

    public function room_type(){
    	return $this->belongsTo('App\Model\Room_Type');
    }

     public function image(){
        
        return $this->hasOne('App\Model\Image');
    }

    //many to many with Tags
    public function tag(){
        return $this->belongsToMany('App\Model\Tag', 'room_tag', 'room_id', 'tag_id');
    }

    //many to many with Service
    public function service(){
        return $this->belongsToMany('App\Model\Service', 'room_services', 'room_id', 'service_id');
    }
}
