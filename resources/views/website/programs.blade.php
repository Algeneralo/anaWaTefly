@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/programs-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang('general.nav.programs')</h4>
                <div class="banner-link">
                    <a href="/">@lang('general.nav.home')</a>
                    <a class="active" href="/projects">@lang('general.nav.programs')</a>
                </div>
            </div>
        </div>
    </section>
    <section class="programs">
        <div class="container">
            <div class="row">
                @foreach($programs as $program)
                    <div class="programs-item col-12">
                        <div class="programs-text float-left">
                            <h3>{{$program->title}}</h3>
                            <p>
                                {{Str::limit(strip_tags($program->body),300)}}
                            </p>
                            <a class="float-right" href="/details/programs/{{$program->id}}">المزيد</a>
                        </div>
                        <img src="{{asset('assets/img/upload/'.$program->image)}}"
                             class="float-right img-thumbnail w-50">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection