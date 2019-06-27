<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'liang') - 智慧门店</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin-lte/dist/css/AdminLTE.min.css')}}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app" class="{{ route_class() }}-page">
        <div class="wrapper">
            @include('layouts._header')
            @include('layouts._sidebar')

            <div class="content-wrapper">

                @yield('section')

                <section class="content container-fluid">

                    @yield('content')

                </section>
            </div>

            @include('layouts._footer')
        </div>
    </div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="/admin-lte/dist/js/adminlte.min.js"></script>

<script>
    $(function(){
        $('.nav-sidebar li:not(.nav-item) > a').on('click', function(){
            var $parent = $(this).parent().addClass('active');
            $parent.siblings('.treeview.active').find('> a').trigger('click');
            $parent.siblings().removeClass('active').find('li').removeClass('active');
        });
        $('.nav-sidebar a').each(function(){
            if(this.href === window.location.href){
                $(this).addClass('active');
                $(this).parent().addClass('active');
            }
        });
    });
</script>


</body>

</html>