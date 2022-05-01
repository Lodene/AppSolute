<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserListController extends Controller{
    function listPage(){
        $posts = User::all();

        return view('utilisateurs', [
            'posts' => $posts
        ]);
    }
}
