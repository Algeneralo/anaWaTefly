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
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span>
                </button>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span>
                </button>
                {{session('success')}}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span>
                </button>
                {{session('error')}}
            </div>
        @endif
        @yield('body')
    </div><!-- end container -->
</div>
@includeIf('admin.articles.footer')
</body>
@includeIf('admin.articles.footer_scripts')
</html>