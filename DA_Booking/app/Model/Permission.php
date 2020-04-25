<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	protected $table = 'permissions';
    protected $guarded = ['id'];
    protected $timestamp = true;
    
    public function roles(){
    	return $this->belongsToMany(Role::class);
    }
}

