<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MairieController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SignalementsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

//Route::post('/logins', [MairieController::class,'login']);
Route::post('/logins', [UserController::class,'loginUser']);

Route::get('/formulaire-mairie', function () {
    return view('pages.formulaire-mairie');
});

route::get('/signalement',[FrontendController::class,'signalement']);
route::post('/signalement',[SignalementsController::class,'store']);

Route::post('/mairies', [MairieController::class, 'store']);

Route::middleware('auth')->group(function(){

    //Logout
    Route::post('/logout',[UserController::class,'logoutUser'])->name('logout');

    Route::get('/delete/{id}',[UserController::class,'deleteUser']);
    Route::get('/update/{id}',[UserController::class,'updateUser']);
    Route::post('/update',[UserController::class,"update"]);

    Route::get('/', [FrontendController::class,"index"])->name('home');
    Route::get('/Projet',[FrontendController::class,"Projet"]);
    Route::get('/Réception', [FrontendController::class,"Réception"]);
    Route::get('/Membres',[FrontendController::class,"Membres"]);

    Route::post('/userstore',[UserController::class,"store"]);
});



