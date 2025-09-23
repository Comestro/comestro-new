<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        // Only allow admins to access registration page
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('auth.register');
        }
        
        return redirect('/');
    }
    
    /**
     * Handle a registration request.
     */
    public function register(Request $request)
    {
        // Only admins can create new users
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            return redirect('/')->with('error', 'You do not have permission to register new users.');
        }
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,editor,user'],
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        
        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }
}
