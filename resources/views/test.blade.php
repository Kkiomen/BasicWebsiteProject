
<h1>Wprowadzenie do zmiennych i typów danych w PHP</h1><p>Witaj w lekcji "Zmienne i typy danych". Zacznijmy od podstaw -
    <strong>czym jest zmienna?</strong> Zmienna to podstawowy komponent języka PHP, który pozwala twórcy oprogramowania
    na przechowywanie danych, które mogą być później użyte w programie. Możemy to porównać do pudełka, w którym możemy
    przechowywać różne przedmioty, które później możemy użyć.</p><h2>Znaczenie zmiennych w programowaniu</h2><p><em>Zmienne
        są niezwykle ważne w programowaniu.</em> Bez nich, nasze programy byłyby statyczne i nie mogłyby przetwarzać
    danych. Wyobraź sobie, że piszesz program, który dodaje dwie liczby. Bez zmiennych, musiałbyś napisać nowy kod dla
    każdej pary liczb, które chcesz dodać. Ale dzięki zmiennym, możesz napisać jeden kawałek kodu, który będzie działał
    dla każdej pary liczb.</p><h2>Deklaracja i inicjalizacja zmiennych w PHP</h2><p>Teraz, kiedy już wiemy, czym jest
    zmienna i dlaczego jest ważna, przejdźmy do <strong>deklaracji i inicjalizacji zmiennych</strong>. Deklaracja
    zmiennej to proces tworzenia nowej zmiennej w programie. W PHP zmienną deklarujemy za pomocą znaku dolara ($), po
    którym następuje nazwa zmiennej.</p>
<pre><code class="php">$mojaZmienna;</code></pre><p>W tym przypadku "$mojaZmienna" to nowo utworzona zmienna. Jest to jednak pusta zmienna,
    ponieważ nie ma jeszcze przypisanej wartości.</p><p>Możemy również deklarować i inicjalizować zmienną w jednym
    kroku:</p>
<pre><code class="php">$innaZmienna = "Witaj, świecie!";</code></pre><p>W tym przypadku zmienna "$innaZmienna" jest deklarowana i od razu
    inicjalizowana wartością "Witaj, świecie!".</p><h2>Podstawowe informacje o typach danych w PHP</h2><p>W PHP istnieją
    różne <strong>typy danych</strong>, które możemy przechowywać w <em>zmiennych</em>. Omówimy teraz najważniejsze z
    nich.</p><h3>Zrozumieć typ liczbowy w PHP</h3><p>W PHP mamy dwa główne typy liczbowe: <strong>liczby
        całkowite</strong> (integer) i <strong>liczby zmiennoprzecinkowe</strong> (float).</p><p><strong>Liczby
        całkowite</strong> to po prostu liczby bez części dziesiętnych. Oto przykład:</p>
<pre><code class="php">$liczbaCalkowita = 7;</code></pre><p><strong>Liczby zmiennoprzecinkowe</strong> to liczby z częścią dziesiętną. Oto
    przykład:</p>
<pre><code class="php">$liczbaZmiennoprzecinkowa = 3.14;</code></pre><h3>Co to jest typ string w PHP?</h3><p><strong>String</strong> to ciąg
    znaków. W PHP stringi tworzymy umieszczając tekst w cudzysłowach lub apostrofach. Oto przykład:</p>
<pre><code class="php">$string = "To jest string";</code></pre><h3>Typ boolean w PHP</h3><p><strong>Boolean</strong> to typ danych, który może
    przechowywać jedną z dwóch wartości: prawda (true) lub fałsz (false). Są one często używane do kontroli instrukcji
    warunkowych. Oto przykład:</p>
<pre><code class="php">$boolean = true;</code></pre><h3>Co to jest Null w PHP?</h3><p>Null w PHP oznacza, że zmienna nie ma przypisanej wartości.
    Oto przykład:</p>
<pre><code class="php">$zmienna = null;</code></pre><h3>Czym są tablice w PHP?</h3><p><strong>Tablica</strong> to typ danych, który może
    przechowywać wiele wartości w jednej zmiennej. Będziemy omawiać tablice szczegółowo w kolejnej lekcji. Na razie, oto
    przykład tablicy:</p>
