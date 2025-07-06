<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'start_date_time',
        'end_date_time',
        'image'
    ];
}
