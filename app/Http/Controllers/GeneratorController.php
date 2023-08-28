<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\TaskArticle;
use App\Products\ArticleGenerator\ArticleGenerator;
use App\Products\TaskGenerator\TaskGenerator;

class GeneratorController extends Controller
{

    public function __construct(
        private readonly ArticleGenerator $articleGenerator,
        private readonly TaskGenerator $taskGenerator
    )
    {
    }

    public function generateArticle(Article $article){
        if($article){
            $article->content = $this->articleGenerator->generateArticle(
                title: $article->title,
                assumptions: $article->assumptions,
                articleModel: $article,
                maxAssumptionsRealizations: 2
            );
            $article->save();
            echo 'Wygenerowano artykuł o tytule: ' . $article->title . '<br>';
        }else{
            echo 'Nie znaleziono artykułu';
        }


    }

    public function generateTasks(Article $article)
    {
        $json = '[{
                "task_name": "Deklaracja i inicjalizacja zmiennych",
                "description": "Deklaruj i zainicjalizuj trzy zmienne różnych typów danych (liczba całkowita, liczba zmiennoprzecinkowa, ciąg znaków) i następnie wyświetl ich wartości.",
                "hint": "Użyj \"$\" do deklarowania zmiennej, operatora \"=\" do inicjalizacji i funkcji \"echo\" do wyświetlania wartości.",
                "solution": "<pre><code class=\"php\"> $intVar = 10; $floatVar = 10.10; $stringVar = \'Hello World\'; echo $intVar; echo $floatVar; echo $stringVar; </code></pre>",
                "explanation": "Zmienne są podstawowym pojęciem w programowaniu. Używając zmiennej, możemy przechowywać informacje, które mogą być dynamicznie modyfikowane podczas wykonywania kodu."
                },
                {
                "task_name": "Praca ze zmienną typu boolean",
                "description": "Utwórz zmienną typu boolean i inicjalizuj ją wartością true. Następnie utwórz drugą zmienną typu boolean i zainicjalizuj ją wartością false. Użyj operatora logicznego OR i wyświetle wynik.",
                "hint": "W PHP, do utworzenia zmiennej typu boolean używa się słów \'true\' lub \'false\'. Pamiętaj o konfiguracji logicznej OR między dwiema wartościami.",
                "solution": "<pre><code class=\"php\"> $firstBool = true; $secondBool = false; echo $firstBool OR $secondBool; </code></pre>",
                "explanation": "Zmienna typu boolean przyjmuje tylko dwie wartości: prawda (true) lub fałsz (false). Operator OR zwróci true, jeśli jakakolwiek z wartości jest prawdziwa."
                },
                {
                "task_name": "Ich konwersja typów",
                "description": "Tworząc zmienną o wartości 10, konwertuj ją najpierw na typ float, a następnie na typ string. Sprawdź typ zmiennej w każdym etapie.",
                "hint": "Użyj (float) i (string) do konwersji typów. Pamiętaj o użyciu funkcji gettype() do sprawdzenia typu zmiennej.",
                "solution": "<pre><code class=\"php\"> $numVar = 10; $numVar = (float) $numVar; echo gettype($numVar); $numVar = (string) $numVar; echo gettype($numVar); </code></pre>",
                "explanation": "W PHP możemy konwertować zmienne między różnymi typami danych. To jest ważne, gdy musimy zmienić typ danych na inny, aby spełnić określone wymagania funkcji lub operacji."
                }]';

        $tasks = json_decode($json, true);
        if($article){

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

        dump($tasks);
//        if($article){
//            $this->taskGenerator->generatorTask($article);
//        }
    }
}
