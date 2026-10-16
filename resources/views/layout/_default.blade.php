<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        @hasSection('header')
            @yield('header')
        @else
            @include('layout.partials._header')
        @endif

        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @if (str_contains($__env->yieldContent('body_attributes'), 'data-kt-app-sidebar-enabled="true"'))
                @hasSection('sidebar')
                    @yield('sidebar')
                @else
                    @include('layout.partials._sidebar')
                @endif
            @endif

            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    @hasSection('toolbar')
                        @yield('toolbar')
                    @else
                        @include('layout.partials._toolbar')
                    @endif

                    @hasSection('content')
                        @yield('content')
                    @else
                        @include('layout.partials._content')
                    @endif
                </div>

                @hasSection('footer')
                    @yield('footer')
                @else
                    @include('layout.partials._footer')
                @endif
            </div>

            @hasSection('aside')
                @yield('aside')
            @endif
        </div>
    </div>
</div>
