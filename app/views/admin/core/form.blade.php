<?php
//$ctrl->registStyle('js/umeditor1_2_2-utf8-php/themes/default/css/umeditor.min.css');
//$ctrl->registScript('js/umeditor1_2_2-utf8-php/umeditor.config.js');
//$ctrl->registScript('js/umeditor1_2_2-utf8-php/umeditor.min.js');
//$ctrl->registScript('js/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js');
//$ctrl->registScript('js/ue-utf8-php/ueditor.config.js');
//$ctrl->registScript('js/ue-utf8-php/ueditor.all.min.js');
//$ctrl->registScript('js/ue-utf8-php/lang/zh-cn/zh-cn.js');
$formOption = $config['form_options'];
$layout = $formOption['layout'];
$labelCols = $layout['label_cols'];
$inputCols = $layout['input_cols'];
$labelCss = "col-sm-$labelCols";
$inputCss = "col-sm-$inputCols";
$loadUE = false;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">@if($model->id)  编辑<code>#{{$model->id}}</code>@else 新建  @endif</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-{{$layout['cols']}} col-sm-offset-{{(12-$layout['cols'])/2}}">
                <form class="form-horizontal" action="{{URL::to('admin/'.$stdName.'/edit')}}" method="post">
                    <input type="hidden" name="id" value="{{$model->id}}">
                    <?php foreach($config['fields'] as $field => $settings):?>
                    <?php
                    $type = $settings['form']['type'];
                    ?>
                    <div class="form-group">
                        <label for="{{$field}}" class="{{$labelCss}}">{{$settings['label']}}</label>
                        <div class="{{$inputCss}}">
                            <?php if($type === 'textarea'):?>
                            <textarea name="{{$field}}" id="{{$field}}" rows="10"
                                      class="form-control">{{$model->$field}}</textarea>
                            <?php elseif($type === 'select'):?>
                            <select name="{{$field}}" id="{{$field}}" class="form-control">
                                <?php $options = $settings['options']();foreach($options as $opt_val => $opt_txt):?>
                                <option value="{{$opt_val}}">{{$opt_txt}}</option>
                                <?php endforeach;?>
                            </select>
                            <?php elseif($type === 'wysiwyg'):?>
                            <?php
                            $loadUE = true;
                            ?>
                            <script type="text/plain" name="{{$field}}" id="wysiwyg-edit"
                                    style="width:100%;height:240px;">{{$model->$field}}</script>
                            <?php else:?>
                            <input type="text" class="form-control" name="{{$field}}" id="{{$field}}"
                                   value="{{$model->$field}}">
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="form-group">
                        <div class="{{$inputCss}} col-sm-offset-{{$labelCols}}">
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php if($loadUE):?>
@section('styles')
@stop
@section('scripts')
    {{HTML::script('plugins/ue-utf8-php/ueditor.config.js')}}
    {{HTML::script('plugins/ue-utf8-php/ueditor.all.min.js')}}
    {{HTML::script('plugins/ue-utf8-php/lang/zh-cn/zh-cn.js')}}
@stop
<?php endif;?>
@section('footScript')
    <script>
        var ue = null,
                ueId = 'wysiwyg-edit';
        if (document.getElementById(ueId)) {
            ue = UE.getEditor(ueId);
        }
    </script>
@stop