<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'name', 'id', 'course_name', 'batch_course', 'days', 'time', 'start_date', 'end_date','status'
    ];

}