<pre><code class="php">$tablica = array("element1", "element2", "element3");</code></pre><p>Teraz, gdy już poznaliśmy podstawowe typy danych w
    PHP, możemy zrozumieć, jak przechowywać różne rodzaje informacji w naszych zmiennych. Pamiętaj, że typ danych, który
    wybierzesz, zależy od tego, co chcesz zrobić z danymi. W kolejnych lekcjach nauczymy się, jak manipulować tymi
    danymi i używać ich do tworzenia bardziej skomplikowanych programów.</p><h2><em>Obiekty (Objects) w PHP</em></h2><p>
    Obiekt to specjalny typ zmiennej, który przechowuje zarówno dane (właściwości), jak i funkcje (metody) w jednej
    strukturze. Obiekty są instancjami klas, które omówimy w późniejszych lekcjach. Na razie wystarczy wiedzieć, że
    obiekty są kolejnym typem danych, które PHP potrafi obsłużyć.</p><h2>Specjalne Typy Danych w PHP</h2><p>PHP posiada
    również kilka specjalnych typów danych, a mianowicie: resource i NULL.</p><h3>Resource</h3><p>Zmienne zasobów
    przechowują odwołanie do zewnętrznego zasobu. Zasoby są tworzone i używane przez specjalne funkcje. Przykładami
    zasobów są plik, obraz, połączenie z bazą danych itp.</p><h3>NULL</h3><p>NULL to specjalny typ danych, który może
    mieć tylko jedną wartość: NULL. Zmienna, która jest tworzona bez wartości, automatycznie otrzymuje wartość NULL.
    Jeśli ustawisz wartość zmiennej na NULL, skutecznie usuwasz zmienną.</p>
<pre><code class="php">$zmiennaNull = NULL; // zmienna null</code></pre><p><br></p><h2>Kontrola Kodu Dzięki Zrozumieniu Typów Danych w PHP</h2>
<p>Znając typy danych i umiejąc je rozpoznawać, zyskujemy większą kontrolę nad naszym kodem. To jest bardzo ważne,
    szczególnie kiedy pracujemy z <strong>zewnętrznymi danymi</strong>, które mogą być różnych typów. Używając funkcji
    do rozpoznawania typów, możemy lepiej zrozumieć i kontrolować nasz kod.</p><h3>Integer - zmienne
    całkowitoliczbowe</h3><p>Jeśli pracujesz z numerami całkowitymi, powinieneś używać typu <strong>integer</strong>.
    Przykładowe użycie:</p>
<pre><code class="php">int $liczba = 10; // integer
<br></code></pre><p>Zmienna <em>$liczba</em> służy do przechowywania wartości liczbowej.</p><h3>Float - zmienne
    zmiennoprzecinkowe</h3><p>Jeśli pracujesz z liczbami zmiennoprzecinkowymi, powinieneś używać typu
    <strong>float</strong>. Przykładowe użycie:</p>
<pre><code class="php">float $cena = 19.99; // float
<br></code></pre><p>Zmienna <em>$cena</em> służy do przechowywania ceny produktu.</p><h3>String - zmienne tekstowe</h3><p>
    Jeżeli pracujesz z tekstami, powinieneś używać typu <strong>string</strong>. Przykładowe użycie:</p>
<pre><code class="php">string $imie = "Jan"; // string
<br></code></pre><p>Zmienna <em>$imie</em> służy do przechowywania imienia użytkownika.</p><h3>Boolean - zmienne logiczne</h3>
<p>Jeśli pracujesz z wartościami logicznymi prawda/fałsz, powinieneś używać typu <strong>boolean</strong>. Przykładowe
    użycie:</p>
<pre><code class="php">bool $czyAdmin = false; // boolean
<br></code></pre><p>Zmienna <em>$czyAdmin</em> służy do przechowywania informacji, czy użytkownik jest administratorem czy nie.
</p><h3>Array - tablice zmiennych</h3><p>Jeżeli pracujesz z zestawem wartości, powinieneś używać typu
    <strong>array</strong>. Przykładowe użycie:</p>
