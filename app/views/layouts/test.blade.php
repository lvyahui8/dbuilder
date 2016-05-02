<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>测试页</title>
    {{HTML::script('js/jquery.min.js')}}
</head>
<body>
{{$content}}

{{HTML::script('js/handsontable.full.min.js')}}
{{HTML::style('css/handsontable.full.min.css')}}
{{HTML::script('js/editTable.js')}}
</body>
</html>

