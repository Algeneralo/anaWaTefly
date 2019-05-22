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
                        <a href="/" target="_blank">
                            <i class="mdi mdi-web"></i>
                            الموقع
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="/admin">
                            <i class="mdi mdi-view-dashboard"></i>
                            الاعدادات العامة
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('sliders.index')}}">
                            <i class="mdi mdi-folder-multiple-image"></i>
                            السلايدر
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('about.index')}}">
                            <i class="mdi mdi-account-circle"></i>
                            عن الجمعية
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('directors.index')}}">
                            <i class="mdi mdi-account-group"></i>
                            مجلس الادارة
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('partners.index')}}">
                            <i class="mdi mdi-account-group"></i>
                            الشركاء
                        </a>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="mdi mdi-cube-outline"></i>المشاريع</a>
                        <ul class="submenu">
                            <li><a href="{{route('doneProjects.index')}}">المشاريع المنجزة</a></li>
                            <li><a href="{{route('financeProjects.index')}}">مشاريع للتمويل</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="/admin/emails">
                            <i class="mdi mdi-email-outline"></i>
                            الطلبات والايميلات
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('programs.index')}}">
                            <i class="mdi mdi-view-dashboard"></i>
                            البرامج
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('news.index')}}">
                            <i class="mdi mdi-view-dashboard"></i>
                            الاخبار
                        </a>
                    </li>
                </ul><!-- End navigation menu -->
                <div class="clearfix"></div>
            </div><!-- end #navigation -->
        </div><!-- end container -->
    </div><!-- end navbar-custom -->
</header>