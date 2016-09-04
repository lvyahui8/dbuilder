{{--继承自Core CRUD 模块的视图--}}
@extends('admin.core.list')

{{--在list右部添加视图内容--}}
@section('list.right')

@stop

{{--在list下部添加视图内容--}}
@section('list.bottom')

@stop

{{--此页面单独需要的css文件，生成的link标签位于页面body尾部--}}
@section('styles')

@stop
{{--此页面单独需要的js文件，生成的script标签位于commons.js之前，公共js之后--}}
@section('scripts')

@stop
{{--在commons.js之后运行的js代码片段--}}
@section('footScript')
<script>
    $(document).ready(function () {

    })
</script>
@stop
