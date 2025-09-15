<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminusersController extends Controller
{

    function create(){
        return view("admin.users.adduser");
    }
    function list(){
        return view("admin.users.userslist");
    }

    function edit(){
        return view("admin.users.usersedit");
    }
}
