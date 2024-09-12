<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CRUD;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // Ensure this matches your view file
    }

    // Process login request
    public function loginProcess(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get credentials from the request
        $credentials = $request->only('username', 'password');

        // Find the user by username in the CRUD table
        $user =  CRUD::where('Username', $credentials['username'])->first();

        // Check if the user exists and if the password is correct
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Log the user in
            Auth::login($user);

            // Redirect to the intended page or 'res' route
            return redirect()->intended('res');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput(); // Preserve input except for password
    }
}
