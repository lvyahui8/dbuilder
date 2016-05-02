<!DOCTYPE html>
<html lang="zh-CN">
@include('layouts.admin.head')
<body class="page-body {{-- page-fade--}}" data-url="http://neon.dev">
<div class="page-container">
    @include('layouts.admin.sidebar')
    <div class="main-content">
        @include('layouts.admin.top')
        <hr>
        {{$content}}
        @include('layouts.admin.footer')
    </div>
</div>
@include('layouts.admin.modals')
@include('layouts.admin.foot')
</body>
</html>