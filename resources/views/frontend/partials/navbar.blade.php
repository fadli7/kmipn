<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">KMIPN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/')}}">beranda</a></li>
        <li><a href="#">kategori lomba</a></li>
        <li><a href="#">tentang kmipn</a></li>
        <li><a href="#">informasi</a></li>
        <li><a href="#">galeri</a></li>
        <li><a href="#">jadwal</a></li>
        <li><a href="#">faq</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @guest
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('register')}}">Register</a></li>
        @else
          <li><a href="{{url('auth/logout')}}">Logout</a></li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
