<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/" />
    <title>@yield('page_title', 'Metronic 8.3.3')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metronic-layout.css') }}" rel="stylesheet" type="text/css" />
    @yield('page_assets')
    {!! trim($__env->yieldContent('head_assets')) !!}
    @include('partials.trackers._ga-tag-manager-for-head')
</head>

<body {!! trim($__env->yieldContent('body_attributes', 'id="kt_app_body" class="app-default"')) !!}>
    @include('partials.theme-mode._init')
    @include('partials.trackers._ga-tag-manager-for-body')

    @hasSection('app_layout')
        @yield('app_layout')
    @else
        @include('layout._default')
    @endif

    @include('partials.engage-new._main')
    {!! trim($__env->yieldContent('body_extras')) !!}

    <script>
        var hostUrl = "{{ asset('assets') }}/";
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    {!! trim($__env->yieldContent('page_scripts')) !!}
    <script src="{{ asset('assets/js/metronic-menu-active.js') }}"></script>
</body>

</html>
