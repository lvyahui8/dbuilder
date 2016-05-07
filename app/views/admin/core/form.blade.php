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
$loadSBox = false;
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">@if($model->id)  编辑<code>#{{$model->id}}</code>@else 新建  @endif</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-{{$layout['cols']}} col-sm-offset-{{(12-$layout['cols'])/2}}">
                <form class="form-horizontal" action="{{URL::to('admin/'.$stdName.'/edit')}}" method="post">
                    <input type="hidden" name="{{$model->getKeyName()}}" value="{{$model->getKey()}}">
                    <?php foreach($config['fields'] as $field => $settings):?>
                    <?php
                    if ($field === $model->getKeyName()) continue;
                    $type = $settings['form']['type'];
                    ?>
                    <div class="form-group">
                        <label for="{{$field}}"
                               class="{{$labelCss}} control-label">{{isset($settings['label']) ? $settings['label'] : strtoupper($field)}}</label>
                        <div class="{{$inputCss}}">
                            <?php if($type === 'textarea'):?>
                            <textarea name="{{$field}}" id="{{$field}}" rows="10"
                                      class="form-control">{{$model->$field}}</textarea>
                            <?php elseif($type === 'select'):?>
                            <?php $loadSBox = true;?>
                            <select name="{{$field}}" id="{{$field}}" class="selectboxit">
                                @if (isset($settings['form']['options']))
                                    @if(is_array($settings['form']['options']))
                                        @foreach($settings['form']['options'] as $value => $text)
                                            <option value="{{$value}}"
                                                    @if($value == $model->$field) selected @endif>{{$text}}</option>
                                        @endforeach
                                    @elseif(is_string($settings['form']['options']))
                                        @foreach($$settings['form']['options'] as $value => $text)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                @else
                                    <?php
                                    $fieldTranslate = $config['relations'][$field];
                                    $options = BaseModel::getTranslates($fieldTranslate);
                                    foreach($options as $option):
                                    ?>
                                    <option value="<?=$option->$fieldTranslate['foreign_key']?>"
                                            @if($option->$fieldTranslate['foreign_key'] == $model->$field) selected @endif
                                    ><?=$option->$fieldTranslate['show']?>
                                    </option>
                                    <?php endforeach;?>
                                @endif
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
@yield('form.bottom','')
@section('styles')
    @if($loadSBox)
        {{HTML::style('assets/js/selectboxit/jquery.selectBoxIt.css')}}
    @endif
@append
@section('scripts')
    <?php if($loadUE):?>
    {{HTML::script('plugins/ue-utf8-php/ueditor.config.js')}}
    {{HTML::script('plugins/ue-utf8-php/ueditor.all.min.js')}}
    {{HTML::script('plugins/ue-utf8-php/lang/zh-cn/zh-cn.js')}}
    <?php endif;?>
    @if($loadSBox)
        {{HTML::script('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}
    @endif
@append

@section('footScript')
    <script>
        var ue = null,
                ueId = 'wysiwyg-edit';
        if (document.getElementById(ueId)) {
            ue = UE.getEditor(ueId);
        }
    </script>
@append