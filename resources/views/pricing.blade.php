@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/pricing.css') }}">

<!-- add scripts -->
<script src="{{ asset('js/pricing.js') }}"></script>

<div class="content">
    <div class="text-center" style="padding-bottom: 3vh;">
    <h1>
        Cennik 
    </h1>
    <h4>
        (kliknij by zobaczyć poszczególne warianty)
    </h4>
    </div>
    <div class="list-group">
    <a class="list-group-item list-group-item-action fb social">
        <div class="d-flex w-100 justify-content-between">
            <h4>Prowadzenie mediów społecznościowych na Facebook</h4>
        </div>
        <p>Prowadzenie mediów społecznościowych, regularne posty, kliknij by dowiedzieć się więcej..</p>
    </a>
    <a class="list-group-item list-group-item-action fb ads">
        <div class="d-flex w-100 justify-content-between">
            <h4>Prowadzenie płatnych kampani reklamowych na Facebook Ads</h4>
        </div>        
        <p>Tworzenie i publikowanie płatnych kampanii reklamowych na Facebook Ads, kliknij by dowiedzieć się więcej..</p>
    </a>
    <a class="list-group-item list-group-item-action insta social">
        <div class="d-flex w-100 justify-content-between">
            <h4>Prowadzenie mediów społecznościowych na Instagram</h4>
        </div>
        <p>Prowadzenie mediów społecznościowych, regularne posty, kliknij by dowiedzieć się więcej..</p>
    </a>
    <a class="list-group-item list-group-item-action insta ads">
        <div class="d-flex w-100 justify-content-between">
            <h4>Prowadzenie płatnych kampani reklamowych na Instagram Ads</h4>
        </div>        
        <p>Tworzenie i publikowanie płatnych kampanii reklamowych na Instagram Ads, kliknij by dowiedzieć się więcej..</p>
    </a>
    </div>

    <div id="scrollAim"></div>

    <div id="pricing"></div>
    
</div>

@endsection