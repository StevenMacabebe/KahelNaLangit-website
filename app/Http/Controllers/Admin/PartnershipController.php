<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();
        return view('admin.partnerships.index', compact('partnerships'));
    }

    public function create()
    {
        return view('admin.partnerships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'website' => 'nullable|string',
            'status' => 'required|in:current,past',
        ]);

        Partnership::create([
            'name' => $request->name,
            'description' => $request->description,
            'website' => $request->website,
            'status' => $request->status,
            'created_by' => auth()->guard('admin')->id(),
        ]);

        return redirect()->route('admin.partnerships.index')->with('success', 'Partnership created successfully!');
    }

    public function edit($id)
    {
        $partnership = Partnership::findOrFail($id);
        return view('admin.partnerships.edit', compact('partnership'));
    }

    public function update(Request $request, $id)
    {
        $partnership = Partnership::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'website' => 'nullable|string',
            'status' => 'required|in:current,past',
        ]);

        $partnership->update([
            'name' => $request->name,
            'description' => $request->description,
            'website' => $request->website,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.partnerships.index')->with('success', 'Partnership updated successfully!');
    }

    public function destroy($id)
    {
        $partnership = Partnership::findOrFail($id);
        $partnership->delete();

        return redirect()->route('admin.partnerships.index')->with('success', 'Partnership deleted successfully!');
    }
}