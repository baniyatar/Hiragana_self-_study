<?php
use App\Models\User;
use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
  
use App\Http\Controllers\Auth\AuthController;
  

  
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');
Route ::get('/edit', function(){
return view('/Admin/edit');});



//  ## View 
// Route::get('users',   [AuthController::class,'edit'])->name('users');

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

Route::get('dashboardadmin',[AuthController::class,'show']);

// Route::any('/search',function(){
//     $q = Request::get ( 'q' );
//     $user = User::where('name','LIKE','%'.$q.'%')->orWhere('firstname','LIKE','%'.$q.'%')->get();
//     if(count($user) > 0)
//         return view('dashboardadmin')->withDetails($user)->withQuery ( $q );
//     else return view ('dashboardadmin')->withMessage('No Details found. Try to search again !');
// });