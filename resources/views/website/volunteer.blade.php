@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/volunteer-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">تطوع الان</h4>
                <div class="banner-link">
                    <a href="/">الرئيسية</a>
                    <a class="active" href="/volunteer">تطوع الان</a>
                </div>
            </div>
        </div>
    </section>
    <section class="volunteer">

        <div class="container">
            <div class="row">
                <div class="message col-md-6 offset-md-6">
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
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">العنوان</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">المدة بالشهور</label>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn" type="submit">تطوع</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="img">
            <img src="{{asset('assets/img/volunteer-side-image.png')}}">
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(".md-form input").focus(function () {
            $(this).siblings().eq(0).addClass("active");

        }).blur(function () {
            if ($(this).val().trim().length == 0) {
                $(this).siblings().eq(0).removeClass("active");
            }
        })
    </script>
@endsection