<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'is_lesson',
        'is_visible',
        'order',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];
}