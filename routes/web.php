<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\AuthentificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/user/{id}', [UserController::class, 'pageUser'])->name('user');

Route::get('/userList', [UserListController::class, 'listPage'])->name('allUser');



Route::get('/connection', [AuthentificationController::class, 'indexConnection'])->name('connexion');
Route::get('/register', [AuthentificationController::class, 'indexRegister'])->name('register');

Route::post('/connectionUser', [AuthentificationController::class, 'login'])->name('connexionUser');
Route::post('/registerUser', [AuthentificationController::class, 'register'])->name('inscriptionUser');

Route::get('/deconnexion', [AuthentificationController::class, 'deconnexion'])->name('deco');

Route::get('/regsiterMdpFalse', function() {
    return view('authentification.regsiterMdpFalse');
});