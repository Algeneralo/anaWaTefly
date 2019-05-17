@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/partners-banner.jpg'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">شركاؤنا</h4>
                <div class="banner-link">
                    <a href="/">الرئيسية</a>
                    <a class="active" href="/partners">شركاؤنا</a>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-12 partners-text text-center">
                    <h3>شركاؤنا</h3>
                    <p class="w-50">لقد أصبح كل عملنا ممكنا من خلال التزام وتفاني شركائنا والداعمين القيمين.

                        مؤسسة تشعر بالامتنان لشركائها ومؤيديها من مختلف المستويات التي لا نستطيع ذكرها جميعًا هنا.
                        إنهم
                        يستحقون ونحن نشارك معهم كل التقدير والتقدير الذي نحصل عليه من المجتمعات المحلية.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="partners-list">
        <div class="container">
            <div class="row">
                <div class="partners-list-items owl-carousel">
                    <div class="partners-list-item">
                        <img class="card-img-top" src="{{asset('assets/img/person.png')}}"
                             alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">يسرى العيسوي</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-join">

        <div class="container">
            <div class="row">
                <div class="message col-md-6 ">
                    <h3>شاركنا</h3>
                    <form action="">
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">الاسم</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">رقم الهاتف</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="email" class="form-control white-text">
                                <label class="">البريد الالكتروني</label>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn" type="submit">شاركنا</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="img">
            <img src="{{asset('assets/img/partners-join.png')}}">
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                rtl:@if(App::getLocale()=="en"){{'false'}} @else {{'true'}} @endif,
                margin: 70,
                autoWidth: true,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 4000,
                loop: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                        margin: 10,
                        autoWidth: false,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.partners-list-items',
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 2,
                        nav: true,
                        autoWidth: false,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.partners-list-items',
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4,
                        nav: true,
                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.partners-list-items',
                    }
                }
            });
        });

        $(".md-form input").focus(function () {
            $(this).siblings().eq(0).addClass("active");

        }).blur(function () {
            if ($(this).val().trim().length == 0) {
                $(this).siblings().eq(0).removeClass("active");
            }
        })
    </script>
@endsection