@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog/list.css') }}">

<!-- add script -->
<script src="{{ asset('js/blog/list.js') }}"></script>

<div class="content">
    <!-- 
      Ponieważ css się nie zaczytują na produkcji...  
    <div id="parallax-blog-list" class="parallax">
      <p>
        Blog o copywritingu i marketingu treści
      </p>
    </div> -->

    <div style="
        background: url('../../img/type-machine.jpg') no-repeat center;
        background-size: cover;
        background-attachment: fixed;
        padding: 0 5vh 0 5vh;
        color: yellow;
        text-shadow: .15rem .15rem #ee27f0;
        height: 100vh;">
      <p style="font-size: 3.9rem;
        margin: 0;
        padding: 0;
        text-align: center;
        font-family: 'arial';
        position: absolute;
        top: 21%;
        left: 50%;
        transform: translateX(-50%);">
        Blog o copywritingu i marketingu treści
      </p>
    </div>
    
    <div class="content-tails">
      <h2 class="headers">Posty</h2>
      <div class="row">
        <div class="col-12 col-md-4 tail" data-src="/running-social-media-accounts">
          <img src="img/funpage_social_media.jpg">
          <p>
            Prowadzenie kont w serwisach społecznościowych
          </p>
        </div>
        <div class="col-12 col-md-4 tail" data-src="/running-social-media-ads">
          <img src="img/ads_social_media.jpg">
          <p>
            Reklamowanie w mediach społecznościowych z użyciem płatnych reklam
          </p>
        </div>
        <div class="col-12 col-md-4 tail" data-src="/running-google-ads">
          <img src="img/ads_google.jpg">
          <p>
            Reklamowanie w wyszukiwarce Google
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 tail" data-src="/why-own-marketing-agency">
          <img src="img/why_agency.jpg">
          <p>5 powodów dla których postanowiłem założyć własną agencje marketingową</p>
        </div>
        <div class="col-12 col-md-4 tail" data-src="/why-copywriting">
          <img src="img/copywriting.jpg">
          <p>5 powodów dla których postanowiłem zająć się copywritingiem</p>
        </div>
        <div class="col-12 col-md-4 tail" data-src="/what-is-copywriting">
          <img src="img/what_is_copy.jpg">
          <p>Czym jest copywriting</p>
        </div>
      </div>
    </div>
  </div>

@endsection