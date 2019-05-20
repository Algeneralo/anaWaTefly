@extends('website.layout')
@section('body')
    <section class="banner" id="contact-us-banner"
             style="background: url({{'/assets/img/contact-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang('general.nav.contactUs')</h4>
                <div class="banner-link">
                    <a href="/">@lang('general.nav.home')</a>
                    <a class="active" href="/volunteer">@lang('general.nav.contactUs')</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>@lang('general.contact')</h3>
                    <form action="">
                        <div class="form-group form-inline">
                            <div class="md-form col-6" style="padding-left: unset;padding-right: unset">
                                <input type="text" class="form-control white-text">
                                <label class="">@lang('general.name')</label>

                            </div>
                            <div class="md-form col-6">
                                <input type="text" class="form-control white-text">
                                <label class="">@lang('general.phone')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="email" class="form-control white-text">
                                <label class="">@lang('general.email')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">@lang('general.subject')</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <input type="text" class="form-control white-text">
                                <label class="">@lang('general.message')</label>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button class="btn" type="submit">@lang('general.send')</button>
                        </div>
                    </form>
                </div>
                <div class="fade_rule"></div>
                <div class="col-md-4 contact-details">
                    <h3 class="text-center">@lang('general.contact_info')</h3>

                    <div class="phone col-12 text-center">
                        <div class="row">
                            <div class="col-1 align-self-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="col-10">
                                <span dir="ltr">{{$config->phone}}</span>
                                <br>
                                <span dir="ltr">{{$config->telephone}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center align-self-center">
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-10">
                                iandmychild1@hotmail.com
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="row">
                            <div class="col-1 align-self-center">
                                <i class="fas fa-location-arrow"></i>
                            </div>
                            <div class="col-10" style="line-height: 2">
                                @if(App::getLocale()=="ar"){{$config->location_ar}}@else{{$config->location_en}}@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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