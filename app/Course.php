<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'id', 'description', 'fee', 'duration', 'status',
    ];
}
