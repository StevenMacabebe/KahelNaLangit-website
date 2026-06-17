<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UpdatePost;
use App\Models\Partnership;
use App\Models\WishlistItem;
use App\Models\Inquiry;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $updatesCount = UpdatePost::count();
        $partnershipsCount = Partnership::count();
        $wishlistCount = WishlistItem::count();
        $inquiriesCount = Inquiry::where('status', 'pending')->count();
        $recentUpdates = UpdatePost::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'updatesCount',
            'partnershipsCount',
            'wishlistCount',
            'inquiriesCount',
            'recentUpdates'
        ));
    }
}