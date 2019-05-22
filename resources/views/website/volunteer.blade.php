@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/volunteer-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang('general.home.volunteer')</h4>
                <div class="banner-link">
                    <a href="/">@lang('general.nav.contactUs')</a>
                    <a class="active" href="/volunteer">@lang('general.home.volunteer')</a>
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
                                <input name="name" required type="text" class="form-control white-text">
                                <label class="">@lang('general.name')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input name="phone" required type="text" class="form-control white-text">
                                <label class="">@lang('general.phone')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input name="email" required type="email" class="form-control white-text">
                                <label class="">@lang('general.email')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input name="address" required type="text" class="form-control white-text">
                                <label class="">@lang('general.address')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input name="duration" required type="text" class="form-control white-text">
                                <label class="">@lang('general.duration')</label>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn" type="submit">@lang('general.volunteer')</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="img">
            <img src="{{asset('assets/img/volunteer-side-image-'.App::getLocale().".png")}}">
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
    @if(session()->has('success'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function () {
                swal({
                    title: "{{session('success')}}",
                    icon: "success",
                    button: "@lang('general.ok')",
                });
            })
        </script>
    @endif
@endsection