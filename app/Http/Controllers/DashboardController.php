<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Pass data to the view if needed
        $user = auth()->user(); // Get the logged-in user
        return view('dashboard.index', compact('user'));
    }
}
