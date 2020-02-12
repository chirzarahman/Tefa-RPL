<!DOCTYPE html>
<html>

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <!-- <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css"> -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet" media="screen">
</head>

<body>

  @if (session('alert'))
    <script>
      alert('Form Terkirim!');
    </script>
  @endif

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.php">TEFA RPL</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown">
            <a class="anavbar" href="#services">Platform <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
              <a href="#services" data-target="#carousel-service" data-slide-to="0">Mobile Apps</a>
              <a href="#services" data-target="#carousel-service" data-slide-to="1">Website</a>
              <a href="#services" data-target="#carousel-service" data-slide-to="2">Game</a>
            </div></li>
          <li><a href="#portfolio">Works</a></li>
          <li><a href="#form">form</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

    @yield('content')

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; RPL WEB-DEV. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
  <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('assets/js/grid.js') }}"></script>
  <script src="{{ asset('assets/js/stellar.js') }}"></script>
  <script src="{{ asset('assets/assets/js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('assets/assets/js/jquery.fancybox-media.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets/contactform/contactform.js') }}"></script>

  <!-- Template Custom Javascript File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
