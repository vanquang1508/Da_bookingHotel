<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $guarded = ['id'];
    protected $timestrap = true;

    public function room(){
        return $this->belongsTo('App\Model\Room');
    }
}
