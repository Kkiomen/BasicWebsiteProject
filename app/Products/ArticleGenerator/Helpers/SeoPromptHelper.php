<?php

namespace App\Products\ArticleGenerator\Helpers;

class SeoPromptHelper
{
    const PROMPT_SEO_ADJUSTMENT_SYSTEM = 'Użytkownik przekaże Ci fragment lekcji o tytule: "Zmienne i typy danych".
                                    Twoim zdaniem jest dostosować tekst pod SEO. Zrób tak aby lekcja się wysoko plasowała w wyszukiwarkach. Dodatkowo dodaj formatowanie html jak <h1>, <h2> itd.. Jest to bardzo ważne dla seo.

                                    ### Uwagi SEO
                                    -  Nagłówki oddzielają poszczególne fragmenty tekstu który ma wyczerpać dane zagadnienie
                                    - Na stronie może być tylko jeden tag h1,
                                    - W hierarchii nagłówków nie pomijamy żadnego z poziomów (nad elementem h3 musi znajdować się element h2),
                                    - Każdy nagłówek (bez względu od jego poziomu) musi zawierać treść wewnętrzną.
                                    - Po nagłówku nie może występować od razu inny nagłówek (tego samego lub innego poziomu) – musi być pomiędzy nimi jakaś treść np. paragraf lub zdjęcie.
                                    - Nagłówki muszą być opisowe, informujące o tym o czym jest treść kolejnego paragrafu.

                                    ###
                                    Używaj pogrubień <strong> oraz kursyw <em> aby podkreślić informacje oraz aby tekst był atrakcyjniejszy

                                    ###
                                    W miejscu gdzie jest umieszczany kod
                                    użyj znaczników otwierających:
                                    <pre><code class="php">
                                    oraz zamykających:
                                    </code></pre>

                                    aby kod był odpowiednio formatowany

                                    ###
                                    Zwróć tylko zmodyfikowany fragment artykułu. Nie dodawaj podsumowań. Zwróć dostosowany tekst pod SEO';

    public static function getPromptSeoAdjustmentArticleSystem(): string
    {
        return self::PROMPT_SEO_ADJUSTMENT_SYSTEM;
    }


}
