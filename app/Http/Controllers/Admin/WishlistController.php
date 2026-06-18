<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        // Upload Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/wishlist'), $filename);
            $data['image'] = $filename;
        }

        $data['quantity_received'] = $request->quantity_received ?? 0;
        $data['status'] = $request->quantity_received >= $request->quantity_needed ? 'complete' : 'incomplete';
        $data['created_by'] = auth()->guard('admin')->id();

        WishlistItem::create($data);

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
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        // Upload Image
        if ($request->hasFile('image')) {
            // Delete old image
            if ($item->image) {
                $oldPath = public_path('images/uploads/wishlist/' . $item->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/wishlist'), $filename);
            $data['image'] = $filename;
        }

        $data['quantity_received'] = $request->quantity_received ?? 0;
        $data['status'] = $request->quantity_received >= $request->quantity_needed ? 'complete' : 'incomplete';

        $item->update($data);

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item updated successfully!');
    }

    public function destroy($id)
    {
        $item = WishlistItem::findOrFail($id);

        // Delete image
        if ($item->image) {
            $oldPath = public_path('images/uploads/wishlist/' . $item->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }

        $item->delete();

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item deleted successfully!');
    }
}
