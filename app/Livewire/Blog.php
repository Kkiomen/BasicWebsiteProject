<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $articlesTop = \App\Models\Article::orderBy('created_at', 'desc')->limit(2)->get();
        $articlesMain = \App\Models\Article::orderBy('created_at', 'desc')->get();
        return view('livewire.blog', [
            'articlesTop' => $articlesTop,
            'articlesMain' => $articlesMain
        ]);
    }
}
