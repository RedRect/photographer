<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Laravel Meetup</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    {{--    <link rel="stylesheet" href="/assets/css/common.css">--}}
</head>

<body >


    <div class="container">

        @yield('content')
    </div>
    <footer class="footer">
        <p class="am-padding-left">Copyright © 2019. Made With <i class="am-icon am-icon-heart"></i> By Jianwen.</p>
    </footer>

    {{--<!--[if lt IE 9]>--}}
    {{--<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>--}}
    {{--<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>--}}
    {{--<script src="/assets/vendor/amazeui/js/amazeui.ie8polyfill.min.js"></script>--}}
    {{--<![endif]-->--}}

    {{--<!--[if (gte IE 9)|!(IE)]><!-->--}}
    {{--<script src="/assets/js/jquery.min.js"></script>--}}
    {{--<!--<![endif]-->--}}
    {{--<script src="/assets/vendor/amazeui/js/amazeui.min.js"></script>--}}
    {{--<script src="/assets/js/common.js"></script>--}}

</body>
</html>
