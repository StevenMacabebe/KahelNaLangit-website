<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::latest()->get();
        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->update(['status' => $request->status]);
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry status updated!');
    }

    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted!');
    }
}