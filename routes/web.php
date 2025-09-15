<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminusersController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;



Route::get('/', function () {
    return view('welcome');
});



//Public Routes ____________________________________________________________
Route::view("login","auth.loginform");
Route::view("signup","auth.signupform");
Route::view("bloggs","bloggs");
Route::view("category","category");
Route::view("singlepost","singleblogg");
Route::view("about","about");
Route::view("contact","contactus");

//Auth Routes ___________________________________________________________
Route::post("signup",[SignupController::class,"signup"]);
Route::get("login",[SignupController::class,"loginform"]);

//Private Routes ___________________________________________________________

Route::get("admin",[AdminController::class,"dashboard"]);
Route::get("blogg",[AdminController::class,"blogg"]);
Route::get("create",[AdminController::class,"create"]);
Route::get("edit",[AdminController::class,"edit"]);
Route::get("profile",[AdminController::class,"profil"]);

//--------------------------------------------------------------------------

Route::get("listcategory",[CategoryController::class,"list"]);
Route::get("createcategory",[CategoryController::class,"create"]);
Route::get("editcategory",[CategoryController::class,"edit"]);

//--------------------------------------------------------------------------
Route::get("listusers",[AdminusersController::class,"list"]);
Route::get("edituser",[AdminusersController::class,"edit"]);
Route::get("adduser",[AdminusersController::class,"create"]);


//--------------------------------------------------------------------------
Route::get("listcomments",[AdminCommentsController::class,"list"]);

//--------------------------------------------------------------------------

// User Routes _____________________________________________________________
Route::get("userdashboard",[UserController::class,"dashboard"]);