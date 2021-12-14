<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    {{-- My Style --}}
    <link rel="stylesheet" type="text/css" href="css/style.css">

    {{-- aos css --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- logo --}}
    <link href="img/logo.png" rel="icon">


    <title>San Project | {{ $title }}</title>
  </head>
  <body>

    <div class="preloader"></div>

    @include('partials.navbar')
    
    <div class="container">
      @yield('container')
    </div>

    @include('partials.footer')
    
    {{-- js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    {{-- js navbar transisi --}}
    <script src="js/navbar.js"></script>

    {{-- js about transisi --}}
    <script src="js/jumbotron.js"></script>

    {{-- js AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/aos.js"></script>

    {{-- js Movie --}}
    <script src="js/script.js"></script>

  </body>
</html>