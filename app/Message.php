<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message_body', 'id', 'batch_course', 'time',
    ];
}
