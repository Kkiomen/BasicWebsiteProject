<div>
    <section class="container-sm mx-auto px-4">
        <div class="text-article mt-10">

{{--            Article           --}}

            <h1>Wprowadzenie do tablic w PHP</h1>

            <p><strong>Tablice w PHP</strong> to jedno z najważniejszych narzędzi, które <em>język programowania PHP</em> oferuje programistom. Dzięki nim możemy przechowywać wiele wartości w jednym miejscu. Tablica to zbiór elementów, do których można odwołać się za pomocą indeksu.</p>

            <h2>Tablice indeksowane w PHP</h2>

            <p>Indeksy w tablicach indeksowanych są numerami. Tworzenie <strong>tablicy indeksowanej</strong> jest bardzo proste. Oto przykład:</p>

            <pre><code class="php">$tablica_indeksowana = array("jabłko", "banan", "kiwi");</code></pre>

            <p>Używając funkcji <em>array()</em>, przekazujemy elementy tablicy. Każdy element otrzymuje unikalny indeks liczbowy, zaczynając od 0. Dostęp do elementów tablicy jest prosty. Dla przykładu, aby odczytać wartość "banan":</p>

            <pre><code class="php">echo $tablica_indeksowana[1];</code></pre>

            <h2>Tablice Asocjacyjne w PHP</h2>
            <p>
                W PHP tablice asocjacyjne to takie, które mają klucze zamiast indeksów. Klucze mogą być liczbami lub ciągami znaków. Dzięki temu, zamiast odwoływać się do elementów tablicy przez indeksy liczbowe, możemy odwoływać się przez konkretne klucze, co jest często bardziej intuicyjne i czytelne.
            </p>

            <h3>Tworzenie tablic asocjacyjnych</h3>
            <p>
                W nowszych wersjach PHP zaleca się korzystanie z nawiasów kwadratowych <code>[]</code> zamiast używania funkcji <code>array()</code>. Jest to bardziej zwięzła i czytelniejsza forma:
            </p>
            <pre><code>$osoba = [
    "imie" => "Jan",
    "nazwisko" => "Kowalski",
    "wiek" => 30
];
</code>
</pre>

            <p>
                W powyższym przykładzie tablica <code>$osoba</code> posiada trzy elementy, do których możemy się odwołać używając kluczy: <code>imie</code>, <code>nazwisko</code> i <code>wiek</code>.
            </p>

            <h3>Odwoływanie się do elementów tablicy</h3>
            <p>
                Aby odwołać się do konkretnego elementu tablicy asocjacyjnej, używamy jego klucza. Na przykład:
            </p>
            <pre><code>echo $osoba["imie"];  // wyświetli "Jan"</code></pre>


            <h2>Tablice wielowymiarowe w PHP</h2>

            <p><strong>Tablice wielowymiarowe</strong> to tablice, które mogą przechowywać inne tablice. Oto przykład:</p>

            <pre><code class="php">$tablica_wielowymiarowa = array(
  "owoce" => array("jabłko", "banan", "kiwi"),
  "warzywa" => array("marchew", "brokuły", "szpinak")
);
</code></pre>

            <p>Aby odczytać wartość "brokuły" z tej tablicy:</p>

            <pre><code class="php">echo $tablica_wielowymiarowa["warzywa"][1];</code></pre>

            <p>W tablicach wielowymiarowych dodajemy dodatkowe indeksy dla każdej zagnieżdżonej tablicy.</p>

            <p>Mam nadzieję, że teraz lepiej rozumiesz, jak działają tablice w PHP. Pamiętaj, że są one niezwykle ważne i często używane w programowaniu w PHP.</p>

            <h2>W jaki sposób możemy dodać elementy do tablicy?</h2>
            <p>Wiele osób uważa, że można dodać element do tablicy tylko w jeden sposób.. a to nie prawda!</p>


            <h3>Użycie funkcji array() do dodawania elementów</h3>
            <p>Rozpoczniemy od najprostszego sposobu, czyli funkcji <code class="php">array()</code>. Ten sposób polega na podaniu wartości, które chcemy dodać do tablicy jako argumenty funkcji <code class="php">array()</code>. Dla przykładu, jeśli chcemy stworzyć tablicę zawierającą liczby od 1 do 3, napiszemy:</p>
            <pre><code class="php">$numbers = array(1, 2, 3);</code></pre>

            <h3>Dodawanie elementów do tablicy za pomocą operatora []</h3>
            <p>Kolejnym sposobem na dodanie elementu do tablicy jest użycie operatora <code class="php">[]</code>. Ten sposób jest najłatwiejszy do zrozumienia dla osób, które miały już do czynienia z innymi językami programowania. W tym przypadku, po prostu dodajemy nowy element na końcu tablicy:</p>
            <pre><code class="php">$numbers = [1, 2, 3];
