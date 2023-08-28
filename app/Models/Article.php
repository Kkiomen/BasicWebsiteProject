<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'published_date',
        'tags',
        'author',
        'images',
        'is_visible',
        'is_lesson',
        'order',
        'content',
        'assumptions',
        'assumptions_all',
        'short_content',
    ];

    protected $casts = [
        'tags' => 'array',
        'assumptions' => 'array',
        'assumptions_all' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function taskArticle(): HasMany
    {
        return $this->hasMany(TaskArticle::class);
    }

    public function nextLesson(): ?self
    {
        // Spróbuj znaleźć następną lekcję w tej samej kategorii
        $nextArticleInCategory = self::where('category_id', $this->category_id)
            ->where('is_lesson', true)
            ->where('is_visible', true)
            ->where('order', '>', $this->order)
            ->orderBy('order')
            ->first();

        if ($nextArticleInCategory) {
            return $nextArticleInCategory;
        }

        // Jeśli nie ma następnej lekcji w tej kategorii, szukaj w następnej kategorii
        $nextCategory = Category::where('order', '>', $this->category->order)
            ->orderBy('order')
            ->first();

        if (!$nextCategory) {
            return null;  // Nie ma więcej lekcji ani kategorii
        }

        return self::where('category_id', $nextCategory->id)
            ->where('is_lesson', true)
            ->where('is_visible', true)
            ->orderBy('order')
            ->first();
    }

    public function previousLesson(): ?self
    {
        // Spróbuj znaleźć poprzednią lekcję w tej samej kategorii
        $previousArticleInCategory = self::where('category_id', $this->category_id)
            ->where('is_lesson', true)
            ->where('is_visible', true)
            ->where('order', '<', $this->order)
            ->orderBy('order', 'desc')
            ->first();

        if ($previousArticleInCategory) {
            return $previousArticleInCategory;
        }

        // Jeśli nie ma poprzedniej lekcji w tej kategorii, szukaj w poprzedniej kategorii
        $previousCategory = Category::where('order', '<', $this->category->order)
            ->orderBy('order', 'desc')
            ->first();

        if (!$previousCategory) {
            return null;  // Nie ma więcej lekcji ani kategorii
        }

        return self::where('category_id', $previousCategory->id)
            ->where('is_lesson', true)
            ->where('is_visible', true)
            ->orderBy('order', 'desc')
            ->first();
    }
}
