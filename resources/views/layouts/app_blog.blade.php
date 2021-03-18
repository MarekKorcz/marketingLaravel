<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mark MEDIA</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap">
    <link rel="stylesheet" href="../../css/partials/header-common.css" type="text/css">
    <link rel="stylesheet" href="../../css/general.css" type="text/css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js></script>
    <script src="../../js/partials/header-common.js"></script>
</head>
<body>

    <!--Navbar-->
    <nav>
        <div class="logo">
            <h4>
            <a href="/">
                <span style="color:white; font-weight: bold;">
                    Mark
                </span>
                <span style="color: #ffdf2b; font-weight: bold;">
                Media
                </span>
            </a>
            </h4>
        </div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">O nas</a></li>
            <!-- <li><a href="/pricing">Cennik</a></li> -->
            <li><a href="/contact">Kontakt</a></li>
            <li><a href="/blog">Blog</a></li>
            <li>
            <a id="facebook" class="nav-link" href="https://www.facebook.com/Mark-Media-927015074159735" target="_blank">
                <i class="fa fa-facebook" style="font-size: 29px;"></i>
            </a>
            </li>
            <li>
            <a id="instagram" class="nav-link" href="https://www.instagram.com/mark.media.group/" target="_blank">
                <i class="fa fa-instagram" style="font-size: 30px;"></i>
            </a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    
    @yield('content')
    
    <!--Footer-->
    <footer class="text-center">
        <div class="row">
            <div class="col-sm-12">
                <p id="copyright"></p>
            </div>
        </div>
    </footer>
</body>
</html>