@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/blog/list.css') }}">

<!-- add script -->
<script src="{{ asset('js/blog/list.js') }}"></script>

<div class="content">
    <div id="parallax-blog-list" class="parallax">
      <div class="center-positioning">
        <div class="parallax-text">
          <span>
            Blog o copywritingu i marketingu treści
          </span>
          <p>
            Dowiedz się z niego czegoś o promocji w sieci
          </p>
        </div>
      </div>
    </div>
    
    <div class="content-tails">
      <h2 class="headers">Posty</h2>
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