
{{--本页面特殊需要的CSS--}}
@yield('styles','')

{{--公共JS--}}
{{HTML::script(asset('assets/js/gsap/main-gsap.js'))}}
{{HTML::script(asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js'))}}
{{HTML::script(asset('assets/js/bootstrap.js'))}}
{{HTML::script(asset('assets/js/joinable.js'))}}
{{HTML::script(asset('assets/js/resizeable.js'))}}
{{HTML::script(asset('assets/js/joinable.js'))}}
{{HTML::script(asset('assets/js/api.js'))}}
{{--本页面特殊需要的js--}}
@yield('scripts','')
{{HTML::script('assets/js/custom.js')}}
{{HTML::script('assets/js/commons.js')}}
@yield('footScript','')