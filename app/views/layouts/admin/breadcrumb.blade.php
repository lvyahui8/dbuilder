<ol class="breadcrumb bc-3" >
    <li>
        <a href="{{URL::to('admin')}}"><i class="fa fa-home"></i>管理首页</a>
    </li>
    @if(isset($reducName))
        <li>
            <a href="{{URL::to('admin/'.$reducName.'/list')}}">模块</a>
        </li>
        @if(isset($model))
            <li class="active">
                <strong>{{$model->id}}</strong>
            </li>
        @endif
    @endif
</ol>