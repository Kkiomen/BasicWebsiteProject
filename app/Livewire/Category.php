<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Category extends Component
{

    public Collection|null $articles = null;
    public ?\App\Models\Category $category = null;
    public function mount($category_slug): void
    {
        $this->category = \App\Models\Category::where('slug', $category_slug)->first();
        $this->articles = \App\Models\Article::where('category_id', $this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.category', [
            'articles' => $this->articles
        ])
            ->layout('components.layouts.app');
    }
}
