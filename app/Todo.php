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

    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        $url = env('BASE_URL') . '/' . $this->id;

        return $url;
    }
}
