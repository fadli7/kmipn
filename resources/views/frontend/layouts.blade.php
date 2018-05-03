<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('vendor/slick/slick-theme.css')}}">
    <link href="{{ url('fixed-admin/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <script src="{{url('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{url('vendor/locationpicker/locationpicker.jquery.min.js')}}" charset="utf-8"></script>

  </head>
  <body>
    @include('frontend.partials.navbar')
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
  </body>
</html>