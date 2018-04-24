<!-- ============================================================== -->
<!-- 						Navigation Start 						-->
<!-- ============================================================== -->
<div class="main-sidebar-nav default-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">
            <ul class="metisMenu nav flex-column" id="menu">
                <div class="card-block border-bottom text-center nav-profile">
                    <img alt="profile" class="rounded-circle margin-b-10 circle-border " src="img/user.gif" width="80">
                    <p class="lead margin-b-0 toggle-none">{{ Auth::user()->name }}</p>
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
                    <a class="nav-link" href="{{ url('/users') }}">
                        <i class="fa fa-users"></i> <span class="toggle-none">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- 						Navigation End	 						-->
<!-- ============================================================== -->
