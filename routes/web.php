<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InformationController;

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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/Projet', function () {
    return view('pages.Projet');
});
Route::get('/Réception', function () {
    return view('pages.Réception');
});





// Afficher le formulaire de test
Route::view('/test-signalement', 'pages.test_information_form');

// Tester la méthode store
Route::post('/test-signalement', [InformationController::class, 'store'])->name('test.information.store');


// Route pour afficher les informations
Route::get('/Réception', [InformationController::class, 'index'])->name('information.index');