<!DOCTYPE html>
<!-- saved from url=(0081)http://longfor.sinaapp.com/lhlc/daub/index.htm?from=groupmessage&isappinstalled=0 -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>{{ $info->title }}</title>
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="pragram" content="no-cache">
    <link rel="stylesheet" type="text/css" href="/statics/album/css/main.css">
    <script type="text/javascript">
        var phoneWidth = parseInt(window.screen.width);
        var phoneScale = phoneWidth/640;
        var ua = navigator.userAgent;
        if (/Android (\d+\.\d+)/.test(ua)){
            var version = parseFloat(RegExp.$1);
            // andriod 2.3
            if(version>2.3){
                document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                // andriod 2.3以上
            }else{
                document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
            }
            // 其他系统
        } else {
            document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
        }
    </script>
    <meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
    <!--移动端版本兼容 end -->
</head>
<body class="s-bg-ddd pc perspective yes-3d">
<!--模版加载提示-->
<section class="u-alert">
    <img style="display: none;"  src="/statics/album/img/loading_large.gif">
    <div class="alert-loading z-move">
        <div class="cycleWrap">
            <span class="cycle cycle-1"></span>
            <span class="cycle cycle-2"></span>
            <span class="cycle cycle-3"></span>
            <span class="cycle cycle-4"></span>
        </div>
        <div class="lineWrap">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </div>
    </div>
</section>
<!--模版加载提示 end-->
<!-- 声音控件-->
<section class="u-audio f-hide" data-src="/statics/album/music.mp3">
    <p id="coffee_flow" class="btn_audio">
        <strong class="txt_audio z-hide">关闭</strong>
        <span class="css_sprite01 audio_open"></span>
    <div class="coffee-steam-box">
    </div>
    </p>
</section>
<!--声音控件 end-->
<section class="u-arrow f-hide">
    <p class="css_sprite01">
    </p>
</section>
<!-- 箭头指示引导 end-->
<!-- page页面内容 -->
<section class="p-ct transformNode-3d">
    <!-- 旋转正面 -->
    <div id="j-mengban" class="translate-front z-show">
        <div class="mengban-warn">
        </div>
        <canvas></canvas>
    </div>
    <!-- 旋转正面 end-->
    <!-- 旋转反面 -->
    <div class="translate-back" style="height: 775px;">
        <!-- 封页 1-->
        <!-- 擦一擦 -->
        <!-- 蒙板背景图 -->
        <div class="m-page m-fengye" data-page-type="info_pic3" data-statics="info_pic3">
            <div class="page-con lazy-img" data-src="{{ $cover? $cover->src: '/statics/album/img/home-page.png' }}" data-position="50% 0" data-size="cover"
                 style="background-image: url({{ $cover? $cover->src: '/statics/album/img/home-page.png' }}); background-size: cover; background-position: 50% 0;">
            </div>
        </div>
        <!-- 封页 end-->
	@foreach($list as $item)
        <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list">
            <div class="page-con j-txtWrap lazy-img" data-src="{{ $item->src }}" data-position="50% 0" data-size="cover"
                 style="background-image: url({{ $item->src }}); background-size: cover; background-position: 50% 0;">
            </div>
        </div>
	@endforeach
    </div>
    <!-- 旋转反面 end-->
</section>
<!-- 正文介绍 end-->
<!--pageLoading-->
<section class="u-pageLoading">
    <img src="/statics/album/img/load.gif" alt="loading">
</section>
<!--pageLoading end-->
<!--脚本加载-->
<script src="/statics/album/js/init.mix.js" type="text/javascript" charset="utf-8"></script>
<script src="/statics/album/js/weixin.js" type="text/javascript" charset="utf-8"></script>
<script src="/statics/album/js/coffee.js" type="text/javascript" charset="utf-8"></script>
<script src="/statics/album/js/Lottery.js" type="text/javascript" charset="utf-8"></script>
<script src="/statics/album/js/main.js" type="text/javascript" charset="utf-8" defer="defer"></script>
<input id="ca-tips" type="hidden" value="">
<input id="r-cover" type="hidden" value="/statics/album/img/mb.jpg">
</body>
</html>
