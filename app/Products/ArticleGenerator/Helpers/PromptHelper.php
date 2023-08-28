<?php

namespace App\Products\ArticleGenerator\Helpers;

use App\Models\Article;
use App\Models\TaskArticle;

class PromptHelper
{
    const PROMPT_GENERATE_ARTICLE = 'Użytkownik przekaże Ci nazwe lekcji, informacje co chce abyś dopisał oraz przygotowaną do tej pory lekcje.
    Stwórz tylko nową treść na podstawie informacji jakie przekaże Ci użytkownik dla kursu języka PHP. Nie zwracaj całego artykułu tylko ten fragment. Jeśli nie będzie tam informacji o obecnej treści, rozpocznij lekcje.
    Pamiętaj o tym aby treści tam przedstawione muszą być pisane w taki sposób aby osoba która nigdy nie programowała aby go zrozumiała bez problemu. W lekcji umieszczaj fragmenty kodu, który ułatwi zrozumieć zagadnienia.
    Nie punktuj założeń, wpleć wszystkie informacje płynnie w lekcje. Staraj się jak najbardziej wyczerpać temat, aby uczeń nie musiał zadawać pytań. Nie pisz podsumowań!
    ### Poniżej znajduje lista poprzednich lekcji. Nie używaj elementów, które uczeń mógł wcześniej nie poznać
    ### Poprzednie lekcje:';

    const NAME_LESSON = 'Nazwa lekcji: ';
    const SCOPE_OF_MATERIAL = '### Zakres materiału: ';
    const CURRENT_CONTENT_OF_ARTICLE = '### Obecnie zostały opisane te punkty: ';

    const NOT_FINISH_CONTENT = '### Nie kończ tekstu z "Obecnej treści artykułu". Stwórz nową treść na podstawie założeń/zakresu materiału';

    const GENERATE_TASK = 'Na podstawie podsumowania lekcji z kursu z języka PHP.  Wymyśl zadania, które może wykonać uczeń aby przyswoić lepiej, zdobytą wiedzę.
                            W rozwiązaniu pokaż najlepsze praktyki aby takie praktyki mógł się nauczyć uczeń.


                            ###
                            Zadanie zwróć w formie JSON i tylko JSON.
                            Za pomocą poniższego wzoru:

                            [{
                            "task_name": (nazwa zadania),
                            "description": (opis zadania, co musi wykonać uczeń w formie zadania),
                            "hint": (podpowiedź o którą może poprosić użytkownik aby pomóc mu zrealizować zadanie",
                            "solution": (rozwiązanie zadanie),
                            "explanation": (wyjaśnienie dlaczego to tak trzeba rozwiązać a nie inaczej)
                            }]

                            ###
                            W miejscu gdzie jest umieszczany kod
                            użyj znaczników otwierających:
                            <pre><code class="php">
                            oraz zamykających:
                            </code></pre>

                            ###
                            Staraj się tworzyć kolejne zadania, które różnią się od tych poprzednich tj:
                            ';

    public static function getPromptGenerateArticleSystem(): string
    {
        $articles = Article::where('is_lesson', 1)->get();
        $lessons = '';
        foreach ($articles as $article) {
            $lessons .= '- '. $article->title.';';
        }

        return self::PROMPT_GENERATE_ARTICLE . ' ' . $lessons;
    }

    /**
     * Generate prompt to generate part of article
     * @param  string  $title Title of article
     * @param  string  $assumptions Assumptions of article
     * @param  string  $currentContentArticle Current content of article for better synopsis
     * @return string
     */
    public static function generatePromptUserArticle(string $title, string $assumptions = null, string $currentContentArticle = null): string
    {
        $prompt = self::NAME_LESSON . $title . '. ';

        if(!empty($assumptions)) {
            $prompt .= self::SCOPE_OF_MATERIAL . $assumptions . '. ';
        }

        if(!empty($currentContentArticle)) {
            $prompt .= self::CURRENT_CONTENT_OF_ARTICLE . $currentContentArticle;
            $prompt .= self::NOT_FINISH_CONTENT;

            echo '<br/><br/> Obecne: '. $currentContentArticle . '<br/><br/>';
        }

        return $prompt;
    }

    public static function generatePromptSystemTask(Article $article): string
    {
        $lastTasks = TaskArticle::where('article_id', $article->id)->orderBy('id', 'desc')->get();
        $lessons = '';
        foreach ($lastTasks as $lastTask) {
            $lessons .= '- '. $lastTask->name.';';
        }
        return self::GENERATE_TASK . ' ' . $lessons;
    }
}