<pre><code class="php">$produkty = array("jabłko", "banan", "gruszka"); // array
<br></code></pre><p>Zmienna <em>$produkty</em> służy do przechowywania listy produktów.</p><h2>Praktyczne zastosowanie
    zmiennych</h2><p>Zmienne są podstawowym elementem każdego programu. Używając zmiennych, możemy przechowywać dane,
    które są potrzebne do wykonania programu. Na przykład, możemy używać zmiennych do przechowywania wyników obliczeń,
    wartości wprowadzanych przez użytkownika, informacji o stanie programu itp.</p><p>Ważne jest, aby pamiętać, że
    wartość zmiennej może być zmieniana w dowolnym momencie podczas wykonywania programu. Daje nam to dużą elastyczność
    i pozwala na dynamiczne działanie programów.</p>
<pre><code class="php">$liczba = 10; // integer
$liczba += 5; // teraz wartość zmiennej $liczba to 15
<br></code></pre><p>W powyższym przykładzie, zmienna <strong>$liczba</strong> początkowo ma przypisaną wartość 10. Następnie
    dodajemy do niej 5, co powoduje, że jej nowa wartość to 15.</p><p><br></p><p><br></p><h2>Wprowadzenie do zmiennych i
    typów danych w PHP 8</h2><p>W wersji PHP 8, <strong>typowanie zmiennych</strong> odgrywa kluczową rolę.&nbsp;</p>
<h2>Co to jest typowanie zmiennych w PHP 8?</h2><p>Typowanie zmiennych to proces, w którym programista określa, jaki
    <strong>typ danych</strong> powinna przechowywać dana zmienna. W wersjach PHP poprzedzających wersję 8, język był
    słabo typowany, co oznaczało, że PHP automatycznie decydował o typie danych dla zmiennej. Teraz, w PHP 8,
    wprowadzono silne typowanie.</p><h3>Przykład typowania zmiennych w PHP 8</h3>
<pre><code class="php">function add(int $a, int $b): int
{
    return $a + $b;
}</code></pre><p>W powyższym przykładzie, funkcja <em>add</em> oczekuje dwóch argumentów typu <strong>int</strong> (liczba
    całkowita) i zwraca wartość również typu <strong>int</strong>. Jeśli podamy wartości innego typu, PHP zwróci błąd.
</p><h2>Dlaczego typowanie zmiennych jest ważne?</h2><p>Typowanie zmiennych ma wiele zalet. Po pierwsze, zwiększa
    <strong>czytelność kodu</strong>. Kiedy patrzymy na funkcję lub metodę, od razu wiemy, jakiego typu dane powinny być
    przekazywane i jakiego typu danych powinniśmy oczekiwać. Po drugie, silne typowanie pomaga w <strong>wykrywaniu
        błędów</strong> na etapie pisania kodu. Jeżeli podamy nieprawidłowy typ danych, PHP od razu nas o tym
    poinformuje.</p><h2>Typowanie zmiennych a jakość kodu</h2><p>Mimo że silne typowanie zmiennych może początkowo
    wydawać się dodatkowym obciążeniem, w rzeczywistości jest to bardzo pomocne narzędzie. Dzięki niemu mamy pewność, że
    nasze funkcje i metody będą działać poprawnie dla oczekiwanych typów danych. Typowanie zmiennych pomaga nam pisać
    bardziej <strong>przewidywalny i bezpieczny kod</strong>.</p><p>Pamiętaj, że warto <strong>zawsze typować swoje
        zmienne</strong> - to zdecydowanie usprawni twój proces programowania.</p><h2>Automatyczna konwersja typów w
    PHP, czyli "Type Juggling"</h2><p>PHP jest językiem o dynamicznym typowaniu, co oznacza, że PHP samodzielnie
    decyduje o typie danej zmiennej na podstawie kontekstu, w którym jest używana. Ten proces nazywany jest <strong>"type
        juggling"</strong>, czyli "żonglowaniem typami".</p><h3>Przykład "Type Juggling"</h3>
