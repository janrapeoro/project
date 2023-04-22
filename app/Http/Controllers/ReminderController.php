<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class ReminderController extends Controller
{
  public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->firstOrNew([]); // assuming you have a notifications relationship on your user model
        return view('finance-reminder-customization', compact('notifications'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->notifications()->update($request->all()); // assuming you have a notifications relationship on your user model
        return redirect()->route('finance-reminder-customization')->with('success', 'Settings updated!');
    }

}
