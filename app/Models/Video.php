<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = ['id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
