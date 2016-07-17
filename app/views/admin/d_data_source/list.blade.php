<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">数据源列表</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{URL::to('admin/d-data-source/edit')}}" class="btn btn-primary">新建</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-bordered responsive table-hover table-striped">
            <thead>
            <tr>
                <th>数据源名</th>
                <th>类型</th>
                <th>地址</th>
                <th>端口</th>
                <th>数据库</th>
                <th>用户名</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datasources as $name => $datasource)
                <tr>
                    <td>{{$name}}</td>
                    <td>{{$datasource['driver']}}</td>
                    <td>{{$datasource['host']}}</td>
                    <td>{{$datasource['port']}}</td>
                    <td>{{$datasource['database']}}</td>
                    <td>{{$datasource['username']}}</td>
                    <td>
                        @if($name !== 'core')
                            <a href="{{URL::to('admin/d-data-source/edit/'.$name)}}" class="btn btn-primary btn-sm">编辑</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
