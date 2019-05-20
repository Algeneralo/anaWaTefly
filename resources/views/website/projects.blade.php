@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/projects-banner.jpg'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang('general.nav.projects')</h4>
                <div class="banner-link">
                    <a href="/">@lang('general.nav.home')</a>
                    <a class="active" href="/projects#">@lang('general.nav.projects')</a>
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
                    <h2>@lang('general.projects.sections')</h2>
                    <br>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab"
                               href="#completed">@lang('general.projects.doneProjects')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                               href="#finance">@lang('general.projects.financeProjects')</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="completed" class="container tab-pane active"><br>
                            <div class="row">
                                @foreach($doneProjects as $project)
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img class="card-img-top" src="{{'assets/img/upload/'.$project->image}}"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <p class="card-text">
                                                    {{Str::limit(strip_tags($project->body),310)}}
                                                </p>
                                                <a href="/details/doneProjects/{{$project->id}}"
                                                   class="card-link float-right">@lang('general.more')</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="finance" class="container tab-pane fade"><br>
                            <div class="row">
                                @foreach($financeProjects as $project)
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img class="card-img-top" src="{{'assets/img/upload/'.$project->image}}"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <p class="card-text">
                                                    {{Str::limit(strip_tags($project->body),310)}}
                                                </p>
                                                <a href="/details/doneProjects/{{$project->id}}"
                                                   class="card-link float-right">@lang('general.more')</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection