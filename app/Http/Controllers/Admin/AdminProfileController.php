<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'username' => 'required|string|max:255|unique:admins,username,' . $admin->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'username' => $request->username,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
    }
}