<pre><code class="php">$zmienna1 = "10"; // string
$zmienna2 = 20; // integer

$suma = $zmienna1 + $zmienna2; // wynik to 30
<br></code></pre><p>W powyższym przykładzie $zmienna1 jest typu string, a $zmienna2 jest typu integer. PHP automatycznie
    konwertuje $zmienna1 na integer podczas operacji dodawania, co pozwala na poprawne wykonanie operacji i zwrócenie
    wyniku 30.</p><h3>Dlaczego "Type Juggling" jest ważne?</h3><p><strong>"Type juggling"</strong> pozwala na większą
    elastyczność podczas pisania kodu w PHP. Nie musisz martwić się o konieczność ręcznej konwersji typów danych w
    większości przypadków, ponieważ PHP zrobi to za Ciebie.</p><p>Jednakże, "type juggling" może prowadzić do
    nieoczekiwanych wyników, jeśli nie jesteś świadomy, jak PHP konwertuje typy danych. Na przykład, porównanie dwóch
    zmiennych różnych typów za pomocą operatora równości (==) może dać inny wynik, niż porównanie tych samych zmiennych
    za pomocą operatora identyczności (===).</p><h3>Porównanie operatora równości (==) i operatora identyczności
    (===)</h3>
<pre><code class="php">$zmienna1 = "10"; // string
$zmienna2 = 10; // integer

var_dump($zmienna1 == $zmienna2); // wynik to bool(true)
var_dump($zmienna1 === $zmienna2); // wynik to bool(false)
<br></code></pre><p>W powyższym przykładzie, operator równości (==) zwraca wartość true, ponieważ PHP automatycznie konwertuje
    string "10" na integer 10. Natomiast operator identyczności (===) zwraca wartość false, ponieważ porównuje zarówno
    wartość, jak i typ danych zmiennych. W tym przypadku, mimo że wartość jest taka sama, typ danych jest inny, więc
    wynikiem jest false.</p><h2>Zasady automatycznej konwersji typów (type juggling) w PHP</h2><p>Automatyczna konwersja
    typów <em>(type juggling)</em> jest niewątpliwie bardzo wygodnym rozwiązaniem, ale jednocześnie wymaga od nas
    zrozumienia, jak PHP decyduje, kiedy i jak dokonać takiej konwersji. Oto kilka podstawowych zasad:</p>
<ul>
    <li>Jeśli dodasz integer do stringa, PHP automatycznie konwertuje stringa na integer (jeśli to możliwe) i wykonuje
        operację.
    </li>
    <li>Jeśli użyjesz zmiennej typu boolean w kontekście liczbowym (na przykład w operacji matematycznej), PHP traktuje
        wartość true jako 1, a false jako 0.
    </li>
    <li>Jeśli spróbujesz skonwertować stringa, który nie zaczyna się od liczby, na integer, wynikiem będzie 0.</li>
</ul><p>Przykład:</p>
<pre><code class="php">$zmienna1 = "10 jabłek"; // string
$zmienna2 = 20; // integer

$wynik = $zmienna1 + $zmienna2; // wynik to 30
var_dump($wynik); // wynik to int(30)

