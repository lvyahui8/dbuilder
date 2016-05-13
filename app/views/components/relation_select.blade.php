<?php
if (!isset($value)) {
    if (Input::has($field) && Input::get($field)) {
        $value = Input::get($field);
    } else {
        $value = null;
    }
}
?>
<select name="{{$field}}" id="{{$field}}" class="selectboxit">
    <option value="" class="default-value">请选择</option>
    @if (isset($fieldConfig['form']['options']))
        @if(is_array($settings['form']['options']))
            @foreach($settings['form']['options'] as $v => $text)
                <option value="{{$v}}"
                        @if($v == $value) selected @endif>{{$text}}</option>
            @endforeach
        @else
        @endif
    @else
        <?php
        $fieldTranslate = $fieldConfig['relation'];
        $options = BaseModel::getTranslates($fieldTranslate);
        foreach($options as $option):
        ?>
        <option value="<?=$option->$fieldTranslate['foreign_key']?>"
                @if($option->$fieldTranslate['foreign_key'] == $value) selected @endif
        ><?=$option->$fieldTranslate['show']?></option>
        <?php endforeach;?>
    @endif
</select>