<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @include('layouts.admin.head')
</head>
<body>
<?php

$subIndex = $routeMethod === 'getIndex';
$navMap = array(
        'site'  =>  array(
                'url'   =>  URL::to(''),
                'text'  =>  '首页'
        ),
        'blog'  =>  array(
                'text'  =>  '博客',
        ),
        'code'  =>  array(
                'text'  =>  '微码'
        ),
        'comment'  =>  array(
                'text'  =>  '评论'
        ),
);
?>
<div class="wrap">
    @include('layouts.admin.menu')
    <div class="container">
        <?php if($snakeName !== 'site'):?>
        <ol class="breadcrumb">
            <li><a href="<?=URL::to('')?>">首页</a></li>
            <li>
                <a href="<?=isset($navMap[$snakeName]['url']) ? $navMap[$snakeName]['url'] : URL::to('admin/'.str_replace('_','-',$snakeName).'/list')?>"
                   class="<?=$subIndex ? 'active' : null?>">
                    <?=isset($navMap[$snakeName]['text']) ?$navMap[$snakeName]['text'] : strtoupper($snakeName)?>
                </a>
            </li>
            <?php if(!$subIndex):?>
            <li class="active"><?=strtoupper($routeMethod)?></li>
            <?php endif;?>
        </ol>
        <br>
        <?php endif;?>
        <div class="row">
            <div class="col-sm-12">
                {{$content}}
            </div>
        </div>
    </div>
    <br>
    @include('layouts.admin.footer')
</div>
@yield('footerScript','')
</body>
</html>