<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class HomePageController extends Controller{
    function index(){
        return view('homePage');
    }
}