$numbers[] = 4; // teraz tablica $numbers zawiera liczby 1, 2, 3 i 4
</code></pre>

            <h3>Używanie funkcji array_push() do dodawania elementów do tablicy</h3>
            <p>Ostatnią metodą, którą omówimy jest <code class="php">array_push()</code>. Ta funkcja dodaje jeden lub więcej elementów na koniec tablicy. Pierwszym argumentem jest tablica, do której chcemy dodać elementy, a następnie podajemy elementy, które mają zostać dodane.</p>
            <pre><code class="php">$numbers = [1, 2, 3];
array_push($numbers, 4, 5); // teraz tablica $numbers zawiera liczby 1, 2, 3, 4 i 5
</code></pre>
            <p>W PHP mamy do wyboru różne metody dodawania elementów do tablicy. Wybór między nimi zależy głównie od Twoich preferencji i specyfiki zadania. Wszystkie wyżej wymienione metody są równie poprawne i wydajne. Pamiętaj, aby zawsze wybierać tę metodę, która jest dla Ciebie najbardziej zrozumiała i czytelna.</p><h1>Zrozumienie funkcji wbudowanych do manipulacji tablicami w PHP</h1>
            <p>Podczas nauki programowania w języku PHP, jednym z kluczowych tematów jest zrozumienie, jak efektywnie manipulować <strong>tablicami</strong>. Istnieje wiele wbudowanych funkcji, takich jak <em>array_filter()</em> i <em>array_map()</em>, które są niezwykle przydatne w przetwarzaniu i manipulacji danych zawartych w tablicach.</p>


            <h2>Przydatne funkcje, które warto znać</h2>

            <h3>Funkcja array_filter() w PHP <a href="https://www.php.net/manual/en/function.array-filter.php" target="_blank">#</a></h3>
            <p>Funkcja <em>array_filter()</em> jest używana do filtrowania elementów tablicy za pomocą określonej funkcji zwrotnej. Funkcja zwrotna musi zwrócić wartość prawda (<em>true</em>) dla elementów, które mają być zachowane w tablicy, i fałsz (<em>false</em>) dla tych, które mają zostać usunięte.</p>

            <pre><code class="php">&lt;?php
$numbers = array(1, 2, 3, 4, 5, 6);

$even_numbers = array_filter($numbers, function($value) {
    return $value % 2 == 0;
});

print_r($even_numbers); // Outputs: Array ( [1] => 2 [3] => 4 [5] => 6 )
?&gt;
</code></pre>

            <p>W powyższym kodzie, używamy funkcji <em>array_filter()</em> do przefiltrowania tablicy $numbers, pozostawiając tylko liczby parzyste. Zauważ, że klucze z oryginalnej tablicy są zachowane.</p>

            <h3>Funkcja array_map() w PHP <a href="https://www.php.net/manual/en/function.array-map.php" target="_blank">#</a></h3>
            <p>Kolejną cenną funkcją jest <em>array_map()</em>, która jest używana do przekształcenia wszystkich elementów tablicy za pomocą określonej funkcji zwrotnej. Każdy element tablicy jest przekazywany do funkcji zwrotnej i jej wynik jest używany do zbudowania nowej tablicy.</p>

            <pre><code class="php">&lt;?php
$numbers = array(1, 2, 3, 4, 5);

$squares = array_map(function($value) {
    return $value * $value;
}, $numbers);

