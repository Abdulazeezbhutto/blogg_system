<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view("admin.dashboard");
    }

    function blogg(){
        return view("admin.blogg.blogg");
    }

    function create(){
        return view("admin.blogg.create");
    }

    function edit(){
        return view("admin.blogg.editblogg");
    }

    function profil(){
        return view("admin.profile.profil");
    }
}
