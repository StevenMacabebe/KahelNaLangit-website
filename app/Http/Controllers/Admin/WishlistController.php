<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = WishlistItem::all();
        return view('admin.wishlist.index', compact('wishlist'));
    }

    public function create()
    {
        return view('admin.wishlist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity_needed' => 'required|integer|min:1',
            'quantity_received' => 'nullable|integer|min:0',
        ]);

        WishlistItem::create([
            'item_name' => $request->item_name,
            'description' => $request->description,
            'quantity_needed' => $request->quantity_needed,
            'quantity_received' => $request->quantity_received ?? 0,
            'status' => $request->quantity_received >= $request->quantity_needed ? 'complete' : 'incomplete',
            'created_by' => auth()->guard('admin')->id(),
        ]);

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item added successfully!');
    }

    public function edit($id)
    {
        $item = WishlistItem::findOrFail($id);
        return view('admin.wishlist.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = WishlistItem::findOrFail($id);

        $request->validate([
            'item_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity_needed' => 'required|integer|min:1',
            'quantity_received' => 'nullable|integer|min:0',
        ]);

        $item->update([
            'item_name' => $request->item_name,
            'description' => $request->description,
            'quantity_needed' => $request->quantity_needed,
            'quantity_received' => $request->quantity_received ?? 0,
            'status' => $request->quantity_received >= $request->quantity_needed ? 'complete' : 'incomplete',
        ]);

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item updated successfully!');
    }

    public function destroy($id)
    {
        $item = WishlistItem::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item deleted successfully!');
    }
}