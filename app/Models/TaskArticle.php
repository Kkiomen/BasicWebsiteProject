<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'name',
        'description',
        'hint',
        'solution',
        'explained',
        'is_visible',
    ];
}
