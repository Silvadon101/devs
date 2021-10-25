<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;
use App\Http\Controllers\UsersController;

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

// *--------Default Laravel Homepage--------
// Route::get('/', function () {
//     return view('welcome');
// });

// ?------------Home Page-----------------
Route::get('/',[DevController::class,'index']);

// ?------------Edit Button----------------
Route::get('/edit/{id}',[DevController::class,'edit']);

// TODO ------------maintenance: Show Button----------------
//Route::get('/show/{id}',[DevController::class,'show']);

// ?---------------Add Dev Button------------
Route::get('/create',[DevController::class,'create']);

// ?---------------Delete Button------------
Route::get('/delete/{id}',[DevController::class,'destroy']);

// ?----------------Add Dev Form Process-------------
Route::post('/store',[DevController::class,'store']);

// ?----------------Update Dev Info Process----------
Route::post('/update/{id}',[DevController::class,'update']);

// ?----------------Landing Page--------------------
Route::get('/land',function(){
    return view('landing');
});

// ?---------------Sign Up Page-------------------
Route::get('/signup',[UsersController::class,'signupshow']);

// ?---------------Login Page----------------------
Route::get('/login',[UsersController::class,'loginshow']);

// ?---------------Sign Out------------------------
Route::get('/signout',[UsersController::class,'destroy']);

// ----------------Sign Up Processing--------------
Route::post('signup',[UsersController::class,'store']);

// ----------------Login Processing-----------------
Route::post('login',[UsersController::class,'checklogin']);

// ?-------------- Project tag button-----------------
Route::get('/project/{id}',[DevController::class,'show']);
