<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        return $this->id;
    }

    public function blog()
    {
        return $this->belongsToMany('App\Models\Blog');
    }
}
