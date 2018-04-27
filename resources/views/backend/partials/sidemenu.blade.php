<!-- ============================================================== -->
<!-- 						Navigation Start 						-->
<!-- ============================================================== -->
<div class="main-sidebar-nav default-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">
            <ul class="metisMenu nav flex-column" id="menu">
                <div class="card-block border-bottom text-center nav-profile">
                    <img alt="profile" class="rounded-circle margin-b-10 circle-border " src="{{ url('img/user.gif') }}" width="80">
                    <p class="lead margin-b-0 toggle-none">{{ Auth::user()->fullname }}</p>
                    <p class="text-muted mv-0 toggle-none">{{ Auth::user()->role }}</p>
                </div>

                <li class="nav-heading"><span>Main</span></li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}">
                        <i class="fa fa-home"></i> <span class="toggle-none">Dashboard</span>
                    </a>
                </li>
                <li class="nav-heading"><span>Master Data</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/backend/users') }}">
                        <i class="fa fa-users"></i> <span class="toggle-none">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-envelope-o"></i> <span class="toggle-none">Pendaftar<span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                        <li class="nav-item"><a class="nav-link" href="{{ url('backend/pendaftaran/daftar') }}">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('backend/pendaftaran/tahap_seleksi') }}">Tahap Seleksi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('backend/pendaftaran/lolos') }}">Lolos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('backend/pendaftaran/tidak_lolos') }}">Tidak Lolos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/backend/file') }}">
                        <i class="fa fa-file"></i> <span class="toggle-none">File</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- 						Navigation End	 						-->
<!-- ============================================================== -->
