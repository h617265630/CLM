<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>BLOG  | Amaze UI Examples</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href={{asset('resources/assets/i/favicon.png')}}>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href={{asset('resources/assets/i/app-icon72x72@2x.png')}}>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href={{asset('/resources/assets/i/app-icon72x72@2x.png')}}>
    <meta name="msapplication-TileImage" content={{asset('/resources/assets/i/app-icon72x72@2x.png')}}>
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href={{asset('resources/assets/css/amazeui.min.css')}}>
    <link rel="stylesheet" href={{asset('resources/assets/css/app.css')}}>
</head>

<body id="blog">

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        {{--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/>--}}
        <h2 class="am-hide-sm-only">丑站</h2>
    </div>
</header>
<hr>
<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href={{url('/')}}>Home</a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    丑 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="lw-index.html">1. blog-index-standard</a></li>
                    <li><a href="lw-index-nosidebar.html">2. blog-index-nosidebar</a></li>
                    <li><a href="lw-index-center.html">3. blog-index-layout</a></li>
                    <li><a href="lw-index-noslider.html">4. blog-index-noslider</a></li>
                </ul>
            </li>
            <li><a href="{{url('/loginPage')}}">丑的人在这里登录</a></li>
            <li><a href="{{url('/imageGallery')}}">丑图</a></li>
            <li><a href="{{url('/articleArchive')}}">丑文</a></li>
            <li><a href="{{url('/videoCenter')}}">丑视屏</a></li>
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<hr>


<!-- content srart -->
@yield('content')
<!-- content end -->


<footer class="blog-footer">
    {{--<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">--}}
        {{--<div class="am-u-sm-12 am-u-md-4- am-u-lg-4">--}}
            {{--<h3>模板简介</h3>--}}
            {{--<p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>--}}
                {{--Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>--}}
        {{--</div>--}}
        {{--<div class="am-u-sm-12 am-u-md-4- am-u-lg-4">--}}
            {{--<h3>社交账号</h3>--}}
            {{--<p>--}}
                {{--<a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>--}}
                {{--<a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>--}}
                {{--<a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>--}}
                {{--<a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>--}}
                {{--<a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>--}}
            {{--</p>--}}
            {{--<h3>Credits</h3>--}}
            {{--<p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>--}}
        {{--</div>--}}
        {{--<div class="am-u-sm-12 am-u-md-4- am-u-lg-4">--}}
            {{--<h1>我们站在巨人的肩膀上</h1>--}}
            {{--<h3>Heroes</h3>--}}
            {{--<p>--}}
            {{--<ul>--}}
                {{--<li>jQuery</li>--}}
                {{--<li>Zepto.js</li>--}}
                {{--<li>Seajs</li>--}}
                {{--<li>LESS</li>--}}
                {{--<li>...</li>--}}
            {{--</ul>--}}
            {{--</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="blog-text-center">© 2019 LikeMyIdea, Inc. Licensed under MIT license. Made with love By Huang </div>
</footer>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src={{asset('/resources/assets/js/jquery.min.js')}}></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src={{asset('/resources/assets/js/amazeui.ie8polyfill.min.js')}}></script>
<![endif]-->
<script src={{asset('/resources/assets/js/amazeui.min.js')}}></script>
<!-- <script src="assets/js/app.js"></script> -->
</body>
</html>