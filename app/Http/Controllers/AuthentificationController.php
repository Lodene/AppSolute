<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AstrologieController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 

class AuthentificationController extends Controller{

    public function indexConnection(){
        return view("authentification.login");
    }

    public function indexRegister(){
        return view("authentification.register");
    }

    public function register(Request $request){     
        $request->validate([
            'pseudo' => 'required',
            'mail' =>  'required|email',
            'password' => 'required|min:6'
        ]);
        $usr = new User();
        
        $usr->name = request('pseudo');
        $usr->dateOfBirth = request('date');
        $usr->email = request('mail');
        $usr->password = Hash::make(request('password'));
        
        
        $usr->signeChinois = AstrologieController::calChinois($usr->dateOfBirth);
        $usr->signeZodiaque = AstrologieController::calZodiaque($usr->dateOfBirth);
        

        if ($usr->password == request('confirmpassword')){
            $usr->save();
            Auth::login($usr);
            return redirect('/');
        } else {
            $message = 'Les mdp ne correspondent pas';
            return redirect('/regsiterMdpFalse');
        }

        
    }
    
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => request('email'), 'password' =>request('password')])) {
            $request->session()->regenerate();
            return redirect()->intended('/');          
        }else{
            echo "Verifier les logins";
        }
        
    }

    public function deconnexion(){
        auth()->logout();
    
        return redirect('/');
    }

    
}