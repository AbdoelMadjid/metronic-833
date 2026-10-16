<!DOCTYPE html>
@inject('menuTranslationCatalog', 'App\\Support\\MenuTranslationCatalog')
<html lang="{{ app()->getLocale() }}">

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
    <script>
        window.metronicMenuTranslations = @js($menuTranslationCatalog->forLocale(app()->getLocale()));
    </script>
    <script src="{{ asset('assets/js/metronic-menu-translations.js') }}"></script>
    @yield('page_assets')
    {!! trim($__env->yieldContent('head_assets')) !!}
    @include('partials.trackers._ga-tag-manager-for-head')
</head>

@php
    $bodyAttributes = trim($__env->yieldContent('body_attributes', 'id="kt_app_body" class="app-default"'));

    if (str_contains($bodyAttributes, 'data-kt-app-toolbar-enabled="true"')) {
        $bodyAttributes =
            preg_replace('/\sdata-kt-app-toolbar-fixed(?:-mobile)?="[^"]*"/', '', $bodyAttributes) ?? $bodyAttributes;
        $bodyAttributes .= ' data-kt-app-toolbar-fixed="true" data-kt-app-toolbar-fixed-mobile="true"';
    }
@endphp

<body {!! $bodyAttributes !!}>
    @include('partials.theme-mode._init')
    @include('partials.trackers._ga-tag-manager-for-body')

    @hasSection('app_layout')
        @yield('app_layout')
    @else
        @include('layout._default')
    @endif

    @include('partials.drawers._activity-drawer')
    @include('partials.drawers._chat-messenger')
    @include('partials.engage-new._main')
    {!! trim($__env->yieldContent('body_extras')) !!}

    <script>
        var hostUrl = "{{ asset('assets') }}/";
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    {!! trim($__env->yieldContent('page_scripts')) !!}
    <script src="{{ asset('assets/js/metronic-menu-active.js') }}"></script>
</body>

</html>
