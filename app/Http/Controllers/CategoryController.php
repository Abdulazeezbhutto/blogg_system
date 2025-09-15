<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list(){
        return view("admin.category.listcategory");
    }
    function create(){
        return view("admin.category.createcategory");
    }

    function edit(){
        return view("admin.category.editcategory");
    }
}
