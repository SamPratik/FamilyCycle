<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FuAdmin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'fuadmin';
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
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function AfterBirthPosts() {
      return $this->hasMany('App\AfterBirthPost');
    }

    public function abcomments() {
      return $this->hasMany('App\AbComment');
    }

}
