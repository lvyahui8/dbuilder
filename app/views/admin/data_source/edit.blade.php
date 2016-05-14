<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">@if($dataSource['name'])  编辑<code>#{{$dataSource['name']}}</code>@else 新建  @endif</h3>
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <form action="{{URL::to('admin/data-source/edit')}}" class="form-horizontal" id="datasource-form" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label col-sm-4">数据源名</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" value="{{$dataSource['name']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="driver" class="control-label col-sm-4">驱动类型</label>
                        <div class="col-sm-8">
                            <select name="driver" id="driver" class="selectboxit">
                                @foreach(SiteHelpers::supportDrivers() as $driver => $text)
                                    <option value="{{$driver}}" @if($driver === $dataSource['driver']) selected @endif>{{$text}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="host" class="control-label col-sm-4">地址</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="host" id="host" value="{{$dataSource['host']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="port" class="control-label col-sm-4">端口</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="port" id="port" value="{{$dataSource['port']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="database" class="control-label col-sm-4">数据库</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="database" id="database" value="{{$dataSource['database']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label col-sm-4">用户</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" id="username" value="{{$dataSource['username']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label col-sm-4">密码</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" id="password" value="{{$dataSource['password']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button class="btn btn-primary" type="submit">保存</button>
                            <a class="btn btn-default connection-test">测试</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('styles')
    {{HTML::style('assets/js/selectboxit/jquery.selectBoxIt.css')}}
@append

@section('scripts')
    {{HTML::script('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}
    {{HTML::script('assets/js/toastr.js')}}
@append

@section('footScript')
    <script>
        $(document).ready(function(){
            var $form = $('form#datasource-form'),opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
                "toastClass": "black",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            $('a.connection-test').click(function(){
                $.post("{{URL::to('admin/data-source/test')}}",$form.serialize(),function(resp){
                    if(resp.success){
                        toastr.success("连接成功", opts);
                    }else{
                        toastr.error("连接失败",opts);
                    }
                },'json');
            });
        });
    </script>
@stop