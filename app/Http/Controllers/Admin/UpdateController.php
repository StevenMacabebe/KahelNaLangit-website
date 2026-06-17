<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UpdatePost;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index()
    {
        $updates = UpdatePost::latest()->get();
        return view('admin.updates.index', compact('updates'));
    }

    public function create()
    {
        return view('admin.updates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|in:announcement,project_update',
            'event_date' => 'nullable|date',
        ]);

        UpdatePost::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'event_date' => $request->event_date,
            'created_by' => auth()->guard('admin')->id(),
        ]);

        return redirect()->route('admin.updates.index')->with('success', 'Update created successfully!');
    }

    public function edit($id)
    {
        $update = UpdatePost::findOrFail($id);
        return view('admin.updates.edit', compact('update'));
    }

    public function update(Request $request, $id)
    {
        $update = UpdatePost::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|in:announcement,project_update',
            'event_date' => 'nullable|date',
        ]);

        $update->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'event_date' => $request->event_date,
            'updated_by' => auth()->guard('admin')->id(),
        ]);

        return redirect()->route('admin.updates.index')->with('success', 'Update updated successfully!');
    }

    public function destroy($id)
    {
        $update = UpdatePost::findOrFail($id);
        $update->delete();

        return redirect()->route('admin.updates.index')->with('success', 'Update deleted successfully!');
    }
}