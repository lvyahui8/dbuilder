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
                            <label for="form_type" class="control-label">类型</label>
                            <select class="selectboxit" name="form[type]" id="form_type">
                                @foreach(SiteHelpers::supportFormControls() as $control => $text)
                                    <option value="{{$control}}" @if($fieldConfig['form']['type'] === $control) selected @endif>{{$text}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_placeholder" class="control-label">Placaholder</label>
                            <input type="text" class="form-control" name="form[placeholder]" id="form_placeholder" placeholder="">
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
                    <div class="col-sm-3">
                        <div class="checkbox checkbox-replace color-primary">
                            <input type="checkbox" name="list[search]" id="list_search" value="1"
                                   @if($fieldConfig['list']['search']) checked @endif>
                            <label for="list_search">可搜索</label>
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

            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">保存</button>
    </div>
</form>
