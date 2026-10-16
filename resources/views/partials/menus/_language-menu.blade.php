<!--begin::Language menu-->
<div class="app-navbar-item ms-1 ms-md-4">
    @php($currentLocale = app()->getLocale())
    @php($languages = config('locales'))

    <div id="kt_header_language_toggle"
        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end"
        aria-label="Select language">
        <img class="w-20px h-20px rounded-1"
            src="{{ asset('assets/media/flags/' . $languages[$currentLocale]['flag']) }}"
            alt="{{ $languages[$currentLocale]['name'] }}"
            data-language-current-flag />
    </div>

    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-175px" data-kt-menu="true">
        @foreach ($languages as $locale => $language)
            <div class="menu-item px-3">
                <form method="POST" action="{{ route('language.switch') }}">
                    @csrf
                    <button type="submit" name="locale" value="{{ $locale }}"
                        data-language-option="{{ $locale }}"
                        data-language-flag="{{ asset('assets/media/flags/' . $language['flag']) }}"
                        data-language-name="{{ $language['name'] }}"
                        class="menu-link d-flex px-5 w-100 border-0 bg-transparent {{ $currentLocale === $locale ? 'active' : '' }}">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/' . $language['flag']) }}" alt="" />
                        </span>
                        {{ $language['name'] }}
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
<!--end::Language menu-->
