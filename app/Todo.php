<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'completed' => false,
    ];

    protected $casts = [
        'completed' => 'boolean',
    ];
}