print_r($squares); // Outputs: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
?&gt;
</code></pre>

            <p>W powyższym kodzie, używamy funkcji <em>array_map()</em> do zastosowania funkcji, która zwraca kwadrat każdej liczby, do każdego elementu tablicy $numbers.</p>

            <h3>Rozumienie funkcji array_sum() w PHP <a href="https://www.php.net/manual/en/function.array-sum.php" target="_blank">#</a></h3>
            <p>
                Funkcja <code>array_sum()</code> jest niezwykle przydatna, gdy potrzebujemy obliczyć sumę wszystkich wartości w tablicy. Przykładowo, jeżeli mamy tablicę zawierającą liczby, tę funkcję można użyć do zsumowania wszystkich tych liczb. Oto przykład:
            </p>

            <pre><code class="php">$numbers = array(1, 2, 3, 4, 5);
echo array_sum($numbers); // Wynik: 15
</code></pre>

            <h3>Zastosowanie funkcji array_product() w PHP <a href="https://www.php.net/manual/en/function.array-product.php" target="_blank">#</a></h3>
            <p>
                Podobnie jak funkcja <code>array_sum()</code>, <code>array_product()</code> mnoży razem wszystkie wartości w tablicy. Oto prosty przykład:
            </p>

            <pre><code class="php">$numbers = array(1, 2, 3, 4, 5);
echo array_product($numbers); // Wynik: 120
</code></pre>

            <p>
                <strong>Zwróć uwagę</strong>, że obie funkcje - <code>array_sum()</code> i <code>array_product()</code> - działają tylko na tablicach zawierających liczby. Jeśli tablica będzie zawierać inne typy danych, mogą wystąpić nieoczekiwane wyniki.
            </p>

            <h3>Wykorzystanie funkcji count() w PHP <a href="https://www.php.net/manual/en/function.count.php" target="_blank">#</a></h3>
            <p>
                Następnie, mamy funkcję <code>count()</code>, która jest niezwykle przydatna do określania liczby elementów w tablicy. Przykład użycia tej funkcji prezentuje się następująco:
            </p>

            <pre><code class="php">$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); // Wynik: 3
</code></pre>

            <p>
                Szybkość zliczania elementów w tablicy jest nieoceniona, zwłaszcza gdy pracujesz z dużymi zbiorami danych.
            </p>


            <h3>Funkcja array_merge() w PHP <a href="https://www.php.net/manual/en/function.array-merge.php" target="_blank">#</a></h3>

            <p>Gdy chcemy połączyć dwie lub więcej tablic w jedną, przydaje się funkcja <strong><em>array_merge()</em></strong>. Ta funkcja przyjmuje dowolną ilość tablic jako argumenty i zwraca jedną tablicę, która zawiera elementy wszystkich tablic wejściowych.</p>

            <pre><code class="php">$tablica1 = array("jabłko", "banan");
$tablica2 = array("kiwi", "mango");
$tablica3 = array_merge($tablica1, $tablica2);
</code></pre>

            <p>W wyniku powyższego kodu, <code>$tablica3</code> będzie zawierać "jabłko", "banan", "kiwi", "mango". Kolejność elementów w tablicy wynikowej odpowiada kolejności tablic wejściowych.</p>

            <h3>Wyszukiwanie wspólnych elementów tablic: funkcja array_intersect() <a href="https://www.php.net/manual/en/function.array-intersect.php" target="_blank">#</a></h3>

            <p>Jeśli chcemy znaleźć elementy, które występują w więcej niż jednej tablicy, wykorzystamy funkcję <strong><em>array_intersect()</em></strong>. Ta funkcja porównuje wartości z kilku tablic i zwraca tablicę zawierającą wszystkie pasujące elementy.</p>

            <pre><code class="php">$tablica1 = array("jabłko", "banan", "kiwi");
$tablica2 = array("kiwi", "mango");
$tablica3 = array_intersect($tablica1, $tablica2);
</code></pre>

            <p>W tym przypadku, <code>$tablica3</code> będzie zawierać tylko "kiwi", ponieważ jest to jedyny element, który występuje w obu tablicach wejściowych.</p>

            <h3>Znajdowanie różnic między tablicami: funkcja array_diff() <a href="https://www.php.net/manual/en/function.array-diff.php" target="_blank">#</a></h3>

            <p>Kolejna funkcja, o której dzisiaj powiem, to <strong><em>array_diff()</em></strong>, która działa jak przeciwieństwo funkcji <em>array_intersect()</em>. Zamiast zwracać wspólne elementy, <em>array_diff()</em> zwraca różnicę między tablicami. Innymi słowy, zwraca tablicę zawierającą wszystkie elementy z pierwszej tablicy, które nie występują w żadnej z pozostałych.</p>

            <pre><code class="php">$tablica1 = array("jabłko", "banan", "kiwi");
