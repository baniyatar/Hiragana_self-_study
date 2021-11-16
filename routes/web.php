<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Hiragana5qController;


  


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/content', function () {
    return view('content');
});

Route::get('/testLetterA', function () {
    return view('testAview');
});

Route::get('/testLetterAka', function () {
    return view('testAkaview');
});

Route::get('/testLetterAshi', function () {
    return view('testAshiview');
});

Route::get('/testLetterAme', function () {
    return view('testAmeview');
});

Route::get('/testLetterAtama', function () {
    return view('testAtamaview');
});

Route::get('/', function () {
    return view('welcome');
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

Route::get('/hiraganatable', function () {
    return view('/hiraganaあーんtable');
});
Route::get('/home', function () {
    return view('/Home');
});

Route::get('/return', [Hiragana5qController::class, 'viewLastPointCheck']);
Route::post('/return',[Hiragana5qController::class, 'returnToLastPoint']);
Route::get('dashboardadmin',[AuthController::class,'show']);

Route::get('/aAlphabet', [Hiragana5qController::class, 'viewAAlphabet']);
Route::get('/iAlphabet', [Hiragana5qController::class, 'viewIAlphabet']);
Route::get('/uAlphabet', [Hiragana5qController::class, 'viewUAlphabet']);
Route::get('/eAlphabet', [Hiragana5qController::class, 'viewEAlphabet']);
Route::get('/oAlphabet', [Hiragana5qController::class, 'viewOAlphabet']);

Route::get('/kaAlphabet', [Hiragana5qController::class, 'viewKaAlphabet']);
Route::get('/kiAlphabet', [Hiragana5qController::class, 'viewKiAlphabet']);
Route::get('/kuAlphabet', [Hiragana5qController::class, 'viewKuAlphabet']);
Route::get('/keAlphabet', [Hiragana5qController::class, 'viewKeAlphabet']);
Route::get('/koAlphabet', [Hiragana5qController::class, 'viewKoAlphabet']);

Route::get('/saAlphabet', [Hiragana5qController::class, 'viewSaAlphabet']);
Route::get('/shiAlphabet', [Hiragana5qController::class, 'viewShiAlphabet']);
Route::get('/suAlphabet', [Hiragana5qController::class, 'viewSuAlphabet']);
Route::get('/seAlphabet', [Hiragana5qController::class, 'viewSeAlphabet']);
Route::get('/soAlphabet', [Hiragana5qController::class, 'viewSoAlphabet']);

Route::get('/taAlphabet', [Hiragana5qController::class, 'viewTaAlphabet']);
Route::get('/chiAlphabet', [Hiragana5qController::class, 'viewChiAlphabet']);
Route::get('/tsuAlphabet', [Hiragana5qController::class, 'viewTsuAlphabet']);
Route::get('/teAlphabet', [Hiragana5qController::class, 'viewTeAlphabet']);
Route::get('/toAlphabet', [Hiragana5qController::class, 'viewToAlphabet']);

Route::get('/naAlphabet', [Hiragana5qController::class, 'viewNaAlphabet']);
Route::get('/niAlphabet', [Hiragana5qController::class, 'viewNiAlphabet']);
Route::get('/nuAlphabet', [Hiragana5qController::class, 'viewNuAlphabet']);
Route::get('/neAlphabet', [Hiragana5qController::class, 'viewNeAlphabet']);
Route::get('/noAlphabet', [Hiragana5qController::class, 'viewNoAlphabet']);

Route::get('/haAlphabet', [Hiragana5qController::class, 'viewHaAlphabet']);
Route::get('/hiAlphabet', [Hiragana5qController::class, 'viewHiAlphabet']);
Route::get('/fuAlphabet', [Hiragana5qController::class, 'viewFuAlphabet']);
Route::get('/heAlphabet', [Hiragana5qController::class, 'viewHeAlphabet']);
Route::get('/hoAlphabet', [Hiragana5qController::class, 'viewHoAlphabet']);

Route::get('/maAlphabet', [Hiragana5qController::class, 'viewMaAlphabet']);
Route::get('/miAlphabet', [Hiragana5qController::class, 'viewMiAlphabet']);
Route::get('/muAlphabet', [Hiragana5qController::class, 'viewMuAlphabet']);
Route::get('/meAlphabet', [Hiragana5qController::class, 'viewMeAlphabet']);
Route::get('/moAlphabet', [Hiragana5qController::class, 'viewMoAlphabet']);

Route::get('/yaAlphabet', [Hiragana5qController::class, 'viewYaAlphabet']);
Route::get('/yuAlphabet', [Hiragana5qController::class, 'viewYuAlphabet']);
Route::get('/yoAlphabet', [Hiragana5qController::class, 'viewYoAlphabet']);

Route::get('/raAlphabet', [Hiragana5qController::class, 'viewRaAlphabet']);
Route::get('/riAlphabet', [Hiragana5qController::class, 'viewRiAlphabet']);
Route::get('/ruAlphabet', [Hiragana5qController::class, 'viewRuAlphabet']);
Route::get('/reAlphabet', [Hiragana5qController::class, 'viewReAlphabet']);
Route::get('/roAlphabet', [Hiragana5qController::class, 'viewRoAlphabet']);

Route::get('/waAlphabet', [Hiragana5qController::class, 'viewWaAlphabet']);
Route::get('/woAlphabet', [Hiragana5qController::class, 'viewWoAlphabet']);
Route::get('/nAlphabet', [Hiragana5qController::class, 'viewNAlphabet']);

Route::get('/gaAlphabet', [Hiragana5qController::class, 'viewGaAlphabet']);
Route::get('/giAlphabet', [Hiragana5qController::class, 'viewGiAlphabet']);
Route::get('/guAlphabet', [Hiragana5qController::class, 'viewGuAlphabet']);
Route::get('/geAlphabet', [Hiragana5qController::class, 'viewGeAlphabet']);
Route::get('/goAlphabet', [Hiragana5qController::class, 'viewGoAlphabet']);

Route::get('/zaAlphabet', [Hiragana5qController::class, 'viewZaAlphabet']);
Route::get('/ziAlphabet', [Hiragana5qController::class, 'viewZiAlphabet']);
Route::get('/zuAlphabet', [Hiragana5qController::class, 'viewZuAlphabet']);
Route::get('/zeAlphabet', [Hiragana5qController::class, 'viewZeAlphabet']);
Route::get('/zoAlphabet', [Hiragana5qController::class, 'viewZoAlphabet']);


Route::get('/intro', [Hiragana5qController::class, 'viewIntroPage']);
Route::get('/construct', [Hiragana5qController::class, 'viewConstructPage']);
Route::get('/voicedIntro', [Hiragana5qController::class, 'viewVoicedIntroPage']);
Route::get('/voicedConstruct', [Hiragana5qController::class, 'viewVoicedConstructPage']);
Route::get('/home', [Hiragana5qController::class, 'viewHomePage']);
