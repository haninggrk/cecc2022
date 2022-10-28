<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\EasySeeder;

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

Route::get('/', function () {
    return view('LandingPageView');
})->name('home');





Route::get('/home', function () {
    return view('LandingPageView');
});

Route::get('/guidance', function () {
    return view('Guidance');
})->name('guidance');

// Route::get('/seed', [EasySeeder::class,'seed'])->name('seed');

Route::get('/admin', [SoalController::class,'admin'])->name('admin'); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/quiz/{nomor}', [SoalController::class,'show'])->name('showSoal'); 
    Route::get('/startTryout/{nomor}', [SoalController::class,'start'])->name('startTryout'); 
    Route::get('/tryout', function () {
        return view('tryout');
    })->name('tryout');




    Route::get('/aftermath', function () {
        return view('aftermath');
    })->name('aftermath');
    Route::get('/tryout/submit', [SoalController::class,'tryoutsubmit'])->name('tryoutsubmit');
    Route::get('/tryout/confirm', [SoalController::class,'tryoutconfirm'])->name('tryoutconfirm');
    Route::post('/answer', [SoalController::class,'answer'])->name('answer'); 
    
}

);
