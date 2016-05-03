<?php
$list_options = $config['list_options'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?=isset($navMap[$stdName]['text']) ? $navMap[$stdName]['text'] : strtoupper($stdName)?>
            列表</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group btn-group-sm" role="group">
                    @if($list_options['create'])
                        <a href="{{URL::to('admin/'.$stdName.'/edit')}}" class="btn btn-primary">新建</a>
                    @endif
                    <a class="btn btn-danger">删除</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-condensed table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th><div class="checkbox checkbox-replace">
                        <input type="checkbox">
                    </div>  </th>
                <?php foreach($config['fields'] as $filed=>$settings):?>
                <?php if($settings['list']['show']):?>
                <th><?=is_array($settings) && isset($settings['label']) ? $settings['label'] : strtoupper($filed)?></th>
                <?php endif;?>
                <?php endforeach;?>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($models as  $model):?>
            <tr>
                <td width="18px">
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox" >
                    </div>
                </td>
                <?php foreach($config['fields'] as $filed=>$settings):?>
                <?php if($settings['list']['show']):?>
                <?php
                $value = $model->$filed;
                    /* 字段在列表中需要翻译 */
                if (array_key_exists($filed, $config['relations'])) {
                    $value = $model->$config['relations'][$filed]['as'];
                }
                ?>
                <td>{{$value}}</td>
                <?php endif;?>
                <?php endforeach;?>
                <td>
                    <div class="btn-group btn-group-xs" role="group">
                        @if($list_options['update'])
                            <a href="{{URL::to('admin/'.$stdName.'/edit/'.$model->id)}}" class="btn btn-primary">编辑</a>
                        @endif
                        @if($list_options['delete'])
                            <a href="{{URL::to('admin/'.$stdName.'/delete/'.$model->id)}}" class="btn btn-danger">删除</a>
                        @endif
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <div class="pull-right">
            {{$models->appends(Input::all())->links()}}
        </div>
    </div>
</div>