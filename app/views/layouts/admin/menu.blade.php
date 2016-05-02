<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">打开</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('')}}">
                        <img class="img-responsive" src="{{asset('images/logo@2x.png')}}" width="150px"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav" id="main-menu">
                        <?php foreach($navMap as $navKey=>$data):?>
                        <li class="<?php if($stdName === $navKey) echo 'active';?>">
                            <a href="<?=isset($data['url']) ? $data['url'] : URL::to('admin/'.$navKey.'/list')?>">
                                <?=isset($data['text']) ? $data['text'] : strtoupper($navKey)?>
                            </a>
                            <?php if(isset($data['subs'])):?>
                            <ul>
                                <?php foreach($data['subs'] as $subKey=>$subData):?>
                                <a href="<?=isset($subData['url']) ? $subData['url'] : URL::to('admin/'.$subKey.'/list')?>">
                                    <?=isset($subData['text']) ? $subData['text'] : strtoupper($subKey)?>
                                </a>
                                <?php endforeach;?>
                            </ul>
                            <?php endif;?>
                        </li>
                        <?php endforeach?>
                    </ul>
                    <p class="navbar-text navbar-right">
                        <a target="_blank" href="http://www.cnblogs.com/lvyahui/" class="navbar-link">cnblogs博客</a>
                        <a target="_blank" href="https://github.com/lvyahui8" class="navbar-link">Github</a>
                        <a target="_blank" href="http://code.taobao.org/u/lvyahui/mypro/" class="navbar-link">TaoCode</a>
                    </p>
                </div>
            </div>

        </div>
        <div class="visible-xs">

            <a href="#" class="menu-trigger">
                <i class="entypo-menu"></i>
            </a>

        </div>
    </nav>
</header>

