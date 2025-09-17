<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class AdminController extends Controller
{
    function dashboard()
    {


        return view("admin.dashboard");
    }

    function blogg()
    {
        return view("admin.blogg.blogg");
    }

    function create()
    {
        return view("admin.blogg.create");
    }

    function edit()
    {
        return view("admin.blogg.editblogg");
    }

    function profil(Request $request)
    {
        $id = $request->session()->get('LoggedUser')->id;
        $user = users::where("id", $id)->first();
        return view("admin.profile.profil", ["user" => $user]);

    }

    public function updateprofile(Request $request)
{
    $request->validate([
        // "id" => "required|exists:users,id",
        "first_name" => "required",
        "middle_name" => "nullable",
        "last_name" => "required",
        "email" => "required|email",
        "profileImage" => "nullable|mimes:jpg,jpeg,png|max:2048",
    ]);

    // User find karo
    $user = Users::findOrFail($request->session()->get('LoggedUser')->id);

    // Data array prepare karo
    $data = [
        "first_name"  => $request->first_name,
        "middle_name" => $request->middle_name,
        "last_name"   => $request->last_name,
        "email"       => $request->email,
    ];

    // Agar image aayi hai to upload karo
    if ($request->hasFile('profileImage')) {
        $image = $request->file('profileImage');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('uploads/profile'), $imageName);

        // Array me path add karo
        $data["image_path"] = 'uploads/profile/' . $imageName;
    }

    // Direct update
    $user->update($data);

    return back()->with("success", "Profile updated successfully!");
}




}
