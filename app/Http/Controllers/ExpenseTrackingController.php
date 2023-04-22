<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseTrackingController extends Controller
{
    //

    public function index()
{
    return view('expense-tracking.index');
}


}

