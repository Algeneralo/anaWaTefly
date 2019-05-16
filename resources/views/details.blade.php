@extends('layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/details-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">المزيد</h4>
                <div class="banner-link">
                    <a href="/">الرئيسية</a>
                    <a class="active" href="#">الاخبار</a>
                </div>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <figure>
                        <div class="image">
                            <img src="{{asset('assets/img/test.jpg')}}">
                        </div>
                        <figcaption>
                            <h4>العنوان يوضغ هنا</h4>
                            <div class="date">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                Aug 3, 2018
                            </div>
                            <p>adssssssssss dsa sadasd asd sad</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 sidebar">
                    <h4>مواضيع اخرى</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">اسم الموضوع </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
