<?php
$snakeName = $ctrl->getSnakeName();
$routeMethod = $ctrl->routeMethod();
$subIndex = $routeMethod === 'getIndex';
$navMap = array(
        'site'  =>  array(
                'url'   =>  URL::to(''),
                'text'  =>  '首页'
        ),
        'demo'  =>  array(
        ),
        'resume' =>  array(
                'text'  =>  '简历'
        ),
        'blog'  =>  array(
                'text'  =>  '博客',
                'url'   =>  URL::to('blog/list'),
        ),
        'project'=> array(
                'text'  =>  '项目',
        ),
        'code'  =>  array(
                'text'  =>  '微码'
        ),
        'test'  =>  array(

        ),
);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @include('layouts.head')
</head>
<body>
<div class="container-fluid">{{$content}}</div>
@include('layouts.footer')
<script>
    $('a').click(function(){
        var url = $(this).attr('href')
        if(url && url != '#'){
            window.parent.location.hash = '#' + url;
        }
        return false;
    });
    //    document.getElementsByTagName('a').onclick = function(){
    //        window.parent.location.hash = '#' + this.href;
    //    };
</script>
@yield('footerScript','')
</body>
</html>