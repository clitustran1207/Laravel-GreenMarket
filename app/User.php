<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setFullnameAttribute($value){
        $this->attributes['fullname'] = ucfirst($value);
    }
    public function setBirthdayAttribute($value){
        $this->attributes['birthday'] = date('Y-m-d', strtotime($value));
    }
}
