<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceReminderCustomizationController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'email' => 'nullable|email',
        'sms' => 'nullable',
        'interval' => 'nullable|integer',
    ]);

    $userPreferences = [
        'email' => $request->input('email'),
        'sms' => $request->input('sms') ? true : false,
        'interval' => $request->input('interval') ?: 0,
    ];

    session()->put('finance-reminder-customization', $userPreferences);

    return redirect()->route('finance-reminder-customization.index')->with('success', 'Preferences saved.');
}

}
