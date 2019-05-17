<!doctype html>
<html lang="{{App::getLocale()}}" dir=@if(App::getLocale()=="en") {{'ltr'}} @else {{'rtl'}}@endif>
@includeIf('website.articles.heade')
<body>
@includeIf('website.articles.header')
@yield('body')
@includeIf('website.articles.footer')
</body>
@includeIf('website.articles.footer_scripts')
</html>