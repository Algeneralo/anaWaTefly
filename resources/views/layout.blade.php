<!doctype html>
<html lang="{{App::getLocale()}}" dir=@if(App::getLocale()=="en") {{'ltr'}} @else {{'rtl'}}@endif>
@includeIf('articles.heade')
<body>
@includeIf('articles.header')
@yield('body')
@includeIf('articles.footer')
</body>
@includeIf('articles.footer_scripts')
</html>