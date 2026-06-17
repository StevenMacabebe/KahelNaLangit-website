<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdatePost extends Model
{
    use HasFactory;

    protected $table = 'updates';

    protected $fillable = [
        'title',
        'content',
        'image',
        'event_date',
        'category',
        'created_by',
        'updated_by',
    ];
}