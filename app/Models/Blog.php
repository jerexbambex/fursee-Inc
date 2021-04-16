<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        $string = str_replace(' ', '-', $this->title);
        return $this->id . '-' . $string;
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
