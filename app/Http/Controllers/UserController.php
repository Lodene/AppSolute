<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller{
    function pageUser($id){
        
        $post = User::find($id);
        
        return view('user',  [
            'post' => $post
        ]);
    }

    
}
