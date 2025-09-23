<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function dashboard(Request $request){
        return view("user.dashboard",["request",$request]);
    }
    function profile(Request $request){
        $id = $request->session()->get("LoggedUser")->id;

        // return $id;
        $user = Users::findOrFail($id);
        

        return view("user.profile",["user" =>$user]);
    }
}
