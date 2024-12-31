<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="robots" content="index, follow" />

        @stack('meta-seo')
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
        @stack('css')
    </head>
    <body>


        <div class="min-vh-100 d-flex flex-column justify-content-between">
            @include('front.layout.navbar')
            <!-- Page header with logo and tagline-->
            <header class="py-5 bg-dark">
                <div class="container">
                    <div class="text-center my-5" style="background-image: url('{{ asset('mlwp.jpeg') }}'); background-size: cover; background-position: center; color:antiquewhite">
                        <h1>Selamat datang di WinniEsport</h1>
                        <p>Website Portal Berita seputar MLBB</p>
                    </div>
                </div>
            </header>
         <!-- Content Section with dynamic background -->
    <div class="@yield('content-class', 'bg-dark')"> <!-- Default to bg-light if no content-class is provided -->
        @yield('content')
    </div>

             <!-- Footer-->
             <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy;  {{ $config['footer'] }} {{ date('Y')}}</p></div>
            </footer>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/scripts.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @stack('js')
    </body>
</html>
