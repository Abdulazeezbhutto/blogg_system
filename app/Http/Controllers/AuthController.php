<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function signup(Request $request)
    {
    
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8',
            'address' => 'nullable|string|max:500',
            'phone_number' => 'string|max:15',
            'profileImage' => 'nullable|image|',
        ]);

        // image handling
        $imageName = null;
        if ($request->hasFile('profileImage')) {
            $image = $request->file('profileImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile'), $imageName);
        }

        // return $imageName;

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
            'image_path' => $imageName ?? null,
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
