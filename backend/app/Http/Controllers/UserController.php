<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getUserInfo(Request $req){
        $user = User::where('id', $req->input('id'))->get();

        return response()->json([
            'user' => $user->toArray()
        ]);
    }
}
