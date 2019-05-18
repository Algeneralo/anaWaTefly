<!DOCTYPE html>
<html lang="ar" dir="rtl">
@includeIf('admin.articles.heade')
<body><!-- Navigation Bar-->
@includeIf('admin.articles.header')
<!-- End Navigation Bar-->
<div class="wrapper">
    <div class="container-fluid"><!-- Page title box -->
        <div class="page-title-alt-bg"></div>
        <div class="page-title-box">
            <h4 class="page-title">جمعية انا وطفلي</h4>
        </div>
        @yield('body')
    </div><!-- end container -->
</div>
@includeIf('admin.articles.footer')
</body>
@includeIf('admin.articles.footer_scripts')
</html>