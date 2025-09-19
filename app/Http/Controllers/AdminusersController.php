<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class AdminusersController extends Controller
{

    function create(){
        
        return view("admin.users.adduser");
    }
    function list(){
        $users = users::all();

        return view("admin.users.userslist",["users" =>$users]);
    }

    function edit($id){
        $user = users::findOrFail($id);
        return view("admin.users.usersedit",["user"=>$user]);
    }
    function updateuser(Request $request){
        // return $request->all();
        $request->validate([
            "role"=>"required",
        ]);

        $user = users::findOrFail($request->id);
        $user->role = $request->role;
        if($user->update()){
            return redirect("listusers")->with("success","User updated successfully");
        }else{
            return back()->with("fail","Something went wrong");
        }

    
    }


    function deleteuser(Request $request){
        // return $request;
        $user = users::find($request->id);
        // delete user

        if($user->delete()){

            return back()->with("success, Record Deleted Successfully");
        }else{
            return back()->with("error, Record Not deleted");
        }
    }
}