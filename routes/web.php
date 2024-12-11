<?php

use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

Route::get('/', function () {
    $resuts = Result::all();
    return view('index',[
        'results' => $resuts
    ]);
});

Auth::routes();
Route::post('/result/store',[ResultController::class,'store'])->name('result.store');
Route::get('/result/show/{id}',[ResultController::class,'show'])->name('result.show');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
