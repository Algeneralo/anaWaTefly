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
                    <a class="nav-link" href="/">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(Request::path()=="about"){{'active'}} @endif">
                    <a class="nav-link" href="/about">عن الجمعية </a>
                </li>
                <li class="nav-item @if(Request::path()=="projects"){{'active'}} @endif">
                    <a class="nav-link" href="/projects">المشاريع</a>
                </li>
                <li class="nav-item @if(Request::path()=="programs"){{'active'}} @endif">
                    <a class="nav-link" href="/programs">البرامج</a>
                </li>
                <li class="nav-item @if(Request::path()=="partners"){{'active'}} @endif">
                    <a class="nav-link" href="/partners">شركاؤنا</a>
                </li>
                <li class="nav-item @if(Request::path()=="contact-us"){{'active'}} @endif">
                    <a class="nav-link" href="/contact-us">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </nav>
</header>