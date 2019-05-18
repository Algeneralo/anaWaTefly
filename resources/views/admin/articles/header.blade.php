<header id="topnav">
    <nav class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <span class="mr-1">
                            {{Auth::user()->name}}
                            <i class="mdi mdi-chevron-down"> </i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" style="cursor: pointer"
                                    class="dropdown-item notify-item">
                                <span>Logout</span>
                                <i class="dripicons-power"></i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav><!-- end topbar-main -->
    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation"><!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="index.html">
                            <i class="mdi mdi-view-dashboard"></i>Dashboard
                        </a>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="mdi mdi-cube-outline"></i>Components</a>
                        <ul class="submenu">
                            <li><a href="calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                </ul><!-- End navigation menu -->
                <div class="clearfix"></div>
            </div><!-- end #navigation -->
        </div><!-- end container -->
    </div><!-- end navbar-custom -->
</header>