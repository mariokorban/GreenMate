<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $fillable = [
        'post_id','u_name','comment_content'
    ];
}
