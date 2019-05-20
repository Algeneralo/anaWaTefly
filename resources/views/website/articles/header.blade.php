<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-custom-color">
        <a class="navbar-brand mr-0 mr-md-2" href="#">
            <img class="rounded-circle" src="{{asset("assets/img/2000-1.jpg")}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Request::path()=="/"){{'active'}} @endif">
                    <a class="nav-link" href="/">@lang('general.nav.home') <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(Request::path()=="about"){{'active'}} @endif">
                    <a class="nav-link" href="/about">@lang('general.nav.about') </a>
                </li>
                <li class="nav-item @if(Request::path()=="projects"){{'active'}} @endif">
                    <a class="nav-link" href="/projects">@lang('general.nav.projects') </a>
                </li>
                <li class="nav-item @if(Request::path()=="programs"){{'active'}} @endif">
                    <a class="nav-link" href="/programs">@lang('general.nav.programs') </a>
                </li>
                <li class="nav-item @if(Request::path()=="partners"){{'active'}} @endif">
                    <a class="nav-link" href="/partners">@lang('general.nav.partners') </a>
                </li>
                <li class="nav-item @if(Request::path()=="contact-us"){{'active'}} @endif">
                    <a class="nav-link" href="/contact-us">@lang('general.nav.contactUs')</a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown float-left mr-3"
                    dir=@if(App::getLocale()=="en"){{'rlt'}}@else{{'ltr'}}@endif>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: none;">
                        @if(App::getLocale()=="en")  اللغة@else Language @endif
                    </a>
                    <div dir="rtl" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/lang/en')}}">
                            English
                            <img style="width: 10%;" src="{{asset('assets/img/united-kingdom.png')}}">
                        </a>
                        <a class="dropdown-item" href="/lang/ar">
                            العربية
                            <img style="width: 10%;" src="{{asset('assets/img/Saudi-Arabia-Flag.png')}}">
                        </a>
                    </div>
                </li>

            </ul>

        </div>
    </nav>
</header>