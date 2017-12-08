<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfterBirthPost extends Model
{
    protected $fillable = ['user_id','post'];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function abcomments() {
      return $this->hasMany('App\AbComment');
    }
}
