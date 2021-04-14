@extends('layouts.app_blog')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog/articles.css') }}">

<!-- add script -->
<script src="{{ asset('js/blog/articles.js') }}"></script>

<div class="content">
  <div id="parallax-blog-ads_google" class="parallax"></div>
  <div class="article-title">
    <p style="font-size: 5.4vw;">Reklamowanie w wyszukiwarce Google</p>
  </div>
  <div class="article">
    <p>
      Reklamy w wyszukiwarce google są nieco inne niż reklamy w serwisach społecznościowych. Nieposiadają grafik czy nagrań video.
      Graficznie, reklamy te wyglądają bardzo prosto. Jest to głównie odpowiednio wypozycjonowany tekst z maksymalnie kilkoma krótkimi 
      zdaniami które mają na celu skusić potencjalnego klienta do kliknięcia w nią.
    </p>
    <p>
      Abstrahując od kwesti wizualnych, reklamy w Google działają trochę inaczej niż te w mediach społecznościowych.
      Różnica polega na tym, że reklama wyświetli się dopiero wtedy gdy ktoś wpisze w wyszukiwarce słowo czy całą frazę 
      na którą to właśnie "ustawiliśmy" reklame (w przeciwieństwie do mediów społecznościowych które daja nam gigantyczne możliwości targetowania 
      konsumentów na bazie ich zainteresowań, wieku, profesji i wielu innych czynników).  
    </p>
    <p>
      Najbardziej kluczowe w tym wszystkim jest to, że kiedy ktoś szuka w wyszukiwarce rozwiązania swojego problemu i wpiszę tam dla przykładu: 
      "dentysta warszawa tanio" to mamy możliwość wyświetlenia naszej reklamy na samym szczycie wyników wyszukiwania! Wisienką na torcie jest to, że 
      jeśli ktoś w nią nie kliknie, to nie zapłacimy nawet grosza za jej wyświetlenie.
    </p>
    <div style="padding-top: 2.7rem;">
      <p>
        Najlepsze jednak w tym wszystkim jest to, że możesz cały ten proces oddelegować nam, dzięki czemu będziesz móc bardziej skupić się na swojej pracy oraz obsłudze nowych, 
        stale napływających klientów!
      </p>
      <p style="font-size: 24px; text-align: center;">
        <a href="/contact" target="_blank">
          Umów się na darmowy audyt by dowiedzieć się jak możemy Ci pomóc!
        </a>
      </p>
    </div>
  </div>
</div>

@endsection