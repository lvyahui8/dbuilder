@section('styles')

@stop
@section('scripts')
{{HTML::script('assets/js/toastr.js')}}
@stop

@section('footScript')
    <script>
        setTimeout(function()
        {
            var opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
                "toastClass": "black",
                "onclick": null,
                "showDuration": "3000",
                "hideDuration": "10000",
                "timeOut": "50000",
                "extendedTimeOut": "10000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("你看到的是博客备份数据. 同时, 已关闭编辑和删除功能.", "注意", opts);
        }, 300);
    </script>
@stop