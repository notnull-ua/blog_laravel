<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 26.07.17
 * Time: 12:21
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<header class="header">
    @include('/common/head')
    @yield('head')
</header>
<aside>
    @yield('leftbar')
</aside>

<main class="main">
    @yield('content')
</main>

<footer class="footer">
    @include('../common/footer')
    @yield('footer')
    <script src="{{asset('js/app.js')}}"></script>
</footer>

</body>
</html>