<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $guarded = ['id'];
    protected $timestamp = true;

    public function roles(){
        return $this->belongsToMany(Model\Role::class);
    }

    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function hasRole($role)
    {
    	if (is_string($role)) {
    		return $this->roles->contains('name', $role);
    	}
    	
    	return $role->intersect($this->roles)->count();
    }
}
