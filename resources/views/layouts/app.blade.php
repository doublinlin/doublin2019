<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Doublin') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('favicon/site.webmanifest') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-4GCZDR57LE"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MBTB7CD3Z"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4GCZDR57LE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4GCZDR57LE');
    gtag('config', 'G-3MBTB7CD3Z');
    </script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <!-- loading -->
        <div class="vld-parent">
            <loading
            color="#fc0303"
            v-model:active="isLoading"
            :is-full-page="true"
            >
            </loading>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <div class="text-center me-3">
                        <b-button id="popover-target-1" variant="outline-dark">
                            {{ __('Contact') }}
                        </b-button>
                        <b-popover target="popover-target-1" triggers="hover" placement="top">
                            <i class="bi bi-telephone text-danger"></i>&nbsp;0933129409<br>
                            <i class="bi bi-envelope text-danger"></i>&nbsp;doublinlin@gmail.com
                        </b-popover>
                    </div>
                </ul>
                <a class="navbar-brand" href="{{ url('/', app()->getLocale()) }}">
                        {{ __('Doublin') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ItsMe', app()->getLocale()) }}">{{ __('ItsMe') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Works')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('works.Gallery', app()->getLocale()) }}">{{ __('Gallery')}}</a>
                                <a class="dropdown-item" href="{{ route('works.Design', app()->getLocale()) }}">{{ __('Design')}}</a>
                                <a class="dropdown-item" href="{{ route('works.UIWebDesign', app()->getLocale()) }}">{{ __('UI_Web_Design')}}</a>
                                <a class="dropdown-item" href="{{ route('works.Photo', app()->getLocale()) }}">{{ __('Photo')}}</a>
                                <a class="dropdown-item" href="{{ route('works.Video', app()->getLocale()) }}">{{ __('Video')}}</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.doublinlin.com/" target="_blank">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/doublinlin" target="_blank">Github</a>
                        </li>
                        <li class="nav-item">
                            <language-switcher
                                locale="{{ app()->getLocale() }}"
                                link-en="{{ route(Route::currentRouteName(), 'en') }}"
                                link-zh="{{ route(Route::currentRouteName(), 'zh') }}"
                            ></language-switcher>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
      <div class="copyrights">
        <div>Doublin &copy; 2019 - <?php echo date("Y") ?> All Rights Reserved</div>
        <div>Design by Doublin</div>
      </div>
    </footer>

    <!-- script -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
