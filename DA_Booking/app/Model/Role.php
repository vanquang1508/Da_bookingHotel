<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $table = 'roles';
    protected $guarded = ['id'];
    protected $timestamp = true;

    public function permissions(){
    	return $this->belongsToMany(Permission::class);
    }

    public function givePermissionTo($permission){
    	return $this->permissions()->save($permission);
    }
}
