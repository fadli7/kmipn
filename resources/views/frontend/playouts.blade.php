<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{url('css/custombox.min.css')}}">
    <link href="{{ url('fixed-admin/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <script src="{{url('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/jquery.smooth-scroll.js')}}" charset="utf-8"></script>
    <script src="{{url('js/custombox.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/locationpicker/locationpicker.jquery.min.js')}}" charset="utf-8"></script>

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    @include('frontend.partials.pnavbar')
    @yield('content')
    @include('frontend.partials.footer')
    <script src="{{url('vendor/slick/slick.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>
    <script src="{{ url('fixed-admin/lib/toast/jquery.toast.min.js') }}"></script>

    @if (session('message'))
    <script type="text/javascript">
      $(document).ready(function() {
          $.toast({
              text: "<strong>{{ session('message')['title'] }}</strong> {{ session('message')['msg'] }}",
              position: 'top-right',
              showHideTransition: 'slide',
          })
      });
    </script>
    @endif
    <script type="text/javascript" async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWk5NCWnufYNz0XE0uULJ2iphnWY6YESI&callback=initMap'></script>
    <script src="{{url('js/custombox.legacy.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/custom.js')}}" charset="utf-8"></script>
  </body>
</html>
