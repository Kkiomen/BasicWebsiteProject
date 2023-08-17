<?php

namespace App\Livewire;

use App\Models\TaskArticle;
use Livewire\Component;

class Article extends Component
{
    public ?\App\Models\Article $article = null;
    public ?\App\Models\Category $category = null;
    public ?\Illuminate\Database\Eloquent\Collection $articleRandom = null;
    public function mount($category_slug, $article_slug): void
    {
        $this->article = \App\Models\Article::where('slug', $article_slug)->first();
        $this->category = \App\Models\Category::where('slug', $category_slug)->first();
        if(!$this->article || !$this->category){
            abort(404);
        }
        $this->articleRandom = \App\Models\Article::whereNotIn('id', [$this->article->id])->inRandomOrder()->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.article',[
            'category_name' => $this->category->name,
            'category_slug' => $this->category->slug,
            'title' => $this->article->title,
            'content' => $this->article->content,
            'published_date' => $this->article->published_date,
            'is_lesson' => $this->article->is_lesson,
            'article' => $this->article,
            'tasks' => TaskArticle::where('article_id', $this->article->id)->where('is_visible', true)->get(),
            'next_lesson' => $this->article->nextLesson(),
            'previous_lesson' => $this->article->previousLesson(),
        ]);
    }
}
