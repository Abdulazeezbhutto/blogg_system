<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminusersController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\auth;



Route::get('/', function () {
    return view('welcome');
});



//Public Routes ____________________________________________________________
Route::view('/login', 'auth.loginform')->name('login');
Route::view("signup","auth.signupform")->name("signup");
Route::view("bloggs","bloggs")->name("bloggs");
Route::view("category","category")->name("category");
Route::view("singlepost","singleblogg")->name("singlepost");
Route::view("about","about")->name("about");
Route::view("contact","contactus")->name("contact");

//Auth Routes ___________________________________________________________
Route::post("signup",[AuthController::class,"signup"]);
Route::post("login",[AuthController::class,"login"]);
Route::get("logout",[AuthController::class,"logout"]);

//--------------------------------------------------------------------------

//Private Routes ___________________________________________________________
   
// Admin Routes
Route::middleware([auth::class])->group(function(){

    Route::get("admin", [AdminController::class, "dashboard"]);
    Route::get("blogg", [AdminController::class, "blogg"]);
    Route::get("create", [AdminController::class, "create"]);
    Route::get("edit", [AdminController::class, "edit"]);
    Route::get("profile", [AdminController::class, "profil"]);
    Route::get("listcategory", [CategoryController::class, "list"]);
    Route::get("createcategory", [CategoryController::class, "create"]);
    Route::get("editcategory", [CategoryController::class, "edit"]);
    Route::get("listusers", [AdminusersController::class, "list"]);
    Route::get("edituser", [AdminusersController::class, "edit"]);
    Route::get("adduser", [AdminusersController::class, "create"]);
    Route::get("listcomments", [AdminCommentsController::class, "list"]);
    Route::post("updateprofile", [AdminController::class, "updateprofile"]);


    // User Routes
    Route::get("userdashboard", [UserController::class, "dashboard"]);
    Route::get("userprofile", [UserController::class, "profile"]);

});
    //--------------------------------------------------------------------------

    