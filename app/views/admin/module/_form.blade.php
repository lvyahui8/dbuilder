@extends('admin.core.form')

@section('form.bottom')

@stop


@section('footScript')
    <script>
        $(document).ready(function () {
            var $tableSelect = $('select#db_table'),
                    $dbSelect = $('select#db_source');

            var loadDataSources = function (sourceName) {
                $.get("{{URL::to('admin/data-source/tables?data_source=')}}" + sourceName, function (resp) {
                    if(resp.success){
                        var $options = [];
                        for(table in resp.data.tables){
                            $options.push("<option value='"+table+"'>"+table+"</option>");
                        }
                        $tableSelect.empty().append($options.join('')).data("selectBox-selectBoxIt").refresh();
                    }
                }, 'json');
            };
            $dbSelect.change(function (e) {
                loadDataSources($(this).val());
            });
            loadDataSources($dbSelect.val());
        })
    </script>
@stop

