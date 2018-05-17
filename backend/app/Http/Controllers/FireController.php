<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fire;

class FireController extends Controller
{
    //
    public function firePost(Request $req){
        Fire::create($req->all());
        return response()->json(['message' => 'Post Succesfully Posted']);
    }

    public function getFires(Request $req){
        $fire = Fire::where('post_id', $req->input('post_id'))->count();

        return response()->json([
            'firesCount' => $fire
        ]);
    }
}
