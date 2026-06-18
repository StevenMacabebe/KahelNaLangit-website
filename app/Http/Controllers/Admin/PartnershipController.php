<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'logo' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/partnerships'), $filename);
            $data['logo'] = $filename;
        }

        $data['created_by'] = auth()->guard('admin')->id();
        Partnership::create($data);

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
            'logo' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($partnership->logo) {
                $oldPath = public_path('images/uploads/partnerships/' . $partnership->logo);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // Upload new logo
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/partnerships'), $filename);
            $data['logo'] = $filename;
        }

        $partnership->update($data);

        return redirect()->route('admin.partnerships.index')->with('success', 'Partnership updated successfully!');
    }

    public function destroy($id)
    {
        $partnership = Partnership::findOrFail($id);
        
        // Delete logo file if exists
        if ($partnership->logo) {
            $oldPath = public_path('images/uploads/partnerships/' . $partnership->logo);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }
        
        $partnership->delete();

        return redirect()->route('admin.partnerships.index')->with('success', 'Partnership deleted successfully!');
    }
}
