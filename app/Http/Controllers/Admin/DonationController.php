<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationChannel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            // Delete old QR if exists
            if ($donation && $donation->gcash_qr) {
                Storage::disk('public')->delete($donation->gcash_qr);
            }
            
            // Store new QR
            $path = $request->file('gcash_qr')->store('donation_qr', 'public');
            $data['gcash_qr'] = $path;
        }

        if ($donation) {
            $donation->update($data);
        } else {
            $data['updated_by'] = auth()->guard('admin')->id();
            DonationChannel::create($data);
        }

        return redirect()->route('admin.donations.edit')->with('success', 'Donation details updated successfully!');
    }
}
