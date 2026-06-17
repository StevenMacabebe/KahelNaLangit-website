<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_name',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'updated_by',
    ];
}