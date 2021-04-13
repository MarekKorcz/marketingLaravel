@extends('layouts.app')

@section('content')

<!-- add styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

<div class="contact-section">
    <div class="row">
      <div class="col-12">
          <div class="contact-section-header">
            <figure class="quote">
                <blockquote>
                    "Rzeczy mogą przyjść do tych, którzy czekają, lecz będą to tylko rzeczy pozostawione przez tych, którzy postanowili być kowalami własnego losu."
                </blockquote>
                <figcaption>
                    &mdash; Abraham Lincoln 
                </figcaption>
            </figure>
            <p>
                Pomyśl o swojej konkurencji i o tym co się z nią stanie kiedy żyły Twójego biznesu wypełnią się życiodajnymi zleceniami od 
                <strong>
                    Twoich
                </strong>
                nowych klientów! 
            </p>
            <p style="font-size: 1.8rem;">Następnie skontaktuj się z nami</p>
            <p style="font-size: 1.5rem;">(+48) 602 342 396</p>
            <p style="font-size: 1.2rem;">Lub napisz na:</p>
            <hr>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2">
                    <p>
                        <a id="instagram" class="nav-link" href="https://www.facebook.com/Mark-Media-927015074159735" target="_blank">
                            <i class="fa fa-facebook" style="font-size: 51px;"></i>
                        </a>
                    </p>
                </div>
                <div class="col-2">
                    <p>
                        <a id="instagram" class="nav-link" href="https://www.instagram.com/mark.media.group/" target="_blank">
                            <i class="fa fa-instagram" style="font-size: 51px; color: orange;"></i>
                        </a>
                    </p>
                </div>
                <div class="col-4"></div>
              </div>
              <hr>
          </div>
          <!-- <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="contact-section-form">
                    <form id="contact-message" action="/contact-message" method="post" >

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Imię" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="topic" placeholder="Temat" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="description" placeholder="Tutaj wpisz swoją wiadomość..." autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" form="contact-message" value="submit">Wyślij</button>
                            </div>
                        </div>

                    </form>
                    
                    <div id="confirm"></div>
                </div>
            </div>
            <div class="col-1"></div>
          </div> -->
          </div>
        </div>
      </div>
    </div>

@endsection