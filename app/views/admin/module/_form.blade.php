@extends('admin.core.form')
<?php
$controlTyps = SiteHelpers::supportFormControls();
?>
@if($model->id)
@section('form.bottom')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
                <li class="active">
                    <a href="#fields" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-home"></i></span>
                        <span class="hidden-xs">字段配置</span>
                    </a>
                </li>
                <li>
                    <a href="#perm" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-home"></i></span>
                        <span class="hidden-xs">权限配置</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="fields">
                    <form action="{{URL::to('admin/module/save-fields-conf/')}}" method="post">
                        <input type="hidden" name="id" value="{{$model->id}}">
                        <input type="hidden" name="module_key" value="{{$model->name}}">
                        <table class="table table-bordered responsive">
                            <thead>
                            <tr>
                                <th>字段</th>
                                <th>Label</th>
                                <th>包含在表单</th>
                                <th>包含在列表</th>
                                <th>表单控件类型</th>
                                <th>更多配置</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($moduleConf['fields'] as $field => $fieldConf)
                                <tr>
                                    <td>{{$field}}</td>
                                    <td><input type="text" class="form-control input-sm" name="fields[{{$field}}][label]" value="{{$fieldConf['label']}}"/></td>
                                    <td>
                                        <div class="checkbox checkbox-replace  color-primary">
                                            <label>
                                                <input type="checkbox" name="fields[{{$field}}][form][show]" @if($fieldConf['form']['show']) checked @endif >
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox checkbox-replace  color-primary">
                                            <label>
                                                <input type="checkbox" name="fields[{{$field}}][list][show]"  @if($fieldConf['list']['show']) checked @endif >
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{$controlTyps[$fieldConf['form']['type']]}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm ajax-form-modal" data-content-url="{{URL::to('admin/module/field-config?module_key='.$model->name.'&field='.$field)}}">编辑</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </form>
                </div>
                <div class="tab-pane" id="perm">

                </div>
            </div>
        </div>
    </div>
@stop
@endif

@section('scripts')
    {{HTML::script('assets/js/jquery.form.min.js')}}
    {{HTML::script('assets/js/bootstrap-tagsinput.min.js')}}
@stop
@section('footScript')
    <script>
        $(document).ready(function () {
            var $tableSelect = $('select#db_table'),
                    $dbSelect = $('select#db_source'),
                    $modal = $('div.modal#ajax-modal');

            var loadDataSources = function (sourceName) {
                $.get("{{URL::to('admin/data-source/tables?data_source=')}}" + sourceName + '&table={{$model->db_table}}', function (resp) {
                    if (resp.success) {
                        var $options = [];
                        for (table in resp.data.tables) {
                            $options.push("<option value='" + table + "'"+(resp.data.selected == table ? 'selected' : '')+">" + table + "</option>");
                        }
                        $tableSelect.empty().append($options.join('')).data("selectBox-selectBoxIt").refresh();
                    }
                }, 'json');
            };
            $dbSelect.change(function (e) {
                loadDataSources($(this).val());
            });

            loadDataSources($dbSelect.val());

            $modal.delegate('form button[type="submit"]','click',function(){
                var $form = $modal.find('form');
                $form.ajaxSubmit({
                    success :   function(resp){
                        if(resp.success){
                            $modal.modal('hide');
                        }
                    }
                });
                return false;
            });

            $('table a.ajax-form-modal').click(function(){
                $.get($(this).data('content-url'),function(resp){
                    $modal.find('div.modal-content').html(resp);
                    refreshFormUI();
                    $modal.modal('show', {backdrop: 'static'});
                },'html');
            });
        })
    </script>
@stop

