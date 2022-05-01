<!doctype html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/admin/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/typography.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/default-css.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/styles.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('assets')}}/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<body>

@include("admin.header")
@section('sidebar')
    @include("admin.sidebar")
@show
@yield('content')
@include("admin.footer")
@yield('foot')
</body>
</html>
