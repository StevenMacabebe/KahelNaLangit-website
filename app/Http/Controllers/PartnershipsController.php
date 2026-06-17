<?php

namespace App\Http\Controllers;

use App\Models\Partnership;

class PartnershipsController extends Controller
{
    public function index()
    {
        // Get all partnerships from database
        $partnerships = Partnership::all();
        
        // Pass them to the view
        return view('partnerships', compact('partnerships'));
    }
}