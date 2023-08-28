<?php

namespace App\Products\TaskGenerator;

use App\Api\OpenAiApi;
use App\Models\Article;
use App\Models\TaskArticle;
use App\Products\ArticleGenerator\Helpers\PromptHelper;

class TaskGenerator
{
    public function __construct(
        private readonly OpenAiApi $openAiApi
    ) {
    }

    public function generatorTask(Article $article)
    {
        if($article){

            $summary = 'Zakres materiału:
Definicja zmiennej
Co to jest zmienna?
Dlaczego zmienne są ważne w programowaniu?
Deklaracja i inicjalizacja zmiennych
Składnia deklaracji zmiennych w PHP ($nazwa_zmiennej)
Przypisywanie wartości do zmiennych
Podstawowe typy danych w PHP
Konwersja typów danych
Automatyczna konwersja (type juggling)
Ręczna konwersja typów (type casting)
Sprawdzanie typów zmiennych
Funkcje takie jak gettype(), is_int(), is_string(), itp.
Zastosowanie i przypadki użycia';

            $tasks = $this->openAiApi->completionChat(
                message: $article->content,
                systemPrompt: PromptHelper::generatePromptSystemTask($article)
            );
            $tasks = json_decode($tasks, true);
            foreach ($tasks as $task){
                TaskArticle::create([
                    'article_id' => $article->id,
                    'name' => $task['task_name'],
                    'description' => $task['description'],
                    'hint' => $task['hint'],
                    'solution' => $task['solution'],
                    'explained' => $task['explanation'],
                    'is_visible' => true
                ]);
            }
        }
    }
}
