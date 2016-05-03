<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>若尘博客</title>
    {{HTML::style(asset(asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')))}}
{{HTML::style(asset('assets/css/font-icons/entypo/css/entypo.css'))}}
{{HTML::style(asset('assets/css/font-icons/font-awesome/css/font-awesome.min.css'))}}
{{HTML::style(asset('assets/css/bootstrap.css'))}}
{{HTML::style(asset('assets/css/neon-core.css'))}}
{{HTML::style(asset('assets/css/neon-theme.css'))}}
{{HTML::style(asset('assets/css/neon-forms.css'))}}
{{HTML::style(asset('assets/css/custom.css'))}}
@yield('headStyle','')
{{HTML::script(asset('assets/js/jquery-1.11.0.min.js'))}}
<!--[if lt IE 9]>{{HTML::script(asset('assets/js/ie8-responsive-file-warning.js'))}}<![endif]-->

    <!--[if lt IE 9]>
    {{HTML::script(asset('assets/js/html5shiv.js'))}}
    {{HTML::script(asset('assets/js/respond.min.js'))}}
    <![endif]-->
</head>

