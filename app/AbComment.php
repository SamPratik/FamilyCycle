<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbComment extends Model
{
    protected $fillable = [
      'after_birth_post_id', 'comment'
    ];
    protected $table = 'ab_comments';

    public function AfterBirthPost() {
      return $this->belongsTo('App\AfterBirthPost');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
