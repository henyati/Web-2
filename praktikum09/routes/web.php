<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});


// Buat Routing salam

Route::get('/salam', function () {
    return "Halo Semua";
});

// buat routing kabar

Route::get('/kabar', function () {
    return view('kondisi');
});

// buat routing nilai

Route::get('/nilai', function () {
    return view('nilai');
});

// buat routing pasien

Route::get('/pasien', function () {
    return view('pasien');
});

// buat routing form pake controller

Route::get('/form', function () {
    return view('form');
});

// buat routing form pake controller

Route::get('/form', [FormController::class, 'index']);

// buat routing hasil form pake controller

Route::post('/hasil', [FormController::class, 'hasil']);


// buat routing skill pake controller

Route::get('/skill', function () {
    return view('skill');
});

// buat routing skill pake controller

Route::get('/skill', [SkillController::class, 'index']);

// buat routing skill pake controller

Route::post('/hasilskill', [SkillController::class, 'hasilskill']);
