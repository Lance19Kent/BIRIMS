<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'phone_number' => 'required|string|max:11',
            'terms' => 'accepted',
        ]);

        $name = $request->middle_name
            ? "{$request->first_name} {$request->middle_name} {$request->last_name}"
            : "{$request->first_name} {$request->last_name}";

        try {
            $user = User::create([
                'name' => $name,
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'birthdate' => $validated['birthdate'],
                'gender' => $validated['gender'],
                'phone_number' => $validated['phone_number'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'middle_name' => $validated['middle_name'],
            ]);

            // Redirect to login with success message
            return redirect('/login')->with('success', 'Account created successfully! Please login with your credentials.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the account.');
        }
    }
}