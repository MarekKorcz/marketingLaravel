@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/pricing.css') }}">

<div class="container">
    <div id="header">
        <h1>
            Cennik 
        </h1>
    </div>
    <div id="text">
        <p>
            Wycena prowadzenia mediów społecznościowych czy publikacji płatnych reklam w mediach społecznościowych i wyszukiwarce Google to proces 
            dość skomplikowany i wielowymiarowy. 
            <strong>
                Każdy biznes jest inny przez co będzie wymagał większych lub mniejszych nakładów naszej pracy. 
            </strong>
        </p>
        <p>
            To co przekłada się na ostateczną cene to:
        </p>
        <ul>
            <li>
                analiza branży
            </li>
            <li>
                sposób promocji w sieci (nie wszystkie serwisy społecznościowe nadają się do reklamowania każdej branży przez co niektóre biznesy będą 
                potrzebowały ich wszystkich, kiedy inne - tylko jednego)
            </li>
            <li>
                ustalenie z nami wolumenu publikacji reklam i postów, a wraz z nim budżetu reklamowego (przykład: stworzenie jednej kampanii reklamowej 
                w miesiącu, z czteroma reklamami w postaci grafiki i tekstu to zupełnie co innego niż prowadzenie funpage'ów na 3 serwisach społecznościowych,
                publikowanie na nich co 3 dni nowych postów oraz tworzenie 4 kampanii relamowych miesięcznie składających się z kilku reklam testowych każda (niejednokrotnie w formie 
                video))
            </li>
        </ul>
        <p>
            <strong>
                Wszystko to sprawia, że gołym okiem widać dlaczego próba ujednolicenia stawek jest z góry skazana na porażkę! </br> </br>
            </strong>
            By już na wstępie nie wprowadzać przedsiębiorców w błąd, w naszej agencji postanowiliśmy opisać cennę naszych usług przy użyciu widełek. 
            Tak jak opisane wyżej, ostateczna cena naszych usług będzie bezpośrednio powiązana z tym jak bardzo będziesz chcieć zareklamować swój biznes. </br> </br>
            <strong>
                Pamiętaj, reklama to dźwignia handlu przez co jej cena to nie kolejny koszt lecz najlepsza inwestycja na którą możesz się zecydować 
                ponieważ wraz z nią pozyskasz niejednokrotnie masę klientów i nowych zleceń które z nadwyżką zwrócą Ci te pieniądze!!
            </strong>
        </p>
    </div>
    <div id="pricing">
        <p>
            Cena naszych usług waha się od 
            <strong>
                750zł - 3000zł
            </strong>
            netto miesięcznie.
        </p>
        <p>
            Do ceny ostatecznej doliczyć trzeba budżet reklamowy. Generalnie oscyluje on pomiędzy 
            <strong>
                50% - 150% naszego wynagrodzenia.
            </strong>
            Jego ostateczna wyskość wiąże się z ustaleniem zakresu i ilości publikacji płatnych reklam.
        </p>
    </div>
    <div id="cta">
        <p>
            <a href="/contact" target="_blank">
                Umów się z nami na darmowy audyt Twojego biznesu! 
            </a>
            Dzięki niemu przeanalizujemy Twoją widoczność w sieci, zaproponujemy sposób reklamowania się oraz wycenimy dokładnie koszt naszej współpracy!
        </p>
    </div>
</div>

@endsection