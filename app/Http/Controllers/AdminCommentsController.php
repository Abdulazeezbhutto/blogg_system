<?php

namespace App\Http\Controllers;
use App\Models\comment;

use Illuminate\Http\Request;

class AdminCommentsController extends Controller
{
    function list(){
        $all_Comments = comment::all();
        $total_count = comment::count();
        // return $total_count;
        return view("admin.comments.list",["all_comments" =>$all_Comments,"total_count"=>$total_count]);
    }
}
