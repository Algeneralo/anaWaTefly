@extends('website.layout')
@section('body')

    <section class="banner" style="background: url({{'/assets/img/about-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang('general.nav.about')</h4>
                <div class="banner-link">
                    <a href="/">@lang('general.nav.home')</a>
                    <a class="active" href="#">@lang('general.nav.about')</a>
                    {{--<a href="/">Home</a>--}}
                    {{--<a class="active" href="#">about</a>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="history">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('assets/img/head-message-image.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-6 align-self-center">
                    <p>
                        {{$about->info}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="vision flex-box">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                 data-icon="hands-heart" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                 class="svg-inline--fa fa-hands-heart fa-w-20 fa-7x">
                                <path fill="currentColor"
                                      d="M436 17.6C421.6 5.1
                                      405.4 0 389.6 0 366.8 0 345 10.7 331 25.3L320 37l-11.1-11.6C295.2 11
                                      273.3 0 250.2 0c-15.7 0-31.8 5.1-46.3 17.6-35.3 30.6-37.2 85.6-5.6
                                      118.7l108.9 114.1c7 7.4 18.4 7.4 25.5 0l108.9-114.1c31.6-33.1
                                      29.8-88.1-5.6-118.7zm-17 96.5l-99 103.8-99-103.8c-16.7-17.5-20.4-51.6
                                      3.4-72.1 8.2-7.1 17.3-9.9 26.3-9.9 13.9 0 27.3 6.9 35.6 15.6L320
                                      82.9l33.7-35.3C361.9 39 375.4 32 389.3 32c8.9 0 18.1 2.8 26.2 9.9 23.9
                                      20.7 20.2 54.6 3.5 72.2zM220 248.8c-14-19.2-49.1-31.4-74.5-3.9-15.6 16.8-15.9
                                      42.8-2.5 61.3l28.6 39.3c6.5 8.9-6.5 19.1-13.6 10.7l-62-73.3V145.8c0-26-21.2-49.3-47.2-49.7C21.9
                                      95.6 0 117.2 0 144v170.4c0 10.9 3.7 21.5 10.5 30l107 133.7c5.4 6.8 8.9 17.5 10.1
                                      27 .5 4 4 6.9 8 6.9h16c4.8 0 8.5-3.9 8-8.7-1.6-16-7.5-33.3-17.1-45.2l-107-133.7c-2.3-2.8-3.5-6.4-3.5-10V144c0-21
                                      32-21.6 32 .7v149.7l64.6 77.5c36.9 44.2 96.8-2.7 70.8-42.4-.2-.3-.4-.5-.5-.8l-30.6-42.2c-4.7-6.5-4.2-16.7
                                      3.5-22.3 7-5.1 17.1-3.8 22.4 3.5l42.4 58.4c12.7 16.9 19.5 37.4 19.5
                                      58v120c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-120c0-27.7-9-54.6-25.6-76.8L220 248.8zM640
                                      144c0-26.8-21.9-48.4-48.8-48-26 .4-47.2 23.7-47.2 49.7v137.1l-62 73.3c-7.1 8.4-20.1-1.7-13.6-10.7l28.6-39.3c13.4-18.5
                                      13.1-44.6-2.5-61.3-25.5-27.4-60.6-15.3-74.5 3.9l-42.4 58.4C361 329.3 352 356.3 352 384v120c0
                                      4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V384c0-20.6 6.8-41.1 19.5-58l42.4-58.4c5.3-7.3 15.3-8.7
                                      22.4-3.5 7.8 5.6 8.3 15.8 3.5 22.3l-30.6 42.2c-.2.3-.4.5-.5.8-26.1 39.7 33.9 86.7
                                      70.8 42.4l64.6-77.5V144.6c0-22.3 32-21.7 32-.7v170.4c0 3.6-1.2 7.2-3.5 10L497.6
                                      458c-9.5 11.9-15.5 29.2-17.1 45.2-.5 4.8 3.2 8.7 8 8.7h16c4 0 7.5-2.9 8-6.9 1.2-9.6 4.6-20.2
                                      10.1-27l107-133.7c6.8-8.5 10.5-19.1 10.5-30L640 144z"
                                      class="float-right">

                                </path>
                            </svg>
                            <h3 class="float-left">@lang('general.about.vision')</h3>
                            <div class="clearfix"></div>
                            <p>{{$about->vision}} </p>
                        </div>
                        <div class="goals-message flex-box">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="users"
                                 role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                 class="svg-inline--fa fa-users fa-w-20 fa-7x">
                                <path fill="currentColor"
                                      d="M544 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80
                                      80 80zm0-128c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48
                                       48-48zM320 256c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208
                                       144s50.1 112 112 112zm0-192c44.1 0 80 35.9 80 80s-35.9 80-80 80-80-35.9-80-80
                                       35.9-80 80-80zm244 192h-40c-15.2 0-29.3 4.8-41.1 12.9 9.4 6.4 17.9 13.9 25.4
                                       22.4 4.9-2.1 10.2-3.3 15.7-3.3h40c24.2 0 44 21.5 44 48 0 8.8 7.2 16 16 16s16-7.2
                                       16-16c0-44.1-34.1-80-76-80zM96 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80
                                       35.8-80 80 35.8 80 80 80zm0-128c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48
                                       21.5-48 48-48zm304.1 180c-33.4 0-41.7 12-80.1 12-38.4 0-46.7-12-80.1-12-36.3 0-71.6
                                       16.2-92.3 46.9-12.4 18.4-19.6 40.5-19.6 64.3V432c0 26.5 21.5 48 48 48h288c26.5
                                       0 48-21.5 48-48v-44.8c0-23.8-7.2-45.9-19.6-64.3-20.7-30.7-56-46.9-92.3-46.9zM480
                                       432c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16v-44.8c0-16.6 4.9-32.7 14.1-46.4
                                       13.8-20.5 38.4-32.8 65.7-32.8 27.4 0 37.2 12 80.2 12s52.8-12 80.1-12c27.3
                                       0 51.9 12.3 65.7 32.8 9.2 13.7 14.1 29.8 14.1 46.4V432zM157.1
                                       268.9c-11.9-8.1-26-12.9-41.1-12.9H76c-41.9 0-76 35.9-76 80 0 8.8
                                       7.2 16 16 16s16-7.2 16-16c0-26.5 19.8-48 44-48h40c5.5 0 10.8 1.2 15.7
                                       3.3 7.5-8.5 16.1-16 25.4-22.4z"
                                      class="">
                                </path>
                            </svg>
                            <h3 class="float-left">@lang('general.about.message')</h3>
                            <div class="clearfix"></div>
                            <p>{{$about->message}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="head-message">
        <div class="container">
            <div class="row">
                <div class="message col-md-6">
                    <h3>@lang('general.about.head_message_title')</h3>
                    <p>{{$about->head_message}}</p>
                    <div class="media align-items-center">
                        <div class="head-name">
                            <h4>{{$about->head_name}}</h4>
                            <p>@lang('general.about.directors_head')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img">
            <img src="{{asset('assets/img/head-message-image.jpg')}}">
        </div>
    </section>
    <section class="meet-team">
        <div class="container">
            <div class="row">
                <div class="meet-team-title text-center col-12">
                    <h2>@lang('general.about.directors')</h2>
                </div>
            </div>
            <div class="meet-team-items owl-carousel">
                @foreach($directors as $director)
                    <div class="meet-team-item ">
                        <img class="card-img rounded-circle" src="{{asset('assets/img/upload/'.$director->image)}}"
                             alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">@if(App::getLocale()=="ar"){{$director->name_ar}}@else{{$director->name_en}}@endif</h4>
                            <p class="card-text">@if(\App::getLocale()=="ar"){{$director->position_ar}}@else{{$director->position_en}}@endif</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                rtl:@if(App::getLocale()=="en"){{'false'}} @else {{'true'}} @endif,
                margin: 15,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 4000,
                loop: false,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 2,
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 3,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.meet-team-items',
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.meet-team-items',
                    }
                }
            });
        });
    </script>
@endsection