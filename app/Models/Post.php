<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    Use HasFactory;

    protected function casts() : array {
        return[
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = ['is_active'];
}
