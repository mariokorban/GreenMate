<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'uid', 'name','post_imageUrl','post_caption'
    ];
}
