<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\post;
use Illuminate\Support\Facades\DB;  
class AdminController extends Controller
{
    function dashboard()
    {


        return view("admin.dashboard");
    }

    function blogg()
    {
        $blogs = DB::table('post')
            ->join('category', 'post.category_id', '=', 'category.id')
            ->join('user', 'post.user_id', '=', 'user.id')
            ->select(
                'post.*',
                'category.name as category_name',
                'user.first_name as user_first_name',
                'user.middle_name as user_middle_name',
                'user.last_name as user_last_name'
            )
            ->get();

            $categories = categories::all();

        return view("admin.blogg.blogg", compact('blogs',"categories"));
    }

    function create()
    {
        $categories = categories::all();
        return view("admin.blogg.create", compact('categories'));
    }

    public function storeblog(Request $request)
    {
        // ✅ Validation




        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:category,id',
            'blog_content' => 'required|string|min:50',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // ✅ Image Upload Handling
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
        }

        // ✅ Store in DB
        $blog = post::create([
            'title' => $request->title,
            'content' => $request->blog_content,
            'category_id' => $request->category_id,
            'user_id' => $request->session()->get('LoggedUser')->id, // current logged in user ka id
            'image' => $imageName,
        ]);

        if ($blog) {
            return redirect("blogg")->with('success', 'Blog created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create blog. Please try again.');
        }
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
            "first_name" => $request->first_name,
            "middle_name" => $request->middle_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
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
