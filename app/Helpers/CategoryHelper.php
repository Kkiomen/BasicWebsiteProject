<?php

namespace App\Helpers;

use App\Models\Category;

class CategoryHelper
{
    public static function getCategoriesToSelect(){
        $d = Category::all()->pluck('name', 'id');
        $d->add(['null' => 'Brak kategori nadrzędnej']);
        dump($d);
    }
}