$zmienna3 = "jabłka 10"; // string
$wynik2 = $zmienna3 + $zmienna2; // wynik to 20
var_dump($wynik2); // wynik to int(20)
<br></code></pre><p>W powyższym przykładzie, w pierwszym przypadku, PHP jest w stanie skonwertować "10 jabłek" na integer 10. W
    drugim przypadku, "jabłka 10" nie może być skonwertowane na integer, więc PHP traktuje to jako 0.</p><p>Automatyczna
    konwersja typów, czyli "type juggling", to potężne narzędzie, które sprawia, że PHP jest elastycznym i wyrozumiałym
    językiem. Jednak, jak widzimy, może to również prowadzić do nieoczekiwanych wyników. Dlatego ważne jest, aby zawsze
    być świadomym typów naszych zmiennych i jak są one używane w naszym kodzie.</p><p><br></p><p><br></p><h2>Ręczna
    konwersja typów danych</h2><p>W programowaniu, a szczególnie w języku PHP, zrozumienie zmiennych i typów danych jest
    kluczowe do tworzenia efektywnego kodu. Dzięki temu jesteśmy w stanie dokonywać ręcznej konwersji typów danych,
    znaną również jako <em>"type casting"</em>.</p><h2>"Type casting" w PHP: Co to jest?</h2><p>"Type casting" to
    proces, w którym ręcznie zmieniamy typ danych zmiennej. W PHP, to jest dość proste do wykonania - wystarczy umieścić
    nazwę zmiennej w nawiasach okrągłych i poprzedzić ją nazwą typu danych, na który chcemy ją przekonwertować. Często
    jest to przydatne, gdy chcemy mieć pełną kontrolę nad tym, jakie <strong>typy danych</strong> są używane w naszym
    kodzie.</p><h2>Przykład użycia "type casting" w PHP</h2>
<pre><code class="php">$zmienna1 = "10"; // string

$zmienna1 = (int)$zmienna1; // teraz $zmienna1 jest typu integer

var_dump($zmienna1); // wynik to int(10)

<br></code></pre><p>W powyższym przykładzie, zmienna $zmienna1 była początkowo typu string. Poprzez użycie "type casting",
    <strong>(int)$zmienna1</strong>, zmieniliśmy typ zmiennej na integer. Teraz, kiedy używamy funkcji var_dump na
    $zmienna1, wynikiem jest int(10), co oznacza, że $zmienna1 jest teraz typu integer z wartością 10.</p><h2>Typy
    danych do których możemy dokonać "type casting" w PHP</h2><p>W PHP, możemy ręcznie konwertować zmienne do
    następujących typów danych:</p>
<ul>
    <li><strong>(int)</strong> lub <strong>(integer)</strong> - do konwersji na typ integer,</li>
    <li><strong>(bool)</strong> lub <strong>(boolean)</strong> - do konwersji na typ boolean,</li>
    <li><strong>(float)</strong>, <strong>(double)</strong> lub <strong>(real)</strong> - do konwersji na typ float,
    </li>
    <li><strong>(string)</strong> - do konwersji na typ string,</li>
    <li><strong>(array)</strong> - do konwersji na typ array,</li>
    <li><strong>(object)</strong> - do konwersji na typ object.</li>
</ul><p>Jednak, warto pamiętać, że nie wszystkie konwersje są możliwe. Na przykład, nie możemy przekonwertować typu
    array na typ string.</p><h2>Po co nam "type casting" w PHP?</h2><p>Użycie "type casting" w PHP daje nam większą
    kontrolę nad typami danych w naszym kodzie. Możemy decydować, kiedy i gdzie chcemy dokonać konwersji, zamiast
    polegać na automatycznym "type juggling". To jest szczególnie przydatne w skomplikowanych projektach, gdzie
    precyzyjne zarządzanie typami danych jest kluczowe.<br><br></p><h2>Sprawdzanie typów zmiennych w PHP</h2><p>W PHP
    istnieje możliwość sprawdzenia typu danej zmiennej. To jest niezwykle przydatne do zrozumienia, jak działa nasz kod,
    a także do upewnienia się, że dane są w oczekiwanym formacie. W tym celu PHP oferuje różne wbudowane funkcje.</p>
<h3>Użycie funkcji is_int(), is_string(), is_bool() itp.</h3><p>Serdecznie zapraszam do poznania szeregu funkcji, które
    PHP oferuje w celu sprawdzenia, czy zmienna jest danego typu. Te funkcje rozpoczynają się od "is_" i kończą nazwą
    typu, na przykład <em>"is_int"</em> dla integer, <em>"is_string"</em> dla string, <em>"is_bool"</em> dla boolean i
    tak dalej. Wszystkie te funkcje zwracają wartość true, jeśli zmienna jest danego typu, a false w przeciwnym razie.
