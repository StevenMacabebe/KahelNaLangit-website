<?php

namespace App\Http\Controllers;

use App\Models\DonationChannel;

class DonateController extends Controller
{
    public function index()
    {
        $donation = DonationChannel::first();
        return view('donate', compact('donation'));
    }
}