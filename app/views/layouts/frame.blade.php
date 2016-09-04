<?php
$snakeName = $ctrl->getSnakeName();
$routeMethod = $ctrl->routeMethod();
$subIndex = $routeMethod === 'getIndex';
$navMap = array(
        'site' => array(
                'text' => '首页',
                'url' => URL::to('site/index'),
        ),
        'demo' => array(),
        'resume' => array(
                'text' => '简历'
        ),
        'blog' => array(
                'text' => '博客',
                'url' => URL::to('blog/list'),
        ),
        'project' => array(
                'text' => '项目',
        ),
        'code' => array(
                'text' => '微码'
        ),
        'test' => array(),
        'about' => array(
                'text' => '关于'
        )
);
?>
        <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>若尘博客</title>
    {{HTML::style(asset('css/reset.css'))}}
    {{HTML::style(asset('css/styles.css'))}}
    {{HTML::script('js/jquery-1.11.0.min.js')}}

</head>
<body class="df-bg">
<div class="page-left">
    @include('layouts.menu')
    <div class="page-body">
        <iframe width="100%" height="400px" name="contentFrame" id="contentFrame" frameborder="0" scrolling=""></iframe>
    </div>
</div>
<div class="page-right page-panel">
    @include('layouts.right')
</div>

{{HTML::script('js/jquery.cookie.min.js')}}
{{HTML::script('js/jquery-jplayer/jquery.jplayer.js')}}
{{HTML::script('js/music-player/ttw-music-player-min.js')}}
{{HTML::script('js/flexcroll.js')}}
{{HTML::script('js/page.js')}}
<script>
    var myPlaylist = [
        {
            mp3: '{{asset('audios/ybxyq.mp3')}}',
            title: '月半小夜曲',
            artist: '陈慧娴',
            rating: 4,
            buy: '#',
            price: '0.99',
            duration: '3:45',
            cover: '{{asset('images/ybxyq.jpg')}}'
        },
        {
            mp3: '{{asset('audios/mnjr.mp3')}}',
            title: '明年今日',
            artist: '陈奕迅',
            rating: 4,
            buy: '#',
            price: '0.99',
            duration: '3:23',
            cover: '{{asset('images/mnjr.jpg')}}'
        }
    ];
</script>
<script>
    $(document).ready(function () {
        var autoplay = true;
        if(window.localStorage){
            if(Number(localStorage.framePage) >= 1){
                autoplay = false;
            }

            if(isNaN(localStorage.framePage) || Number(localStorage.framePage) <= 0) localStorage.framePage = 1;
            else {
                localStorage.framePage = Number(localStorage.framePage) + 1;
            }
        }

        $('#music-player').ttwMusicPlayer(myPlaylist, {
            "autoplay": autoplay,
            "jPlayer": {
                "swfPath": '{{asset('js/jquery-jplayer')}}'
            }
        });

        {{--$('html body').css({background:'url({{asset('images/top_bg.jpg')}})no-repeat fixed'});--}}
    });
</script>
</body>
</html>