</p>
<pre><code class="php">$zmienna1 = "10"; // string
$zmienna2 = 10; // integer

var_dump(is_string($zmienna1)); // wynik to bool(true)
var_dump(is_int($zmienna1)); // wynik to bool(false)
var_dump(is_int($zmienna2)); // wynik to bool(true)

<br></code></pre><p>W powyższym przykładzie, <em>"is_string($zmienna1)"</em> zwraca true, ponieważ <strong>$zmienna1</strong>
    jest typu string. Z drugiej strony, <em>"is_int($zmienna1)"</em> zwraca false, ponieważ <strong>$zmienna1</strong>
    nie jest typu integer. Natomiast <em>"is_int($zmienna2)"</em> zwraca true, ponieważ <strong>$zmienna2</strong> jest
    typu integer.</p><h3>Zastosowanie funkcji gettype()</h3><p>PHP oferuje też funkcję <em>"gettype()"</em>, która
    zwraca nazwę typu zmiennej jako string. Ta funkcja jest szczególnie przydatna, gdy chcemy dowiedzieć się, jakiego
    typu jest dana zmienna, bez konieczności sprawdzania każdego typu z osobna.</p>
<pre><code class="php">$zmienna1 = "10"; // string
$zmienna2 = 10; // integer

var_dump(gettype($zmienna1)); // wynik to string(6) "string"
var_dump(gettype($zmienna2)); // wynik to string(7) "integer"

<br></code></pre><p>W tym przypadku, <em>"gettype($zmienna1)"</em> zwraca "string", ponieważ <strong>$zmienna1</strong> jest
    typu string. Natomiast <em>"gettype($zmienna2)"</em> zwraca "integer", ponieważ <strong>$zmienna2</strong> jest typu
    integer.</p><p>Znajomość i umiejętność używania tych funkcji jest kluczowa do precyzyjnego zarządzania typami danych
    w PHP. Pozwala to na pisanie kodu bardziej efektywnie i bezpiecznie.</p><h2>Zakres typów zmiennych</h2><p>
    Zrozumienie zakresu typów zmiennych jest kluczowe dla efektywnego i <em>bezpiecznego</em> programowania. Każdy typ
    zmiennej ma określony zakres, co oznacza, że istnieje ograniczona ilość informacji, którą można w nich przechować.
</p><h3>Integer</h3><p>W PHP typ <strong>integer</strong> to liczba całkowita, która może przechowywać wartości od
    -2147483648 do 2147483647 dla 32-bitowej wersji PHP, a dla 64-bitowego PHP zakres wynosi od -9223372036854775808 do
    9223372036854775807. Przykład użycia:</p>
<pre><code class="php">$liczba = 2147483647; // to jest maksymalna wartość dla integer w 32-bitowym PHP</code></pre><h3>Float</h3><p>Typ <strong>float</strong>
    to liczba zmiennoprzecinkowa, która może przechowywać liczby rzeczywiste, czyli takie, które mają część ułamkową.
    Zakres dla typu float zależy od platformy, na której działa PHP, ale zazwyczaj jest bardzo duży. Przykład użycia:
</p>
<pre><code class="php">$cena = 1.7976931348623e+308; // to jest maksymalna wartość dla float</code></pre><h3>String</h3><p>Typ
    <strong>string</strong> to łańcuch znaków, który może przechowywać dowolną ilość znaków. Ograniczeniem może być
    jedynie dostępna pamięć serwera. Przykład użycia:</p>
<pre><code class="php">$tekst = "To jest bardzo, bardzo, bardzo długi tekst..."; // to jest string</code></pre><h3>Boolean</h3><p>Typ <strong>boolean</strong>
    to typ logiczny, który ma tylko dwa możliwe stany: prawda (true) lub fałsz (false). Nie ma zakresu dla tego typu,
    ponieważ może przechować tylko jedną z dwóch wartości. Przykład użycia:</p>
