<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'fullname', 'course_id', 'phone', 'source', 'status'
    ];
}
