<?php
$list_options = $config['list_options'];
$loadSBox = false;
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
                <th>
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox">
                    </div>
                </th>
                <?php foreach($config['fields'] as $filed=>$settings):?>
                <?php if($settings['list']['show']):?>
                <th><?=is_array($settings) && isset($settings['label']) ? $settings['label'] : strtoupper($filed)?></th>
                <?php endif;?>
                <?php endforeach;?>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <form class="" action="" method="get">
                    <td></td>
                    @foreach($config['fields'] as $field=>$fieldConfig)
                        @if($fieldConfig['list']['show'])
                            @if(isset($fieldConfig['list']['search']) && $fieldConfig['list']['search'] !== false)
                                <td>
                                    @if($fieldConfig['form']['type'] == 'select')
                                        <?php $loadSBox = true;?>
                                        {{View::make('components.relation_select',array(
                                        'fieldConfig'=>$fieldConfig,
                                        'field' =>  $field,
                                        ))}}
                                    @else
                                        <input type="text" name="{{$field}}" id="{{$field}}" value="{{Input::get($field)}}" class="form-control input-sm">
                                    @endif
                                </td>
                            @else
                                <td></td>
                            @endif
                        @endif

                    @endforeach
                    <td>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="submit" class="btn btn-primary">搜索</button>
                            <button type="reset" onclick="resetForm(this)" class="btn btn-warning">重置</button>
                        </div>
                    </td>
                </form>
            </tr>
            <?php foreach($models as  $model):?>
            <tr>
                <td width="18px">
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox">
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


@section('styles')
    @if($loadSBox)
        {{HTML::style('assets/js/selectboxit/jquery.selectBoxIt.css')}}
    @endif
@stop
@section('scripts')
    @if($loadSBox)
        {{HTML::script('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}
    @endif
@stop