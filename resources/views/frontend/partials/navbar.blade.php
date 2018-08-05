{{--<section class="hero is-transparent is-fullwidth is-fullheight awalan">--}}
    <div class="hero-head">
        <nav class="navbar is-fresh is-transparent " role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/ristekdikti.png') }}" alt="Logo" width="60">
                    </a>
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/pens.png') }}" alt="Logo" width="60">
                    </a>
                    <a class="navbar-item" href="/">
                        <img src="{{ url('img/logo/logoHD.png') }}" alt="Logo" width="60">
                    </a>

                    <span class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarExampleTransparentExample">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div  id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a id="beranda" href="/" class="navbar-item has-text-weight-bold has-text-light beranda" style="text-decoration-color: #000000">BERANDA</a>
                        <a id="tentang" href="{{ url('tentang') }}" class="navbar-item has-text-weight-bold has-text-light" style="text-decoration-color: #000000">TENTANG</a>
                        <a id="lomba" href="{{ url('lomba') }}" class="navbar-item has-text-weight-bold has-text-light" style="text-decoration-color: #000000">LOMBA</a>
                        <a id="info" href="{{ url('info') }}" class="navbar-item has-text-weight-bold has-text-light" style="text-decoration-color: #000000">INFO</a>
                        @if(!auth()->user())
                        <a href="{{ url('login') }}" class="navbar-item has-text-weight-bold has-text-light" >
                            <span id="login" class="button is-danger is-rounded is-inverted is-outlined">
                                LOGIN
                            </span>
                        </a>
                        @endif
                        @if(auth()->user())
                            <a href="{{ url('profile/dashboard') }}" class="navbar-item has-text-weight-bold has-text-light" style="text-decoration-color: #000000">DASHBOARD</a>
                            <a href="{{ url('auth/logout') }}" class="navbar-item has-text-weight-bold has-text-light">
                            <span class="button is-danger is-rounded is-inverted is-outlined">
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