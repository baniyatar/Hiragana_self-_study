<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


  
use App\Http\Controllers\Auth\AuthController;
  
use App\Http\Controllers\Kanji5qController;
  
Route::get('/dashboard', function () {
    return view('dashboard');
});

  
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('/dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');


Route ::get('/editRegistration', function(){
    return view('/Admin/editRegistration');});

Route::get('/dashboardkanji', function () { 
    return view('Kanji/dashboardkanji');
});


  
Route::get('/kanjilogin', [Kanji5qController::class, 'index'])->name('kanjilogin5q.post'); 
Route::post('post-login', [Kanji5qController::class, 'postLogin'])->name('kanjilogin5q.post'); 
Route::get('kanjiRegistration', [Kanji5qController::class, 'kanjiRegistration'])->name('kanjiRegistration');
Route::post('post-registration', [Kanji5qController::class, 'postRegistration'])->name('kanjiRegistration5q.post'); 
// Route::get('/dashboard', [Kanji5qController::class, 'dashboard']); 
Route::get('logout', [Kanji5qController::class, 'logout'])->name('logout');
Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');


