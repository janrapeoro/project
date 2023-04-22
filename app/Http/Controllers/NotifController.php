<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function index()
    {
        return view('finance-reminder-customization');
    }


    public function store(Request $request)
{
    $request->validate([
        'email' => 'nullable|email',
        'sms' => 'nullable|string|max:255',
        'frequency' => 'required|in:daily,weekly,monthly',
    ]);

    $preferences = [
        'email' => $request->input('email'),
        'sms' => $request->input('sms'),
        'frequency' => $request->input('frequency'),
    ];

    $request->session()->put('notification_preferences', $preferences);

    return redirect()->back()->with('message', 'Notification preferences saved.');
}


}
