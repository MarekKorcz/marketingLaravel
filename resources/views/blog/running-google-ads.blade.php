@extends('layouts.app_blog')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog/articles.css') }}">

<!-- add script -->
<script src="{{ asset('js/blog/articles.js') }}"></script>

<div class="content">
  <div id="parallax-blog-article-why-own-marketing-agency" class="parallax"></div>
  <div class="article-title">
    <p style="font-size: 5.4vw;">Reklamowanie w wyszukiwarce Google</p>
  </div>
  <div class="article">
    <p>
      Reklamy w wyszukiwarce google są nieco inne niż reklamy w serwisach społecznościowych. Nieposiadają grafik oraz nagrań video.
      Graficznie, reklamy te wyglądają bardzo prosto. Jest to głównie odpowiednio wypozycjonowany tekst z maxymalnie kilkoma krótkimi 
      zdaniami które mają na celu skuśić potencjalnego klienta do kliknięcia w nią.
    </p>
    <p>
      Abstrahując od kwesti wizualnych, reklamy w Google działają trochę inaczej niż te w mediach społecznościowych.
      Różnica polega na tym, że reklama wyświetli się dopiero wtedy gdy ktoś wpisze w wyszukiwarce słowo czy całą frazę 
      na którą to właśnie "ustawiliśmy" reklame. Media społecznościowe daja nam gigantyczne możliwości targetowania konsumentów na bazie 
      ich zainteresowań, wieku, profesji i wielu innych czynników.  
    </p>
    <p>
      Najbardziej kluczowe w tym wszystkim jest to, że kiedy ktoś szuka w wyszukiwarce rozwiązania swojego problemu i wpiszę tam dla przykładu: 
      "dentysta warszawa tanio" to mamy możliwość wyświetlenia naszej reklamy na samym szczycie wyników wyszukiwania! Wisienką na torcie jest to, że 
      jeśli ktoś w nią nie kliknie, to nie zapłacimy nawet grosza za jej wyświetlenie. W tym właśnie tkwi moc reklam Google.
    </p>
    <div style="padding-top: 2.7rem;">
      <p>
        Najlepsze jednak w tym wszystkim jest to, że możesz cały ten proces oddelegować nam, dzięki czemu będziesz móc bardziej skupić się na swojej pracy oraz obsłudze nowych i 
        stale napływających klientów!
      </p>
      <p style="font-size: 21px;">
        <a href="/contact" target="_blank">
          By ułatwić sobie to wszystko skontaktuj się z nami!
        </a>
      </p>
    </div>
  </div>
</div>

@endsection