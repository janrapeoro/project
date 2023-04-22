<?php

// app/Http/Controllers/NotificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $notification = new Notification;
        $notification->user_id = $user->id;
        $notification->type = $request->type;

        switch ($request->type) {
            case 'upcoming_bills':
                $notification->days = $request->days;
                break;
            case 'unusual_spending_patterns':
                $notification->threshold = $request->threshold;
                break;
        }

        $notification->save();

        return redirect()->back()->with('success', 'Notification created successfully!');
    }
}

