<ol class="breadcrumb bc-3" >
    <li>
        <a href="{{URL::to('admin')}}"><i class="fa fa-home"></i>管理首页</a>
    </li>
    @if(isset($stdName))
        <li>
            <a href="{{URL::to('admin/'.$stdName.'/list')}}">模块</a>
        </li>
        <li class="active">
            <strong>Portlets</strong>
        </li>
    @endif
</ol>