<pre><code class="php">$czyPada = true; // to jest boolean
$czySlonce = false; // to jest boolean</code></pre><h3>Array</h3><p>Typ <strong>array</strong> to tablica, która może
    przechowywać wiele wartości jednocześnie. Zakres tablicy zależy od dostępnej pamięci w systemie. Przykład użycia:
</p>
<pre><code class="php">$produkty = array("jabłko", "banan", "gruszka", "kiwi", "truskawka", "malina"); // to jest array</code></pre><p>
    Przekroczenie zakresu typu zmiennej może prowadzić do nieoczekiwanych wyników lub błędów, dlatego zrozumienie
    zakresu poszczególnych typów zmiennych jest tak ważne.<br><br></p><h3>Podsumowanie Lekcji: Zmienne w PHP</h3><p>W
    trakcie tej lekcji poznaliśmy podstawowe aspekty dotyczące zmiennych w języku programowania PHP.</p>
<ol>
    <li><strong>Definicja Zmiennej:</strong> Zmienna to podstawowy element języka programowania służący do
        przechowywania danych, które mogą być w późniejszym czasie używane lub modyfikowane. W PHP zmienne zaczynają się
        od znaku <strong>$</strong>.
    </li>
    <li><strong>Deklaracja i Inicjalizacja:</strong> Nauczyliśmy się, jak deklarować zmienne i przypisywać im wartości.
        PHP jest językiem o dynamicznej typizacji, co oznacza, że nie musimy określać typu zmiennej podczas jej
        deklaracji.
    </li>
    <li><strong>Typy Danych:</strong> Omówiliśmy różne typy danych dostępne w PHP:
        <ul>
            <li>Skalary: <strong>Boolean</strong>, <strong>Integer</strong>, <strong>Float</strong>,
                <strong>String</strong></li>
            <li>Złożone: <strong>Array</strong>, <strong>Object</strong></li>
            <li>Specjalne: <strong>Resource</strong>, <strong>NULL</strong></li>
        </ul>
    </li>
    <li><strong>Konwersja Typów Danych:</strong> Dowiedzieliśmy się, jak PHP automatycznie konwertuje typy danych w
        określonych sytuacjach (type juggling) oraz jak możemy ręcznie konwertować zmienne z jednego typu na inny (type
        casting).
    </li>
    <li><strong>Sprawdzanie Typów:</strong> Poznaliśmy różne funkcje, które pozwalają nam określić typ danej zmiennej,
        takie jak <strong>gettype()</strong>, <strong>is_int()</strong>, czy <strong>is_string()</strong>.
    </li>
    <li><strong>Zakres Zmiennych:</strong> Zrozumieliśmy różnicę między zmiennymi globalnymi a lokalnymi oraz
        nauczyliśmy się, jak używać słowa kluczowego <strong>global</strong> oraz statycznych zmiennych w funkcjach.
    </li>
</ol>




Operatory Arytmetyczne: Dodawanie (+), odejmowanie (-), mnożenie (*), dzielenie (/), reszta z dzielenia (%).

Inkrementacja (++) i dekrementacja (--).
Przykłady użycia i typowe zadania z operatorami arytmetycznymi.
Operatory Porównania: Równość (==), identyczność (===), nierówność (!= lub <>), nieidentyczność (!==). Większy niż (>), mniejszy niż (<), większy lub równy (>=), mniejszy lub równy (<=).

Operator "spaceship" (<=>), który jest używany do porównywania dwóch wartości.
Zrozumienie różnicy między równością a identycznością w kontekście typów danych.

Operatory Logiczne: AND (koniekcja) (&& lub and), OR (alternatywa) (|| lub or), NOT (negacja) (!). XOR (alternatywa wykluczająca).
Praktyczne zastosowanie operatorów logicznych w instrukcjach warunkowych.
Kombinowane Operatory Przypisania:

Poznaj operatory takie jak +=, -=, *=, /=, %= oraz ich praktyczne zastosowanie.
Priorytet Operatorów:

Jak rozumieć i kontrolować kolejność wykonywania operacji w skomplikowanych wyrażeniach.
Kluczowe zasady i techniki, w tym użycie nawiasów do określania priorytetów.
