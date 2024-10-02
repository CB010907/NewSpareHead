<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController
{
    public function SpareHeadHome()
    {
    return view('home.homepage');
    }
    public function AuthenticationUserAdmin()
    {
        // Check if the user is authenticated
        if (Auth::check()) { // Use Auth::check() to verify if a user is logged in
            $usertype = Auth::user()->usertype; // Retrieve the user type

            // Redirect based on user type
            if ($usertype == 'admin') {
                return view('admin.dashboard'); // Load admin dashboard
            } elseif ($usertype == 'user') {
                return view('home.homepage'); // Load user dashboard
            }

            return redirect()->back(); // Redirect back for other user types
        }

        // Redirect unauthenticated users to the login page
        return redirect()->route('login'); // Ensure you have a route named 'login'
    }
}
