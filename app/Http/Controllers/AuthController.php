<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function signup(Request $request)
    {
        // return $request->all();
        // die();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8',
            'address' => 'nullable|string|max:500',
            'phone_number' => 'string|max:15',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // image handling
        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images'), $imageName);
            $request->merge(['image_path' => 'images/' . $imageName]);
        } else {
            // agar user image upload nahi kare to default image set kar do
            $request->merge(['image_path' => 'images/default.png']);
        }


        $request->merge(['password' => Hash::make($request->password)]);
        $table = new users([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'remember_token' => \Str::random(10),
            'image_path' => $request->image_path ?? null,
            'role' => 'user',
        ]);

        if ($table->save()) {
            return redirect("login")->with("success", "You have signed up successfully. Please login.");
        } else {
            return back()->with("fail", "Something went wrong, failed to sign you up. Please try again.");
        }
    }

    function login(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = users::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            // Login successful
            $request->session()->put('LoggedUser', $user);
            if($user->role == "admin"){
                return redirect('admin')->with('success', 'Welcome to the admin dashboard!');
            } else {
                return redirect('userdashboard')->with('success', 'Welcome to your dashboard!');

            }
        } else {
            // Login failed
            return back()->with('fail', 'Invalid email or password. Please try again.');
        }
       
    }

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login')->with('success', 'You have been logged out successfully.');
        }
    }
    
}