$tablica2 = array("kiwi", "mango");
$tablica3 = array_diff($tablica1, $tablica2);
</code></pre>

            <p>Tutaj, <code>$tablica3</code> będzie zawierać "jabłko" i "banan", ponieważ te elementy są unikalne dla <code>$tablica1</code>.</p>

            <h3>Funkcja in_array() w PHP <a href="https://www.php.net/manual/en/function.in-array.php" target="_blank">#</a></h3>
            Ta funkcja pozwala nam na sprawdzenie, czy dana wartość istnieje w tablicy. Jej składnia jest następująca:
            <pre><code class="php">in_array(wartość, tablica)</code></pre>

            Na przykład, mając tablicę $fruits = array("apple", "banana", "cherry"), możemy sprawdzić, czy "banana" znajduje się w tablicy używając <em>in_array("banana", $fruits)</em>. Funkcja zwróci wartość true, jeśli element będzie obecny w tablicy, a false, jeśli nie.

            <h3>Użycie funkcji array_keys() w PHP <a href="https://www.php.net/manual/en/function.array-keys.php" target="_blank">#</a></h3>
            Kolejną funkcją, którą omówimy, jest <em>array_keys()</em>. Ta funkcja zwraca tablicę zawierającą wszystkie klucze z danej tablicy. Składnia jest prosta:
            <pre><code class="php">array_keys(tablica)</code></pre>
            Przykładowo, mając tablicę asocjacyjną $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43), można uzyskać listę wszystkich kluczy (tutaj: imion) za pomocą <em>array_keys($age)</em>.

            <h3>array_values() - zwracanie wartości z tablicy <a href="https://www.php.net/manual/en/function.array-values.php" target="_blank">#</a></h3>
            Następnie mamy funkcję <em>array_values()</em>, która, jak się można domyślić, działa podobnie do array_keys(), ale zamiast kluczy zwraca nam wszystkie wartości z tablicy. Składnia to:
            <pre><code class="php">array_values(tablica)</code></pre>
            Przy użyciu naszej tablicy $age, <em>array_values($age)</em> zwróci tablicę zawierającą wartości 35, 37, 43.

            <h3>array_flip() - zamiana miejscami kluczy z wartościami w tablicy <a href="https://www.php.net/manual/en/function.array-flip.php" target="_blank">#</a></h3>
            Funkcja <em>array_flip()</em> jest kolejną ciekawą funkcją do manipulacji tablicami. Co robi? Otóż, zamienia miejscami kluczy z wartościami w tablicy. Składnia to:
            <pre><code class="php">array_flip(tablica)</code></pre>
            Używając naszej tablicy $age, <em>array_flip($age)</em> zwróci tablicę, gdzie wiek stanie się kluczem, a imię wartością, czyli: 35 => "Peter", 37 => "Ben", 43 => "Joe".

            <h3>array_search() - szukanie klucza danego elementu w tablicy <a href="https://www.php.net/manual/en/function.array-search.php" target="_blank">#</a></h3>
            Na koniec omówimy funkcję <em>array_search()</em>. Ta funkcja pomaga nam znaleźć klucz danego elementu w tablicy. Składnia to:
            <pre><code class="php">array_search(wartość, tablica)</code></pre>
            Przykładowo, jeśli chcielibyśmy znaleźć klucz dla wartości 37 w naszej tablicy $age, użylibyśmy <em>array_search(37, $age)</em>, co zwróciłoby nam "Ben".

            <strong>Mając te funkcje na wyciągnięcie ręki,</strong> można zauważyć, jak wiele możliwości daje nam PHP w manipulowaniu i analizie tablic. Choć na pierwszy rzut oka mogą wydawać się nieco skomplikowane, z pewnością okażą się nieocenione w praktycznym użyciu. Pamiętaj, kluczem do opanowania tych narzędzi jest praktyka, więc nie krępuj się ich używać i eksperymentować!


            <h2>Funkcje wbudowane do manipulowania wskaźnikami</h2>

            <p>Skoncentrujemy się na czterech funkcjach wbudowanych w PHP, które umożliwiają manipulację wskaźnikami. Są to: <strong>reset()</strong>, <strong>end()</strong>, <strong>next()</strong> oraz <strong>prev()</strong>.</p>

            <h3>1. Funkcja reset() <a href="https://www.php.net/manual/en/function.reset.php" target="_blank">#</a></h3>

            <p>Reset() to funkcja, która przesuwa wskaźnik na początek tablicy. Oto przykład użycia:</p>

            <pre><code class="php">$tablica = array("element1", "element2", "element3");
