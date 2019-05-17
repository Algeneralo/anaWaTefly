@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/projects-banner.jpg'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">المشاريع</h4>
                <div class="banner-link">
                    <a href="/">الرئيسية</a>
                    <a class="active" href="/projects#">المشاريع</a>
                    {{--<a href="/">Home</a>--}}
                    {{--<a class="active" href="#">about</a>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h2>الأقسام</h2>
                    <br>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#completed">المشاريع المنجزة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#finance">مشاريع للتمويل</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="completed" class="container tab-pane active"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <img class="card-img-top" src="{{'assets/img/projects.jpg'}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">العنوان</h5>
                                            <p class="card-text">
                                                {{Str::limit('نفذت طالبات من الجامعة الإسلامية بغزة ديما ساق الله
                                                وايلاف منصور وبنان النجار ندوة تثقيفية عن الصحة الانجابية في جمعية انا
                                                وطفلي بحضور مجموعة من النساء
                                                شملت الندوة تعرف بالصحة الانجابية وعناصرها والعوامل المؤثرة عليها ودور
                                                العلاج الطبيعي في الصحة الانجابية قبل واثناء الحمل . لقيت الندوة استحسان
                                                النساء وشكرهم وتقديرهم للجمعية لما تقدمه من ندوات تثقيفية وتوعوية ',310)}}
                                            </p>
                                            <a href="/details/doneProjects/1" class="card-link float-right">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="finance" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <img class="card-img-top" src="{{'assets/img/projects.jpg'}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">العنوان</h5>
                                            <p class="card-text">
                                                {{Str::limit('نفذت طالبات من الجامعة الإسلامية بغزة ديما ساق الله
                                                وايلاف منصور وبنان النجار ندوة تثقيفية عن الصحة الانجابية في جمعية انا
                                                وطفلي بحضور مجموعة من النساء
                                                شملت الندوة تعرف بالصحة الانجابية وعناصرها والعوامل المؤثرة عليها ودور
                                                العلاج الطبيعي في الصحة الانجابية قبل واثناء الحمل . لقيت الندوة استحسان
                                                النساء وشكرهم وتقديرهم للجمعية لما تقدمه من ندوات تثقيفية وتوعوية ',310)}}
                                            </p>
                                            <a href="/details/doneProjects/1" class="card-link float-right">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection