<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link class="rounded-circle" rel="icon" href="{{asset("assets/img/1.png")}}">
    <title>{{$title??'AnaWaTefly'}}</title>

    @if(App::getLocale()=="en")
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
    @else
        <link rel="stylesheet"
              href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
              integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"
              crossorigin="anonymous">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @if(App::getLocale()=="ar")
        <link rel="stylesheet" href="{{asset('assets/css/style_ar.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('assets/fontawesome/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
</head>