echo reset($tablica); // wyświetli "element1"
</code></pre>

            <p>Jak zauważamy, <em>reset()</em> pozwala nam na powrót do pierwszego elementu tablicy.</p>

            <h3>2. Funkcja end() <a href="https://www.php.net/manual/en/function.end.php" target="_blank">#</a></h3>

            <p>End() przesuwa wskaźnik na ostatni element tablicy. Oto jak to działa:</p>

            <pre><code class="php">$tablica = array("element1", "element2", "element3");
echo end($tablica); // wyświetli "element3"
</code></pre>

            <p>Dzięki <em>end()</em> możemy skierować wskaźnik na ostatni element naszej tablicy.</p>

            <h3>3. Funkcja next() <a href="https://www.php.net/manual/en/function.next.php" target="_blank">#</a></h3>

            <p>Next() przesuwa wskaźnik o jeden element do przodu. Oto przykład:</p>

            <pre><code class="php">$tablica = array("element1", "element2", "element3");
echo next($tablica); // wyświetli "element2"
</code></pre>

            <p>Jak widzimy, funkcja <em>next()</em> przesuwa wskaźnik na kolejny element tablicy.</p>

            <h3>4. Funkcja prev() <a href="https://www.php.net/manual/en/function.prev.php" target="_blank">#</a></h3>

            <p>Prev() przesuwa wskaźnik o jeden element do tyłu. Zobaczmy to w akcji:</p>

            <pre><code class="php">$tablica = array("element1", "element2", "element3");
end($tablica); // ustawiamy wskaźnik na ostatni element
echo prev($tablica); // wyświetli "element2"
</code></pre>

            <p>Użyliśmy tutaj najpierw funkcji <em>end()</em>, aby przesunąć wskaźnik na ostatni element, a następnie <em>prev()</em>, która przesunęła wskaźnik o jeden element do tyłu.</p>

            <h2>Praktyczne Wykorzystanie Tablic Asocjacyjnych w PHP</h2>
            <p>
                Tablice asocjacyjne są bardzo użyteczne w praktycznych sytuacjach, kiedy chcemy przypisać określonym kluczom konkretne wartości. Oto kilka praktycznych przykładów:
            </p>

            <h3>1. Przechowywanie informacji o użytkowniku</h3>
            <pre>
<code>$uzytkownik = [
    "login" => "janek123",
    "haslo" => "tajneHaslo",
    "email" => "janek@example.com"
];

echo "Email użytkownika to: " . $uzytkownik["email"];
</code>
</pre>

            <h3>2. Dane kontaktowe firmy</h3>
            <pre>
<code>$firma = [
    "nazwa" => "SuperProdukty Sp. z o.o.",
    "adres" => "ul. Jana Pawła 10, 00-001 Warszawa",
    "telefon" => "+48 123 456 789"
];

echo "Nazwa firmy to: " . $firma["nazwa"];
</code>
</pre>

            <h3>3. Parametry techniczne produktu</h3>
            <pre>
<code>$telefon = [
    "model" => "XYZ Pro Max",
    "bateria" => "4000mAh",
    "aparat" => "12MPx"
];

echo "Model telefonu to: " . $telefon["model"];
</code>
</pre>

            <p>
                Jak widać, tablice asocjacyjne są doskonałym narzędziem do przechowywania i zarządzania danymi, które są naturalnie zorganizowane w pary klucz-wartość.
            </p>


{{--            Article           --}}

        </div>
    </section>
</div>
