{{--<section class="hero is-transparent is-fullwidth is-fullheight awalan">--}}
    <div class="hero-head has-navbar-fixed-top">
        <nav class="navbar is-fresh is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/ristekdikti.png') }}" alt="Logo" width="100" height="300">
                    </a>
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/logoHD.png') }}" alt="Logo" width="100" height="300">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div  id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="/" class="navbar-item has-text-weight-bold has-text-light">BERANDA</a>
                        <a href="{{ url('tentang') }}" class="navbar-item has-text-weight-bold has-text-light">TENTANG</a>
                        <a href="{{ url('lomba') }}" class="navbar-item has-text-weight-bold has-text-light">LOMBA</a>
                        <a href="{{ url('info') }}" class="navbar-item has-text-weight-bold has-text-light">INFO</a>
                        @if(!auth()->user())
                        <a href="{{ url('login') }}" class="navbar-item has-text-weight-bold has-text-light">
                            <span class="button is-danger">
                                LOGIN
                            </span>
                        </a>
                        @endif
                        @if(auth()->user())
                            <a href="{{ url('profile/dashboard') }}" class="navbar-item has-text-weight-bold has-text-light">DASHBOARD</a>
                            <a href="{{ url('logout') }}" class="navbar-item has-text-weight-bold has-text-light">
                            <span class="button is-danger">
                                LOGOUT
                            </span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
{{--</section>--}}