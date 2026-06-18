<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UpdatePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        // Upload Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/updates'), $filename);
            $data['image'] = $filename;
        }

        $data['created_by'] = auth()->guard('admin')->id();
        UpdatePost::create($data);

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
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        // Upload Image
        if ($request->hasFile('image')) {
            // Delete old image
            if ($update->image) {
                $oldPath = public_path('images/uploads/updates/' . $update->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/updates'), $filename);
            $data['image'] = $filename;
        }

        $data['updated_by'] = auth()->guard('admin')->id();
        $update->update($data);

        return redirect()->route('admin.updates.index')->with('success', 'Update updated successfully!');
    }

    public function destroy($id)
    {
        $update = UpdatePost::findOrFail($id);

        // Delete image
        if ($update->image) {
            $oldPath = public_path('images/uploads/updates/' . $update->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }

        $update->delete();

        return redirect()->route('admin.updates.index')->with('success', 'Update deleted successfully!');
    }
}
