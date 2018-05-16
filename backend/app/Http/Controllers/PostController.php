<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function insertPost(Request $req){
        Post::create($req->all());
        return response()->json(['message' => 'Post Succesfully Posted']);
    }

    public function getPosts(Request $req){
        $post = Post::all();

        return response()->json([
            'status' =>'success',
            'posts' => $post->toArray()
        ]);
    }
}
