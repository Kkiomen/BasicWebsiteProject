<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $articlesTop = \App\Models\Article::where('is_visible', 1)->orderBy('created_at', 'desc')->limit(2)->get();
        $articlesMain = \App\Models\Article::where('is_visible', 1)->orderBy('created_at', 'desc')->skip(2)->take(50)->get();
        return view('livewire.blog', [
            'articlesTop' => $articlesTop,
            'articlesMain' => $articlesMain
        ]);
    }
}
