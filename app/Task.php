<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'course_name', 'batch_name', 'topics','status',
    ];
}
