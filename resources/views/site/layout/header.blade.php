
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset("site/images/logo.png") }}" type="image/png">
    <title>Charity</title>
    <link rel="stylesheet" href="{{ asset("site/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/style.css") }}" />
</head>

<body>
  <!-- ======================header started====================== -->
  <header>
    <div class="my-nav">
      <div class="container">
        <div class="row">
          <div class="nav-items">
            <div class="logo">
              <img class="" src="{{ asset("site/images/logo.png") }}">
              <div class="logo-text">
                <div style="font-weight: bold;">
                    Wellness & Ecogaurd Nepal
                </div>
                <div style="font-size: 16px;">
                    Advoacating for a better tomorrow
                </div>
              </div>
            </div>
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
                  <li><a href="{{ route("displayIndex") }}">Home</a></li>
                  <li><a href="{{ route("displayAbout") }}">About Us</a></li>
                  <li><a href="{{ route("displayService") }}">Services</a></li>
                  <li><a href="{{ route("displayBlog") }}">Blog</a></li>
                  <li><a href="{{ route("displayContact") }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <!-- ======================header ended====================== -->
