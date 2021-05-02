@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

<div class="contact-section">
    <div class="row">
        <div class="col-12">
            <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-12 text-center">
                    <h2 class="text-center" style="letter-spacing: 6px;">
                        POLITYKA PRYWATNOŚCI
                    </h2>
                    <p style="font-size: 24px;">
                        Strony internetowej
                        <strong>
                            „{{ config('app.name') }}”
                        </strong>
                    </p>
                    <h6>
                        (obowiązuje od 13-01-2020)
                    </h6>
                </div>
            </div>
        </div>
            
        <div class="container">
            <div class="row" style="padding-bottom: 1rem;">
                <div class="col-1"></div>
                <div id="first-paragraph" class="col-10">
                    <p class="text-center">
                        <strong>
                            § 1
                        </strong>
                    </p>
                    <p>
                        <strong>
                            Informacja dla Użytkownika zgodnie z wymogami Rozporządzenia Parlamentu
                            Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób
                            fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego
                            przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o
                            ochronie danych; dalej: RODO)
                        </strong>
                    </p>
                    <p>
                        <strong>
                            Kto jest administratorem Twoich danych osobowych?
                        </strong>
                        <br>
                        Administratorem, czyli podmiotem decydującym o tym, jak będą wykorzystywane Twoje
                        dane osobowe, jest MAREK KORCZ, pod adresem WARSZAWA 02-672, ul. DOMANIEWSKA 17/19/109, 
                        REGON: 147199810, NIP: 5213533415 w dalszej części dokumentu zwanym „{{ config('app.name') }}”.
                    </p>
                    <p>
                        <strong>
                            Jak się z nami skontaktować, żeby uzyskać więcej informacji o przetwarzaniu danych osobowych?
                        </strong>
                        <br>
                        Przedstawiciele {{ config('app.name') }} są do Twojej dyspozycji pod następującymi danymi kontaktowymi:
                        <ul style="list-style-type: circle;">
                            <li>adres korespondencyjny: Marek Korcz, ul. Domaniewska 17/19/109, 02-672 Warszawa;</li>
                            <li>adres e-mail: mark.korcz@gmail.pl</li>
                            <li>telefon: 602-342-396</li>
                        </ul>
                    </p>
                    <p>
                        W związku z prawidłowym administrowaniem naszej strony internetowej
                        przetwarzamy takie dane jak Twój adres IP, datę i czas serwera, informacje o przeglądarce
                        internetowej, informacje o systemie operacyjnym, a także tzw. pliki cookies, o których
                        przeczytasz w § 2.
                    </p>
                    <p class="text-center">
                        <strong>§ 2</strong>
                        <br>
                        <strong>Polityka Cookies</strong>
                    </p>
                    <p>
                        {{ config('app.name') }} w swojej stronie internetowej <a href="/" target="_blank">www.mark-media.pl</a>, podobnie jak inne
                        podmioty, wykorzystuje tzw. cookies (ciasteczka), czyli krótkie informacje tekstowe,
                        zapisywane na komputerze, telefonie, tablecie, czy też innym urządzeniu użytkownika. Mogą
                        być one odczytywane przez nasz system, a także przez systemy należące do innych
                        podmiotów, z których usług korzystamy (np. Facebooka, Google’a).
                        <br>
                        Cookies spełniają bardzo wiele przydanych funkcji, bez których korzystanie z naszych usług
                        nie byłoby pełne ani sprawne. Staraliśmy się je opisać poniżej, ale jeżeli informacje te
                        okazałyby się niewystarczające, napisz do nas, a odpowiemy na wszystkie wątpliwości.
                        <br>
                        <ul style="list-style-type: circle;">
                            <li>stan sesji — w plikach cookies często są zapisywane informacje o tym, jak
                                odwiedzający korzystają z serwisu, np. które podstrony lub oferty najczęściej
                                wyświetlają. Umożliwiają również identyfikację błędów wyświetlanych w niektórych
                                funkcjonalnościach. Pliki cookies służące do zapisywania tzw. „stanu sesji” i pomagają
                                ulepszać usługi i zwiększać komfort korzystania z serwisu.</li>
                            <li>tworzenie statystyk — pliki cookies są wykorzystywane do tego, aby przeanalizować,
                                w jaki sposób użytkownicy korzystają z serwisu (jak wielu wchodzi na stronę, jak
                                długo na niej pozostają, jakie treści cieszą się największym zainteresowaniem itp.).
                                Dzięki temu możemy stale ulepszać nasz serwis i dostosowywać jego działanie do
                                preferencji użytkowników. W celu śledzenia aktywności i tworzenia statystyk
                                możemy wykorzystywać narzędzia Google’a, takie jak Google Analytics; oprócz
                                raportowania statystyk użytkowania witryny pikselowy Google Analytics może
                                również służyć, razem z niektórymi opisanymi powyżej plikami cookies, do pomocy w
                                wyświetlaniu użytkownikowi bardziej trafnych treści w usługach Google (np. w
                                wyszukiwarce Google)</li>
                            <li>korzystanie z funkcji społecznościowych — serwis może korzystać z Facebook Pixel,
                                czyli narzędzia które umożliwia polubienie naszego Fanpage’a w tym serwisie podczas
                                korzystania z witryny. Również by to było możliwe, musimy korzystać z plików
                                cookies dostarczanych przez Facebooka.</li>
                        </ul>
                    </p>
                    <p>
                        Twoja przeglądarka internetowa domyślnie dopuszcza wykorzystywanie cookies w Twoim
                        urządzeniu, dlatego przy pierwszej wizycie prosimy o akceptację naszej Polityki Prywatności,
                        której nieodłącznym elementem jest opisana tutaj Polityka Cookies. Taka akceptacja oznacza
                        wyrażenie zgody na użycie cookies w sposób i dla celów wyżej opisanych. Jeżeli nie życzysz
                        sobie używania cookies i nie wyrażasz takiej zgody, a jednak chcesz korzystać z naszych
                        usług, zmień ustawienia w swojej przeglądarce internetowej. Możesz całkowicie blokować
                        automatyczną obsługę plików cookies lub żądać powiadomienia o każdorazowym
                        zamieszczeniu cookies w urządzeniu. Ustawienia można zmienić w dowolnej chwili. Musisz
                        jednak pamiętać, że wyłączenie lub ograniczenie obsługi plików cookies może spowodować
                        dość poważne trudności w korzystaniu z naszych usług i wpłynąć na niektóre funkcjonalności
                        naszej strony internetowej.
                        <br><br>
                        W ramach naszej strony internetowej stosowane są „stałe” plików cookies (persistent cookies). 
                        „Stałe” pliki cookies przechowywane są w urządzeniu końcowym użytkownika
                        przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez
                        użytkownika.
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection