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
        // Validation – only GCash, BDO, Maya, and guidelines
        $request->validate([
            'guidelines' => 'nullable|string',

            // GCash
            'gcash_name' => 'nullable|string|max:255',
            'gcash_number' => 'nullable|string|max:255',
            'gcash_qr' => 'nullable|image|max:2048',

            // BDO
            'bdo_bank_name' => 'nullable|string|max:255',
            'bdo_account_name' => 'nullable|string|max:255',
            'bdo_account_number' => 'nullable|string|max:255',
            'bdo_qr' => 'nullable|image|max:2048',

            // Maya
            'maya_bank_name' => 'nullable|string|max:255',
            'maya_account_name' => 'nullable|string|max:255',
            'maya_account_number' => 'nullable|string|max:255',
            'maya_qr' => 'nullable|image|max:2048',
        ]);

        $donation = DonationChannel::first();

        // Only take the fields we want (exclude all QR file inputs)
        $data = $request->only([
            'guidelines',
            'gcash_name',
            'gcash_number',
            'bdo_bank_name',
            'bdo_account_name',
            'bdo_account_number',
            'maya_bank_name',
            'maya_account_name',
            'maya_account_number',
        ]);

        // Helper to upload a QR file and return new filename (or keep old)
        $uploadQR = function ($file, $existingFilename) {
            if (!$file) {
                return $existingFilename; // keep existing if no new file
            }

            // Delete old file if it exists
            if ($existingFilename) {
                $oldPath = public_path('images/uploads/donations/' . $existingFilename);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // Store new file
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/uploads/donations'), $filename);
            return $filename;
        };

        // Process each QR image
        $data['gcash_qr'] = $uploadQR($request->file('gcash_qr'), $donation?->gcash_qr);
        $data['bdo_qr']    = $uploadQR($request->file('bdo_qr'), $donation?->bdo_qr);
        $data['maya_qr']   = $uploadQR($request->file('maya_qr'), $donation?->maya_qr);

        // Set the admin who updated this record
        $data['updated_by'] = auth()->guard('admin')->id();

        if ($donation) {
            $donation->update($data);
        } else {
            DonationChannel::create($data);
        }

        return redirect()->route('admin.donations.edit')
                         ->with('success', 'Donation details updated successfully!');
    }
}
