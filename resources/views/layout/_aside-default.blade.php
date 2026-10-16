<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        @include('layout.partials._header')

        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @include('layout.partials._sidebar')

            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    @yield('toolbar')
                    @yield('content')
                </div>

                @include('layout.partials._footer')
            </div>

            @yield('aside')
        </div>
    </div>
</div>
