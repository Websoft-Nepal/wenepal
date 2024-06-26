<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('headerlink')
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('site/images/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('site/images/logo.png') }}">
    <title>
        WeNepal
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
    <!-- ckeditor-->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

</head>

<body class="{{ $class ?? '' }}">

    @guest
        @yield('content')
    @endguest

    @auth
        @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
            <div class="min-height-300 bg-primary position-absolute w-100"></div>
        @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
            <div class="position-absolute w-100 min-height-300 top-0"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                <span class="mask bg-primary opacity-6"></span>
            </div>
        @endif
        @include('admin.layouts.navbars.auth.sidenav')
        <main class="main-content border-radius-lg">
            @yield('content')
            @include('sweetalert::alert')
        </main>
    @endauth

    <!--   Core JS Files   -->
    <script src="{{ asset("assets/js/core/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/core/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/perfect-scrollbar.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/smooth-scrollbar.min.js") }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    @stack("footerlink")
    <script>
        var detailsElements = document.querySelectorAll('.truncate-details');

        detailsElements.forEach(function(detailsElement) {
            var detailsText = detailsElement.textContent;
            var wordLimit = 20;

            if (detailsText.split(' ').length > wordLimit) {
                var words = detailsText.split(' ').slice(0, wordLimit).join(' ');
                detailsElement.textContent = words + '...';
            }
        });
        </script>
    <script>
        var detailsElements = document.querySelectorAll('.truncate-title');

        detailsElements.forEach(function(detailsElement) {
            var detailsText = detailsElement.textContent;
            var wordLimit = 3;

            if (detailsText.split(' ').length > wordLimit) {
                var words = detailsText.split(' ').slice(0, wordLimit).join(' ');
                detailsElement.textContent = words + '...';
            }
        });
        </script>
    <script>
        const photoInput = document.getElementById('photoInput');
        const photoPreview = document.getElementById('photoPreview');

        photoInput.addEventListener('change', () => {
            const file = photoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    photoPreview.src = reader.result;
                }
                reader.readAsDataURL(file);
            }
        });
        </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.js') }}"></script>
    @stack('js')
</body>

</html>
