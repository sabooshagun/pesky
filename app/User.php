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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function bloodGroup()
    {
        return $this->belongsTo('App\BloodGroup','blood_group_id');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
