<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationChannel extends Model
{
    use HasFactory;

    protected $fillable = [
        'guidelines',
        'bank1_name',
        'bank1_account_name',
        'bank1_account_number',
        'bank2_name',
        'bank2_account_name',
        'bank2_account_number',
        'gcash_name',
        'gcash_number',
        'gcash_qr',
        // New fields added
        'bdo_bank_name',
        'bdo_account_name',
        'bdo_account_number',
        'bdo_qr',
        'maya_bank_name',
        'maya_account_name',
        'maya_account_number',
        'maya_qr',
        'updated_by',
    ];
}
