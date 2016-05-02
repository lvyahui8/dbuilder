<nav id="top_nav" class="top-menu">
    <ul>
        <?php foreach($navMap as $navKey=>$data):?>
        <li class="<?php if($stdName === $navKey) echo 'active';?>">
            <a href="<?=isset($data['url']) ? $data['url'] : URL::to($navKey)?>" target="contentFrame"><?=isset($data['text']) ? $data['text'] : strtoupper($navKey)?></a>
        </li>
        <?php endforeach?>
    </ul>
</nav>
