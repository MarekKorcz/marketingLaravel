@extends('layouts.app')

@section('content')

    <!-- add styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    

    <div id="first-main" class="main-element-scaffold pink-bg">
      <div class="centered gold-text">
        <span>Czy już sama myśl o reklamowaniu się w internecie, przyprawia Cię o niepokój?</span>
      </div>
    </div>

    <div id="second-main" class="row main-element-scaffold gold-bg">
      <div class="image-half col-sm-6">
        <img src="img/man-confused.jpg">
      </div>
      <div class="col-sm-6 text-half chili-pepper-text center-positioning">
        <h1>Gdzie jest Twój ból?</h1>
        &nbsp;
        <h2>Nie wiesz jak to się robi?</h2> 
        &nbsp;
        <h3>Gdzie zacząć?</h3> 
        &nbsp;
        <h4>Czy po prostu Cie to nie interesuję?</h4>
      </div>
    </div>

    <div id="third-main" class="row chili-pepper-bg center-positioning">
      <h3>Chciałbyś stale pozyskiwać nowych klientów jednocześnie skupiając się wyłącznie na swojej pracy?</h3>
    </div>

    <div id="fourth-main" class="row main-element-scaffold cyan-bg">
      <div class="col-sm-6 text-half white-text center-positioning">
        &nbsp;
        <h2>Świetnie się złożyło, że się poznaliśmy ponieważ jesteśmy przekonani, że możemy Ci pomóc uzyskać oczekiwany stan rzeczy!!</h2>
        &nbsp;
      </div>
      <div class="image-half col-sm-6">
        <img src="img/man-full-of-life.jpg">
      </div>
    </div>

    <div id="fifth-main" class="row chili-pepper-bg center-positioning">
      <p>
        Twoi obecni klienci oraz zlecenia są krwią płynącą w aortach Twojej firmy. Niestety, upływający w każdej chwili czas przybliżający Cie 
        do kolejnych cyklicznych płatności sprawia, że się wykrwawiasz. 
      </p>
      <p>
        Możesz się z tym niezgodzić, walić głową w mur, lecz im wcześniej uświadomisz sobie, że 
      <strong>potrzebujesz stale napływających nowych klientów oraz zleceń</strong> - 
      tym bardziej zwiększysz szanse na długoterminowe prosperowanie swojego biznesu.
      </p>
    </div>

    <div id="sixth-main" class="main-element-scaffold pink-bg">
      <p class="gold-text" style="font-size: 2.1rem;">
        Do reklamy w internecie trzeba podejść jak do każdej innej inwestycji!
      </p>
      <p class="gold-text">
        Tak jak nasiono potrzebuję czasu, wody i światła by stać się drzewm, 
        tak tworzenie konwertującego leja sprzedażowego dla Twojej firmy wymaga powzięcia pewnych środków oraz ich odpowiedniego ulokowania.
      </p>
      <p class="gold-text" style="font-size: 2.1rem;">
        Potrzebne jest zrozumienie, opanowanie, czas i pieniądze.
      </p>
    </div>

    <div class="text-center" style="padding: 0 3vh 6vh 3vh;">
      <h3>
        Działania reklamowe obecnie oferowane przez nasz zespół dzielą się na trzy główne gałęzie:
      </h3>
    </div>

    <div id="seventh-main" class="row main-element-scaffold cyan-bg">
      <div class="col-sm-4 white-text center-positioning">
        <p style="font-size: 1.5rem;">
          1. Prowadzenie kont na serwisach społecznościowych - Facebook, Instagram oraz Twitter. </br>
          <a href="/blog/running-social-media-accounts" target="_blank">
            Dowiedz się więcej
          <a> 
        </p>
      </div>
      <div class="col-sm-4 white-text center-positioning">
        <p style="font-size: 1.5rem;">
          2. Tworzenie oraz publikacja w mediach społecznościowych reklam (w postaci grafik, zdjęć czy video). </br>
          <a href="/blog/running-social-media-ads" target="_blank">
            Dowiedz się więcej
          <a> 
        </p>
      </div>
      <div class="col-sm-4 white-text center-positioning">
        <p style="font-size: 1.5rem;">
          3. Tworzenie oraz publikacja reklam w wyszukiwarce Google. </br>
          <a href="/blog/running-google-ads" target="_blank">
            Dowiedz się więcej
          <a> 
        </p>
      </div>
    </div>

    <div class="text-center" style="padding: 0 3vh 6vh 3vh;">
      <h3>
        Wszystko to po to by nie "przepalać" budżetu reklamowego zwiększając przy tym stale liczbę Twoich nowych klientów!
      </h3>
    </div>

    <div id="eighth-main" class="main-element-scaffold pink-bg">
      <p class="gold-text" style="font-size: 1.8rem;">
        Tak więc...jeśli marzysz o oddelegowaniu od siebie wszystkich tych zajęć ciesząc się przy tym nowymi i stale napływającymi klientami - pozostaw to nam!
      </p>
      <!-- <p class="gold-text">
        By ułatwić sobie decyzję - zapoznaj się 
        <a href="/pricing" target="_blank" style="text-shadow: .06rem .05rem white;">
          z naszymi korzystnymi cenami! 
        </a>
      </p> -->
      <p class="gold-text" style="font-size: 2.1rem;">
        To najlepsza inwestycja dla Twojej firmy!
      </p>
    </div>

    <div class="text-center">
      <p style="font-size: 7.5vh; padding: 0 3vh 7vh 3vh;">
        Jeśli wyrażnie widzisz te zdanie to znaczy, że jesteś już bardzo blisko sukcesu!! </br>
        <a href="/contact" target="_blank">
          Skontaktuj się z nami!
        </a>
      </p>
    </div>

@endsection