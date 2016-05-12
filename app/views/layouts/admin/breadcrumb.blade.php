<ol class="breadcrumb bc-3" >
    <li>
        <a href="{{URL::to('admin')}}"><i class="fa fa-home"></i>管理首页</a>
    </li>
    @if(isset($reducName))
        <li>
            <a href="{{URL::to('admin/'.$reducName.'/list')}}">模块</a>
        </li>
        <li class="active">
            <strong>Portlets</strong>
        </li>
    @endif
</ol>