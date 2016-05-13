<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">GModule: <code>{{$moduleKey}}</code> Field: <code>{{$field}}</code> 配置</h4>
</div>
<form action="{{URL::to('admin/module/field-config')}}" method="post">
    <input type="hidden" name="module_key" value="{{$moduleKey}}">
    <input type="hidden" name="field" value="{{$field}}">
    <div class="modal-body">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">表单（Form）属性配置</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_type" class="control-label">控件类型</label>
                            <select class="selectboxit" name="form[type]" id="form_type">
                                @foreach(SiteHelpers::supportFormControls() as $control => $text)
                                    <option value="{{$control}}"
                                            @if($fieldConfig['form']['type'] === $control) selected @endif>{{$text}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_placeholder" class="control-label">Placaholder</label>
                            <input type="text" class="form-control" name="form[placeholder]" id="form_placeholder"
                                   value="{{$fieldConfig['form']['placeholder']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="form_options" class="control-label">选项 <i class="entypo-help-circled"
                                                                                  data-toggle="tooltip" data-placement="right"
                                                                                  title=""
                                                                                  data-original-title="不填写将自动分析关系来加载"></i></label>
                            <input type="text" value="{{isset($fieldConfig['form']['options']) ? implode(',',$fieldConfig['form']['options']) : ''}}" name="form[options]" id="form_options" class="form-control tagsinput" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">列表（List）属性配置</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="checkbox checkbox-replace color-primary">
                            <input type="checkbox" name="list[sort]" id="list_sort" value="1"
                                   @if($fieldConfig['list']['sort']) checked @endif>
                            <label for="list_sort">可排序</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select name="list[search]" id="list_search_operator" class="selectboxit">
                                <option value="">不可搜索</option>
                                @foreach(SiteHelpers::supportSearchOperators() as $operator => $text)
                                    <option value="{{$operator}}"
                                            @if($fieldConfig['list']['search'] === $operator) selected @endif>{{$text}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">关系（Relation）属性配置</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="relation_type">关系类型</label>
                            <select name="relation[type]" id="relation_type" class="selectboxit">
                                <option value="">无</option>
                                @foreach(SiteHelpers::supportRelations() as $relation => $text)
                                    <option value="{{$relation}}"
                                            @if($fieldConfig['relation']['type'] === $relation) selected @endif>{{$text}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="belongsTo">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">关联表</label>
                                    <select name="relation[table]" id="relation_table" class="selectboxit">
                                        @foreach($tables as $table)
                                            <option value="{{$table}}" @if($table === $fieldConfig['relation']['type']) @endif>{{$table}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="relation_foreign_key">关联表主键</label>
                                    <input type="text" name="relation[foreign_key]" id="relation_foreign_key"
                                           class="form-control" value="id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="relation_show">代替显示字段</label>
                                    <select name="relation[show]" id="relation_show" class="selectboxit"></select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="relation_as">别名</label>
                                    <input type="text" class="form-control" name="relation[as]" id="relation_as"
                                           value="{{$fieldConfig['relation']['as']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">保存</button>
    </div>
</form>
<script>
    var $tableSelector = $('select#relation_table');
    $fieldSelector = $('select#relation_show'),
            $fKeyInput = $('input#relation_foreign_key'),
            $asInput = $('input#relation_as');

    function refreshRInputs(table) {
        $.get('{{URL::to('admin/data-source/table-fields?connection='.$connection)}}&table=' + table, function (resp) {
            if (resp.success) {
                var options = resp.data.fields.map(function (item) {
                    var selected = '{{isset($fieldConfig['relation']['table']) ? $fieldConfig['relation']['table'] : ''}}' === table
                    && '{{isset($fieldConfig['relation']['show']) ? $fieldConfig['relation']['show'] : ''}}' === item ? 'selected' : '';
                    return "<option value='" + item + "' " + selected + ">" + item + '</option>';
                });
                $fieldSelector.html(options.join(''));
                $fieldSelector.data("selectBox-selectBoxIt").refresh();
                $fKeyInput.val(resp.data.pri);
            }
        }, 'json');
    }

    $fieldSelector.change(function () {
        if ($fieldSelector.val()) {
            $asInput.val($tableSelector.val() + '_' + $fieldSelector.val());
        }
    });

    $tableSelector.change(function () {
        refreshRInputs($(this).val());
    });
    refreshRInputs($tableSelector.val());
</script>