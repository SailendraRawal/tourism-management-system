<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt authentication with the provided credentials
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Check the user's role and redirect accordingly
            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Welcome, Admin!');
            } else {
                $data = Package::all();
                return view('website.pages.destinations', compact('data'));
            }
        }

        // If authentication fails, return with an error and old input
        return back()
            ->withErrors(['email' => 'Invalid email or password.'])
            ->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showRegistrationForm()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create the user with the 'user' role
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role
        ]);

        // Login the user after registration
        auth()->login($user);

        return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('success', 'Registration successful! Welcome.');
    }
}
