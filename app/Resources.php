<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $resources = ['title', 'content', 'url', 'tags', 'user_id'];

    // protected $fillable = ['title', 'content', 'url', 'tags'];
}