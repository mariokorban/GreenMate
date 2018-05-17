<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function getUserPosts(Request $req){
        $post = POST::where('uid', $req->input('uid'))->get();

        return response()->json([
            'posts' => $post->toArray()
        ]);
    }

}
