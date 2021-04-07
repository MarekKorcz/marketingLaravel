@extends('layouts.app_blog')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog/articles.css') }}">

<!-- add script -->
<script src="{{ asset('js/blog/articles.js') }}"></script>

<div class="content">
  <div id="parallax-blog-article-what-is-copywriting" class="parallax"></div>
  <div class="article-title">
    <p style="font-size: 6vw;">Czym jest copywriting</p>
  </div>
  <div class="article">
    <p class="bolt">
      Nie, nie ma to nic wspólnego z prawami autorskimi (copyrights..). 
    </p>
    <p>
      Copywriting to proces pisania perswazyjnych materiałów marketingowych i promocyjnych, które motywują ludzi do podjęcia jakiejś formy działania, np. dokonania zakupu, kliknięcia w link, przekazania darowizny czy umówienia się na konsultację.
    </p>
    <p>
      Wbrew temu co można pomyśleć, copywriting to nie tylko teksty sprzedażowe. W erze internetu, każdy filmik czy nagranie audio zawierające odpowiednio przygotowany przekaz reklamowy, można również uznać jako copywriterstwo. 
    </p>
    <p>
      Generalnie, główne założenie polega na tym by profesjonalnie przygotowana informacja sprzedażowa, nacechowana persfazją i opisana językiem korzyści, obojętnie w jakiej postaci, doprowadzała do sprzedaży bez naszego udziału.
    </p>
  </div>
</div>

@endsection