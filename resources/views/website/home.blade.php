@extends('website.layout')
@section('body')
    <section class="carousel-section">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">

            <!-- carousel content -->
            <div class="carousel-inner">

                @foreach($sliders as $slider)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img class="d-block w-100" data-animation="animated fadeInUp"
                             src="{{asset('assets/img/upload/'.$slider->image)}}" alt="Third slide">

                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated bounceInLeft">
                                @if(App::getLocale()=="ar")
                                    {{$slider->caption_ar}}
                                @else
                                    {{$slider->caption_en}}
                                @endif
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- controls -->
            <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </section>
    <section class="participate">
        <div class="container">
            <div class="participate-title text-center">
                <h2>@lang('general.home.joinUs')</h2>
                <p>نص يوضع هنا بعرفش شو لزومه</p>
            </div>
            <div class="row justify-content-center m-0">
                <div class="col-md-3 col-sm-7 col-10 box text-center">
                    <a href="#">
                        <div class="icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                 data-icon="hand-holding-seedling"
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                 class="svg-inline--fa fa-hand-holding-seedling fa-w-18 fa-5x">
                                <path fill="currentColor"
                                      d="M248.9 192H272v56c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-56h23.1C411.4 192 480 113 480 16V0h-55.1C364.9 0 313 40.1 288 98.1 263 40.1 211.1 0 151.1 0H96v16c0 97 68.6 176 152.9 176zm176-160h22.4c-6.7 71.9-58 128-120.1 128h-22.4c6.6-71.9 58-128 120.1-128zm-273.8 0c62.1 0 113.4 56.1 120.1 128h-22.4c-62.1 0-113.4-56.1-120.1-128h22.4zm407.2 301.6c-9.6-8.6-22.1-13.4-35.2-13.4-12.5 0-24.8 4.3-34.6 12.2l-61.6 49.3c-1.9 1.5-4.2 2.3-6.7 2.3h-41.6c4.6-9.6 6.5-20.7 4.8-32.3-4-27.9-29.6-47.7-57.8-47.7H181.3c-20.8 0-41 6.7-57.6 19.2L85.3 352H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h88l46.9-35.2c11.1-8.3 24.6-12.8 38.4-12.8H328c13.3 0 24 10.7 24 24s-10.7 24-24 24h-88c-8.8 0-16 7.2-16 16s7.2 16 16 16h180.2c9.7 0 19.1-3.3 26.7-9.3l61.6-49.2c4.2-3.4 9.5-5.2 14.6-5.2 5 0 9.9 1.7 13.8 5.2 10.1 9.1 9.3 24.5-.9 32.6l-100.8 80.7c-7.6 6.1-17 9.3-26.7 9.3H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h400.5c17 0 33.4-5.8 46.6-16.4L556 415c12.2-9.8 19.5-24.4 20-40s-6-30.8-17.7-41.4z"
                                      class="">

                                </path>
                            </svg>
                        </div>
                        <div class="box-title">@lang('general.home.donate')</div>
                        <div class="box-text">
                            @lang('general.home.donate_message')
                        </div>
                    </a>
                </div>
                <div class="offset-md-1 col-md-3 col-sm-7 col-10 box text-center">
                    <a href="/volunteer">
                        <div class="icon">
                            <svg id="rotate-svg" aria-hidden="true" focusable="false" data-prefix="fal"
                                 data-icon="handshake-alt" role="img"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 640 512" class="svg-inline--fa fa-handshake-alt fa-w-20 fa-2x">
                                <path fill="currentColor"
                                      d="M238.4 176.6l83.1-76.2c3-2.7 6.8-4.2 10.8-4.2h101c4.3 0 8.3 1.7 11.4 4.8l60.7 59.1H632c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H518.5l-51.2-49.9c-9.1-9.1-21.1-14.1-33.9-14.1h-101c-10.4 0-20.1 3.9-28.3 10-8.4-6.5-18.7-10.3-29.3-10.3h-69.5c-12.7 0-24.9 5.1-34 14.1L121.4 128H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h126.6l59.3-59.3c3-3 7.1-4.7 11.3-4.7h69.5c.9 2.2.3.7 1.1 2.9l-59 54.1c-28.2 25.9-29.6 69.2-4.2 96.9 14.3 15.6 58.6 39.3 96.9 4.2l22.8-20.9 125.6 101.9c6.8 5.5 7.9 15.7 2.3 22.5l-9.5 11.7c-5.4 6.6-15.4 8.1-22.5 2.3l-17.8-14.4-41.5 51c-7.5 9.3-21 10.2-29.4 3.4l-30.6-26.1-10.4 12.8c-16.7 20.5-47 23.7-66.6 7.9L142 320.1H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h121.2l81.5 78c29.8 24.1 71.8 23.4 101-.2l7.2 6.2c9.6 7.8 21.3 11.9 33.5 11.9 16 0 31.1-7 41.4-19.6l21.9-26.9c16.4 8.9 42.9 9 60-12l9.5-11.7c6.2-7.6 9.6-16.6 10.5-25.7H632c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H486.8c-2.5-3.5-5.3-6.9-8.8-9.8l-121.9-99 28.4-26.1c6.5-6 7-16.1 1-22.6s-16.1-6.9-22.6-1l-75.1 68.8c-14.4 13.1-38.6 12-51.7-2.2-13.5-14.7-12.6-37.9 2.3-51.6z"
                                      class="">

                                </path>
                            </svg>
                        </div>
                        <div class="box-title">@lang('general.home.volunteer')</div>
                        <div class="box-text">@lang('general.home.volunteer_message')</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome">
        <div class="container" style="color: white">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="my-sm-auto">@lang('general.home.welcome')</h4>
                    <p>{{$welcomeMessage}}</p>
                    <a href="/about" class="btn float-left">@lang('general.more')</a>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="{{asset('assets/img/test.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="new-title text-center col-12">
                    <h2>@lang('general.home.news')</h2>
                </div>
            </div>
            <div class="news-items owl-carousel">
                @foreach($news as $object)
                    <div class="news-item card">
                        <img class="card-img-top" src="{{asset('assets/img/upload/'.$object->image)}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$object->title}}</h5>
                            <p class="card-text">{{Str::limit(strip_tags($object->body),100)}}</p>
                            <a href="/details/news/{{$object->id}}" class="btn btn-primary">@lang('general.more')</a>
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
                loop: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 2,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.news-items',
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 3,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.news-items',
                    }
                }
            });
        });
    </script>
@endsection