<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blotter;

class BlotterController extends Controller
{
    // Show the blotter form
    public function create()
    {
        return view('blotter');
    }

    // Store the blotter report
    public function store(Request $request)
    {
        $validated = $request->validate([
            'blotter_date' => 'required|date',
            'complainant_name' => 'required|string|max:255',
            'complainant_address' => 'required|string',
            'complainant_contact' => 'required|string|max:20',
            'complainant_age' => 'required|integer|min:1|max:150',
            'respondent_name' => 'required|string|max:255',
            'respondent_address' => 'required|string',
            'respondent_contact' => 'required|string|max:20',
            'respondent_age' => 'required|integer|min:1|max:150',
            'complaint_type' => 'required|string|max:255',
            'incident_description' => 'required|string',
            'reporter_signature' => 'nullable|string',
            'reporter_name' => 'required|string|max:255',
            'report_date' => 'required|date',
            'report_time' => 'required',
        ]);

        $validated['user_id'] = Auth::id();

        Blotter::create($validated);

        return redirect()->back()->with('success', 'Blotter report submitted successfully!');
    }

    // Show all blotter reports for the user
    public function index()
    {
        $blotters = Blotter::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('blotters.index', compact('blotters'));
    }

    // Show a specific blotter report
    public function show(Blotter $blotter)
    {
        // Make sure user can only view their own blotter
        if ($blotter->user_id !== Auth::id()) {
            abort(403);
        }

        return view('blotters.show', compact('blotter'));
    }
}
