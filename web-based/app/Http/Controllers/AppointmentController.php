<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('user_id', Auth::id())
            ->orderBy('appointment_date', 'desc')
            ->orderBy('appointment_time', 'desc')
            ->get();

        return view('appointment', compact('appointments'));
    }

    // Store a new appointment
    public function store(Request $request)
    {
        $validated = $request->validate([
            'diagnostic_service' => 'required|string|max:255',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required',
            'symptoms' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
        ], [
            'appointment_date.after_or_equal' => 'Appointment date must be today or in the future.',
        ]);

        $validated['user_id'] = Auth::id();

        Appointment::create($validated);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    // Cancel an appointment
    public function cancel(Appointment $appointment)
    {
        // Make sure user can only cancel their own appointment
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        $appointment->update(['status' => 'cancelled']);

        return redirect()->back()->with('success', 'Appointment cancelled successfully!');
    }

    // Mark appointment as read (optional)
    public function markAsRead(Appointment $appointment)
    {
        // Make sure user can only mark their own appointment
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        // You can add a 'read' column to the table if needed
        // For now, we'll just return success
        return redirect()->back()->with('success', 'Appointment marked as read!');
    }

    // Show a specific appointment
    public function show(Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        return view('appointments.show', compact('appointment'));
    }
}
