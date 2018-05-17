<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    public function commentPost(Request $req){
        Comment::create($req->all());
        return response()->json(['message' => 'Comment Succesfully Posted']);
    }

    public function getComments(Request $req){
        $comments = Comment::where('post_id', $req->input('post_id'))->get();
    
        return response()->json([
            'comments' => $comments
        ]);
    }
    
}
