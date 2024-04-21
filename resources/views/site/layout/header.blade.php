<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('site/images/logo.png') }}" type="image/png">
    <title>WeNepal</title>
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/glide/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/glide/glide.theme.min.css') }}">
</head>

<body>
    <!-- ======================header started====================== -->
    <header>
        <div class="my-nav my-0">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="logo">
                            <img class="" src="{{ asset('site/images/logo.png') }}">
                            <div class="logo-text">
                                <div style="font-weight: bold;">
                                    Wellness & Ecogaurd Nepal
                                </div>
                                <div class="text-center" style="font-size: 14px;">
                                    Live a life in Balance With Nature
                                </div>
                            </div>
                        </div>
                        <div class="menu-toggle">
                            <div class="menu-hamburger"></div>
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('displayIndex') }}">Home</a></li>
                                    <li><a href="{{ route('displayAbout') }}">About Us</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Our Areas
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('displayService') }}">Services</a>
                                            <a class="dropdown-item" href="{{ route('displayCause') }}">Recent
                                                Causes</a>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('displayBlog') }}">News</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Media
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('displayGallery') }}">Galary</a>
                                            <a class="dropdown-item" href="{{ route('displayTerms') }}">Terms &
                                                Condition</a>
                                            <a class="dropdown-item" href="{{ route('displayPolicy') }}">Privacy
                                                Policy</a>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('displayContact') }}">Contact Us</a></li>
                                    {{-- <li><a href="{{ route("displayPolicy") }}">Privacy Policy</a></li>
                  <li><a href="{{ route("displayTerms") }}">Terms And Condition</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======================header ended====================== -->
