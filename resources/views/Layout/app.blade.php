<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title>Home - Interior Designer</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{asset('assets/imgs/logo/favicon.png')}}">


  <!-- All CSS files -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/progressbar.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/basictable.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
  <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<body class="font-heading-glorifydemo light">

  @include('Layout.preloader')
  <div class="cursor1"></div>
  @include('Layout.scrollTop')
  @include('Layout.offcanves')

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">
        <div class="overlay-switcher-close"></div>
        @include('Layout.header')
        <main>
          @yield('content')
        </main>
        @include('Layout.footer')
      </div>
    </div>
  </div>

  <!-- All JS files -->
  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/counter.js')}}"></script>
  <script src="{{asset('assets/js/typed.js')}}"></script>
  <script src="{{asset('assets/js/mixitup.min.js')}}"></script>
  <script src="{{asset('assets/js/progressbar.js')}}"></script>
  <script src="{{asset('assets/js/gsap.min.js')}}"></script>
  <script src="{{asset('assets/js/ScrollSmoother.min.js')}}"></script>
  <script src="{{asset('assets/js/ScrollToPlugin.min.js')}}"></script>
  <script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('assets/js/SplitText.min.js')}}"></script>
  <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/beforeafter.jquery-1.0.0.min.js')}}"></script>
  <script src="{{asset('assets/js/basictable.min.js')}}"></script>
  <script src="{{asset('assets/js/backToTop.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/error-handling.js')}}"></script>
  <script src="{{asset('assets/js/offcanvas.js')}}"></script>
  <script src="{{asset('assets/js/wc-cursor.js')}}"></script>
</body>
</html>