<?php

namespace App\Http\Controllers;

use App\Models\UpdatePost;
use App\Models\WishlistItem;
use App\Models\Partnership;

class HomeController extends Controller
{
    public function index()
    {
        // Get latest updates (announcements and project updates)
        $updates = UpdatePost::latest()->take(3)->get();
        
        // Get wishlist items that are not complete
        $wishlist = WishlistItem::where('status', '!=', 'complete')->get();
        
        // Get current partnerships
        $partnerships = Partnership::where('status', 'current')->get();

        return view('login', compact('updates', 'wishlist', 'partnerships'));
    }
}