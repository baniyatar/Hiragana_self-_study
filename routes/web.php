<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


  
use App\Http\Controllers\Auth\AuthController;
  

  


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/content', function () {
    return view('content');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');
Route ::get('/edit', function(){
return view('/Admin/edit');});
// Route::post('checkemail',[AuthController::class,'checkEmail']);


 ## View 
Route::get('users',   [AuthController::class,'edit'])->name('users');

// ## Create
// Route::get('/Admin/create', [AuthController::class,'create'])->name('users.create');
// Route::post('/Admin/store', [AuthController::class,'store'])->name('users.store');

// ## Update
// Route::get('/Admins/store/{id}', [AuthController::class,'edit'])->name('users.edit');
// Route::post('/Admin/update/{id}', [AuthController::class,'update'])->name('users.update');

// ## Delete
// Route::get('/Admin/delete/{id}',   [AuthController::class,'destroy'])->name('users.delete');
// Route::get('/show', function () {
//     return view('Auth/show');
// });
Route::get('/main', function () {
    return view('main');
});
Route::get('/alist', function () {
    return view('/Vocabulary/Alist/alist');
});

Route::get('/aka', function () {
    return view('/Vocabulary/Alist/aka');
});
Route::get('/ashi', function () {
    return view('/Vocabulary/Alist/ashi');
});
Route::get('/atama', function () {
    return view('/Vocabulary/Alist/atama');
});

Route::get('/aame', function () {
    return view('/Vocabulary/Alist/aame');
});
Route::get('/aorder', function () {
    return view('/Vocabulary/Alist/aorder');
});
Route::get('/hiraganatable', function () {
    return view('/hiraganaあーんtable');
});
Route::get('/home', function () {
    return view('/Home');
});



Route::get('dashboardadmin',[AuthController::class,'show']);

