@extends('website.layout')
@section('body')
    <section class="banner"
             style="background: url({{'/assets/img/details-banner.png'}}) no-repeat scroll center center;">
        <div class="container">
            <div class="banner-content">
                <h4 class="text-center">@lang("general.more")</h4>
                <div class="banner-link">
                    <a href="/">@lang("general.nav.home")</a>
                    <a class="active" href="#">@lang("general.more")</a>
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
                            <img src="{{asset('assets/img/upload/'.$post->image)}}">
                        </div>
                        <figcaption>
                            <h4>{{$post->title}}</h4>
                            <div class="date">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                {{$post->created_at->toFormattedDateString()}}
                            </div>
                            <p>{!!$post->body!!}</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 sidebar">
                    <h4>@lang("general.otherPosts")</h4>
                    <ul class="list-unstyled">
                        @foreach($otherPosts as $post)
                            <li>
                                <a href="/details/{{$tableName}}/{{$post->id}}">{{$post->title}} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
