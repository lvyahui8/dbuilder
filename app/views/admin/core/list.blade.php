@section('headStyle')
    <style>
        .sort.sort-active {
            color: #000;
            font-weight: bold;
        }
    </style>
@append
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
        <form class="list-form" action="" method="get">
            <input type="hidden" name="list_sort_asc" value="{{Input::get('list_sort_asc') !== null ? Input::get('list_sort_asc') : 1}}">
            <input type="hidden" name="list_order_by" value="">
            <table class="table table-bordered responsive table-hover table-striped">
                <thead>
                <tr>
                    <th>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox">
                        </div>
                    </th>
                    <?php foreach($config['fields'] as $field=>$settings):?>
                    <?php if($settings['list']['show']):?>
                    <th @if($settings['list']['sort'])
                        class="sort @if($field === Input::get('list_order_by')) sort-active @endif"
                        data-field="{{$field}}" @endif
                    ><?=is_array($settings) && isset($settings['label']) ? $settings['label'] : strtoupper($field)?>
                        <span class="pull-right">
                            @if($field === Input::get('list_order_by'))  @if(Input::get('list_sort_asc') == 1) <i class="fa fa-sort-asc"></i> @else <i class="fa fa-sort-desc"></i>  @endif @endif
                        </span>
                    </th>
                    <?php endif;?>
                    <?php endforeach;?>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    @foreach($config['fields'] as $field=>$fieldConfig)
                        @if($fieldConfig['list']['show'])
                            @if(isset($fieldConfig['list']['search']) && $fieldConfig['list']['search'] !== false)
                                <td>
                                    @if($fieldConfig['form']['type'] == 'select')
                                        <?php $loadSBox = true;?>
                                        @if(isset($fieldConfig['relation']))
                                            {{View::make('components.relation_select',array(
                                            'fieldConfig'=>$fieldConfig,
                                            'field' =>  $field,
                                            ))}}
                                        @else

                                        @endif
                                    @else
                                        <input type="text" name="{{$field}}" id="{{$field}}"
                                               value="{{Input::get($field)}}" class="form-control input-sm">
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
                        <div class="btn-group btn-group-sm" role="group">
                            @if($list_options['update'])
                                <a href="{{URL::to('admin/'.$stdName.'/edit/'.$model->id)}}"
                                   class="btn btn-primary">编辑</a>
                            @endif
                            @if($list_options['delete'])
                                <a href="{{URL::to('admin/'.$stdName.'/delete/'.$model->id)}}"
                                   class="btn btn-danger">删除</a>
                            @endif
                            @if(View::exists('admin.'.snake_case($stdName).'.list_item_links'))
                                @include('admin.'.snake_case($stdName).'.list_item_links',array('model'=>$model))
                            @endif
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </form>
        <div class="pull-right">
            {{$models->appends(Input::all())->links()}}
        </div>
    </div>
</div>


@section('styles')
    {{HTML::style('assets/js/datatables/responsive/css/datatables.responsive.css')}}

    @if($loadSBox)
        {{HTML::style('assets/js/selectboxit/jquery.selectBoxIt.css')}}
    @endif
@stop
@section('scripts')
    {{HTML::script('assets/js/jquery.dataTables.min.js')}}
    {{HTML::script('assets/js/datatables/jquery.dataTables.columnFilter.js')}}
    @if($loadSBox)
        {{HTML::script('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}
    @endif
@stop

@section('footScript')
    <script>
        $(document).ready(function(){
            $('th.sort').click(function(){
                var $th = $(this);
                $('input[name="list_order_by"]').val($th.data('field'));
                $('input[name="list_sort_asc"]').val($th.find('i').hasClass('fa-sort-asc') ? 0 : 1);
                $('form.list-form').submit();
            });
        });
    </script>
@stop