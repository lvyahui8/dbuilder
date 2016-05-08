@extends('admin.core.form')


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

                </div>
                <div class="tab-pane" id="perm">

                </div>
            </div>
        </div>
    </div>
@stop


@section('footScript')
    <script>
        $(document).ready(function () {
            var $tableSelect = $('select#db_table'),
                    $dbSelect = $('select#db_source'),
                    $fieldsContainer = $('div#fields'),
                    firstLoad = false;

            var loadDataSources = function (sourceName) {
                        $.get("{{URL::to('admin/data-source/tables?data_source=')}}" + sourceName + '&table={{$model->db_table}}', function (resp) {
                            if (resp.success) {
                                var $options = [];
                                for (table in resp.data.tables) {
                                    $options.push("<option value='" + table + "'"+(resp.data.selected == table ? 'selected' : '')+">" + table + "</option>");
                                }
                                $tableSelect.empty().append($options.join('')).data("selectBox-selectBoxIt").refresh();
                                if(!firstLoad) $tableSelect.trigger('change');
                                else firstLoad = false;
                            }
                        }, 'json');
                    },
                    loadFieldsConfig = function(params){
                        $.get('{{URL::to('admin/module/fields-config')}}',params,function(resp){
                            $fieldsContainer.html(resp);
                        },'html');
                    };
            $dbSelect.change(function (e) {
                loadDataSources($(this).val());
            });
            $tableSelect.change(function(e){
               loadFieldsConfig({"table":$tableSelect.val(),"connection":$dbSelect.val()})
            });
            loadDataSources($dbSelect.val());
            @if($model->id)
                firstLoad = true;
                loadFieldsConfig({"module_name":'{{$model->name}}'});
            @else
                //loadFieldsConfig({"table":$tableSelect.val(),"connection":$dbSelect.val()});
            @endif
        })
    </script>
@stop

