<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DonationController extends Controller
{
    public function edit()
    {
        $donation = DonationChannel::first();
        return view('admin.donations.edit', compact('donation'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'guidelines' => 'nullable|string',
            'bank1_name' => 'nullable|string|max:255',
            'bank1_account_name' => 'nullable|string|max:255',
            'bank1_account_number' => 'nullable|string|max:255',
            'bank2_name' => 'nullable|string|max:255',
            'bank2_account_name' => 'nullable|string|max:255',
            'bank2_account_number' => 'nullable|string|max:255',
            'gcash_name' => 'nullable|string|max:255',
            'gcash_number' => 'nullable|string|max:255',
            'gcash_qr' => 'nullable|image|max:2048',
        ]);

        $donation = DonationChannel::first();
        $data = $request->except('gcash_qr');

        if ($request->hasFile('gcash_qr')) {
            // Delete old image if exists
            if ($donation && $donation->gcash_qr) {
                $oldPath = public_path('images/uploads/donations/' . $donation->gcash_qr);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // Upload new image
            $file = $request->file('gcash_qr');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/donations'), $filename);
            $data['gcash_qr'] = $filename;
        }

        if ($donation) {
            $donation->update($data);
        } else {
            $data['updated_by'] = auth()->guard('admin')->id();
            DonationChannel::create($data);
        }

        return redirect()->route('admin.donations.edit')->with('success', 'Donation details updated successfully! QR code saved.');
    }
}
