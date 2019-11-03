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
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("你操作的是博客数据库的一份拷贝，不会影响真实博客数据", "注意", opts);
        }, 300);
    </script>
@stop