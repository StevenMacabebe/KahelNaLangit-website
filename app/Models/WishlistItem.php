<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    use HasFactory;

    protected $table = 'wishlist';

    protected $fillable = [
        'item_name',
        'description',
        'quantity_needed',
        'quantity_received',
        'image',
        'status',
        'created_by',
    ];
}
