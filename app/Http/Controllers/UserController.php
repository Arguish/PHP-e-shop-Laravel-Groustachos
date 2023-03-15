<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function list(){
        $user = User::all();
        error_log($user);
        return view('user',['user'=>$user]);
    }
}
