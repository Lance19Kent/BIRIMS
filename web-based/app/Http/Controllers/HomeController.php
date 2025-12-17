<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Redirect to login if not authenticated
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // (Optional) Fetch announcements later
        // $announcements = Announcement::latest()->get();

        return view('home', [
            'user' => $user,
            // 'announcements' => $announcements
        ]);
    }
}
