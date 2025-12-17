<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class NotificationController extends Controller
{
    /**
     * Show notifications for the authenticated user.
     */
    public function index(Request $request): View
    {
        $userId = Auth::id();

        // fetch notifications for the user, newest first
        $notifications = Notification::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('notifications', [
            'notifications' => $notifications,
        ]);
    }

    /**
     * Mark a single notification as read.
     */
    public function markAsRead(int $id): RedirectResponse
    {
        $userId = Auth::id();

        $notification = Notification::where('id', $id)
            ->where('user_id', $userId)
            ->first();

        if ($notification) {
            $notification->update(['is_read' => true]);
            return back()->with('success', 'Notification marked as read.');
        }

        return back()->withErrors('Notification not found.');
    }

    /**
     * Delete a single notification.
     */
    public function destroy(int $id): RedirectResponse
    {
        $userId = Auth::id();

        $notification = Notification::where('id', $id)
            ->where('user_id', $userId)
            ->first();

        if ($notification) {
            $notification->delete();
            return back()->with('success', 'Notification deleted.');
        }

        return back()->withErrors('Notification not found.');
    }
}
