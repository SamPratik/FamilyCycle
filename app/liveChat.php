<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liveChat extends Model
{
    protected $table = 'live_chats';
    protected $fillable = ['question', 'user_id', 'doctor_id', 'answer'];
}
