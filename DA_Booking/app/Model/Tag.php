<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $guarded = ['id'];
    protected $timestrap = true;

    //relationship with post model many to many
    public function room(){
        return $this->belongsToMany('App\Model\Room','room_tag','tag_id', 'room_id');
    }
}
