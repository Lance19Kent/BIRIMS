<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('settings', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'first_name'      => 'required|string|max:255',
            'last_name'       => 'required|string|max:255',
            'middle_name'     => 'nullable|string|max:255',
            'birthdate'       => 'nullable|date',
            'gender'          => 'nullable|string|max:20',
            'phone_number'    => 'nullable|string|max:11',
            'email'           => 'required|email|unique:users,email,' . $user->id,
            'place_of_birth'  => 'nullable|string|max:255',
            'citizenship'     => 'nullable|string|max:255',
            'civil_status'    => 'nullable|string|max:255',
            'occupation'      => 'nullable|string|max:255',
            'house_no'        => 'nullable|string|max:50',
            'street'          => 'nullable|string|max:255',
        ]);

        $user->update($validated);

        return back()->with('success', 'Information updated!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password'      => 'required',
            'new_password'          => 'required|min:8|confirmed'
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated!');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();

        Auth::logout();
        $user->delete();

        return redirect('/login')->with('success', 'Account deleted.');
    }
}