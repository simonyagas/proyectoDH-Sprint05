<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cuerdas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
          <!-- Codigo de fuentes -->
          <!-- Codigo de fontawesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <!-- Codigo de fontawesome -->
          <!-- Codigo ionicons -->
          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <!-- Codigo ionicons -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link href="{{ asset('css/user.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2">
                    <!-- Links -->
                  </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-4">
                     <img src="./img/logo.png" class="w-50 logo-footer" >
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      @guest


                        <!-- Authentication Links -->
                          <li class="nav-item">
                              <a class="nav-link " href="/">{{ __('Home') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/productos">{{ __('Productos') }}</a>
                          </li><li class="nav-item">
                          <li class="nav-item">
                              <a class="nav-link" href="/faq">{{ __('FAQ') }}</a>
                          </li><li class="nav-item">
                              <a class="nav-link" href="/contacto">{{ __('Contacto') }}</a>
                          </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingreso') }}</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                        @endguest
                        @auth
                          <li class="nav-item">
                              <a class="nav-link " href="/">{{ __('Home') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="/productos">{{ __('Productos') }}</a>
                          </li><li class="nav-item">
                          <li class="nav-item">
                              <a class="nav-link" href="/faq">{{ __('FAQ') }}</a>
                          </li><li class="nav-item">
                              <a class="nav-link" href="/contacto">{{ __('Contacto') }}</a>
                          </li>

                                <li class="nav-item text-danger">
                                    <a class="nav-link text-danger" href="/products">{{ __('CRUD') }}</a>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                    <li class="nav-item">
                                       <a class="nav-link" href="/carrito"><ion-icon class="ion-icon"name="cart"></ion-icon></a>

                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endauth

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="footer" class="page-footer font-small">
      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5 ">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column1 -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <img src="./img/logo.png" class="w-50 logo-footer" >
            </div>
          <!-- Grid column1 -->
          <!-- Grid column2 -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">Cuerdas</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Somos una empresa con innovación, dedicación y perseverancia.
              Utilizamos productos 100% nacionales de alta calidad para asegurar
              la excelencia de nuestros productos.</p>
          </div>
          <!-- Grid column2 -->
          <!-- Grid column3 -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contacto</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fas fa-envelope mr-3"></i> cuerdas.ba@gmail.com</p>
            <p>
                <i class="fab fa-instagram" aria-hidden="true"></i>
              <a href="https://www.instagram.com/cuerdas.ba/">    @cuerdas.ba</a></p>
          </div>
          <!-- Grid column3 -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> cuerdas.com</a>
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>
