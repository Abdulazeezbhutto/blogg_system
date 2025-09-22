<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminusersController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\auth;
use App\Http\Controllers\PublicController;


Route::get("/",[PublicController::class,"homepage"]);



//Public Routes ____________________________________________________________
Route::view('/login', 'auth.loginform')->name('login');
Route::view("signup","auth.signupform")->name("signup");
Route::get("bloggs",[PublicController::class,"bloggs"]);
Route::get("category/{id}",[PublicController::class,"category"]);
Route::get("singlepost/{id}",[PublicController::class,"singlepost"]);
Route::view("about","about")->name("about");
Route::view("contact","contactus")->name("contact");
Route::post("addcomment",[PublicController::class, "addcomment"]);

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
    Route::get("edit/{id}", [AdminController::class, "edit"]);
    Route::get("profile", [AdminController::class, "profil"]);
    
    
    //-------------------------------------------------------------------------------
    // Category Routes
    //---------------------------------------------------------------------------------
    Route::get("listcategory", [CategoryController::class, "list"]);
    Route::get("createcategory", [CategoryController::class, "create"]);
    Route::post("storecategory", [CategoryController::class, "store"]);
    Route::get("editcategory/{id}", [CategoryController::class, "edit"]);
    Route::post("updatecategory", [CategoryController::class, "update"]);
    Route::post("deletecategory", [CategoryController::class, "deletecategory"]);

    

    //--------------------------------------------------------------------------------
    // End
    //-------------------------------------------------------------------------------

    //----------------------------------------------------------------------------------
    // blogg routes
    //------------------------------------------------------------------------------

    Route::post("storeblog",[AdminController::class, "storeblog"]);
    Route::post("updateblog",[AdminController::class, "updateblog"]);
    Route::post("deleteblog",[AdminController::class, "deleteblog"]);
    //------------------------------------------------------------------------------------
    //end
    //-----------------------------------------------------------------------------------
    Route::get("listusers", [AdminusersController::class, "list"]);
    Route::get("edituser/{id}", [AdminusersController::class, "edit"]);
    Route::post("updateuser", [AdminusersController::class, "updateuser"]);
    Route::post("deleteuser", [AdminusersController::class, "deleteuser"]);
    Route::get("adduser", [AdminusersController::class, "create"]);
    Route::get("listcomments", [AdminCommentsController::class, "list"]);
    Route::post("updateprofile", [AdminController::class, "updateprofile"]);


    // User Routes
    Route::get("userdashboard", [UserController::class, "dashboard"]);
    Route::get("userprofile", [UserController::class, "profile"]);

});
    //--------------------------------------------------------------------------

    