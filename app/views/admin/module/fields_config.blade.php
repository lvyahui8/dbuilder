<table class="table table-bordered responsive">
    <thead>
    <tr>
        <th>字段</th>
        <th>Label</th>
        <th>包含在表单</th>
        <th>隐藏在表单</th>
        <th>更多配置</th>
    </tr>
    </thead>
    <tbody>
    @foreach($fieldsConfig as $field => $fieldConf)
        <tr>
            <td>{{$field}}</td>
            <td><input type="text" class="form-control input-sm" name="fields[{{$field}}][label]" value="{{$fieldConf['label']}}"/></td>
            <td> <div class="checkbox">
                    <label>
                        <input type="checkbox" name="fields[{{$field}}][form][show]" @if($fieldConf['form']['show']) checked @endif >
                    </label>
                </div> </td>
            <td> <div class="checkbox">
                    <label>
                        <input type="checkbox"  @if($fieldConf['form']['hidden']) checked @endif >
                    </label>
                </div> </td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>