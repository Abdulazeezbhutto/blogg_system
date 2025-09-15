<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup(Request $request)
    {
        // Validate form data

        // return $request->first_name;
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'profileImage' => 'nullable|image|max:2048', // Optional
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            // 'state' => 'nullable|string|max:255',
        ]);

        // return $request->first_name;


        // Handle profile image if uploaded
        $profileImagePath = null;
        if ($request->hasFile('profileImage')) {
            $profileImagePath = $request->file('profileImage')->store('profile_images', 'public');
        }

        // return $request->first_name;
        // return $profileImagePath;
        $name = $request->first_name ." ".$request->middle_name ." ".$request->last_name;
        // Create user
        $user = User::create([
            'name'=>$name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'profile_image' => $profileImagePath,
            'address' => $request->address,
            'city' => $request->city,
            // 'state' => $request->state,
            // 'role' => 'user', // Default role in migration
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Signup Successful. Please login.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Signup failed. Please try again.'])->withInput();
        }
    }

    public function loginform(){
        return view("auth.loginform");
    }
}
