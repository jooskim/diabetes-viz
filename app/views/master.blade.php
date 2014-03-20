<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
        @show
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=false">
    @section('header')
    @show
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="/diabetes-viz/public/scripts/vendor/modernizr/normalize.css">
    <link rel="stylesheet" href="/diabetes-viz/public/scripts/vendor/modernizr/main.css">
    <link rel="stylesheet" href="/diabetes-viz/public/scripts/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/diabetes-viz/public/scripts/slider/css/slider.css">
    <link rel="stylesheet" href="/diabetes-viz/public/scripts/datepicker/css/datepicker.css">
    <link rel="stylesheet" href="/diabetes-viz/public/css/style.css">
    <script src="/diabetes-viz/public/scripts/vendor/modernizr/modernizr-2.6.2.min.js"></script>
    <script data-main="@yield('mainscript', '/diabetes-viz/public/scripts/main')" src="/diabetes-viz/public/scripts/vendor/requirejs/require.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div class="header">
    <div class="navbar">

    </div>
</div>
<div class="body">
    @section('body')

    @show
</div>
<div class="footer">

</div>

</body>
</html>
