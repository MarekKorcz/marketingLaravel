@extends('layouts.app')

@section('content')

<div class="container" style="padding: 6rem 3rem 0 3rem;">
  <h1 class="text-center">
    <span>Zespół</span>
  </h1>
  <div class="row">
      <div class="col-sm-6" style="padding: 1rem 2rem 2rem 2rem;">
        <img src="img/marek.jpg" width="100%">
      </div>
      <div class="col-sm-6" style="padding: 4.2rem 2rem 0 2rem;">
          <h3>Marek Korcz</h3>
          <p>
            Założyciel MarkMedia. Marketingowiec oraz programista. Od lat tworzy treści reklamowe 
            oraz leje sprzedażowe dla firm.
          </p>
          <p>
            Stale poszerza swoją więdzę z zakresu copywritingu, nowinek związanych z mediami społecznościowymi,
            algorytmami stojącymi za ich działaniem oraz pozycjonowaniem stron i tematyką związaną z dziłaniem 
            wyszukiwarki Google.
          </p>
      </div>
  </div>
  <div class="row">
    <div class="col-sm-6" style="padding: 4.2rem 2rem 0 2rem;">
      <h3>Patrycja Dolata</h3>
      <p>
        Ekspert w dziedzinie tworzenia treści (content'u) w mediach społecznościowych. Od 10 lat śledzi trendy związane z prowadzeniem kont
        w serwisach społecznościowych analaizując przy tym nie jedną branżę.
      </p>
      <p>
        Wszystko to sprawia, że łączy ona w sobie wielką wiedzę, doświadczenie oraz niespotykaną powszechnie intuicję. 
        Nie raz udowaniała, że potrafi stworzyć coś z niczego.
      </p>
    </div>
    <div class="col-sm-6" style="padding: 1rem 2rem 2rem 2rem;">
      <img src="img/patrycja.jpg" width="100%">
    </div>
  </div>
  <div class="text-center" style="padding: 3vw 6vw 6vw 6vw; font-size: 1.5rem;">
    Teraz, kiedy już się trochę poznaliśmy, pozostało się z nami 
    <a href="/contact">
      skontaktować
    </a>
  </div>
</div>

@endsection