@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/programs-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">البرامج</h4>
                <div class="banner-link">
                    <a href="/">الرئيسية</a>
                    <a class="active" href="/projects">البرامج</a>
                </div>
            </div>
        </div>
    </section>
    <section class="programs">
        <div class="container">
            <div class="row">
                <div class="programs-item col-12">
                    <div class="programs-text float-left">
                        <h3><span>برنامج</span> تمكين المرأة</h3>
                        <p>
                            asdddddddddddddddddddddSDadsa sadas ads asd asd
                        </p>
                        <a class="float-right" href="/details/programs/1">المزيد</a>
                    </div>
                    <img src="{{asset('assets/img/test.jpg')}}" class="float-right img-thumbnail w-50">
                </div>
            </div>
        </div>
    </section>
@endsection