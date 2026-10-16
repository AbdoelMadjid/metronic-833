<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-element-11 fs-2"></i></span><span
                            class="menu-title">Dashboards</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('home') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Default</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.dashboards.ecommerce') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">eCommerce</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.dashboards.projects') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Projects</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.dashboards.online_courses') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Online
                                    Courses</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.dashboards.marketing') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Marketing</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                        <div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse">
                            <!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.bidding') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Bidding</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.pos') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span class="menu-title">POS
                                        System</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.call_center') }}"><span
                                        class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Call Center</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.logistics') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Logistics</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.website_analytics') }}"><span
                                        class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Website Analytics</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.finance_performance') }}"><span
                                        class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Finance Performance</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.store_analytics') }}"><span
                                        class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Store Analytics</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.social') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Social</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.delivery') }}"><span
                                        class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Delivery</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.crypto') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Crypto</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.school') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">School</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.dashboards.podcast') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Podcast</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="{{ route('metronic.landing') }}"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Landing</span></a><!--end:Menu link--></div>
                            <!--end:Menu item-->
                        </div>
                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                    data-kt-toggle-text="Show Less">
                                    <span data-kt-toggle-text-target="true">Show 12 More</span> <i
                                        class="ki-outline ki-minus-square toggle-on fs-2 me-0"></i><i
                                        class="ki-outline ki-plus-square toggle-off fs-2 me-0"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item pt-5"><!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                    </div><!--end:Menu content-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-address-book fs-2"></i></span><span class="menu-title">User
                            Profile</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.overview') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.projects') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Projects</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.campaigns') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Campaigns</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.documents') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Documents</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.followers') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Followers</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.user_profile.activity') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-element-plus fs-2"></i></span><span
                            class="menu-title">Account</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.overview') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.settings') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.security') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Security</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.activity') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.billing') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Billing</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.statements') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Statements</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.referrals') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Referrals</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.api_keys') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">API
                                    Keys</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.account.logs') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Logs</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i class="ki-outline ki-user fs-2"></i></span><span
                            class="menu-title">Authentication</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Corporate
                                    Layout</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.corporate.sign_in') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-in</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.corporate.sign_up') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-up</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.corporate.two_factor') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Two-Factor</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.corporate.reset_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Reset Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.corporate.new_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">New Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Overlay
                                    Layout</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.overlay.sign_in') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-in</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.overlay.sign_up') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-up</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.overlay.two_factor') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Two-Factor</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.overlay.reset_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Reset Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.overlay.new_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">New Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Creative
                                    Layout</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.creative.sign_in') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-in</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.creative.sign_up') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-up</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.creative.two_factor') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Two-Factor</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.creative.reset_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Reset Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.creative.new_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">New Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Fancy
                                    Layout</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.fancy.sign_in') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-in</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.fancy.sign_up') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sign-up</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.fancy.two_factor') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Two-Factor</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.fancy.reset_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Reset Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.layouts.fancy.new_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">New Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Email
                                    Templates</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.welcome_message') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Welcome Message</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.reset_password') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Reset Password</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.subscription_confirmed') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Subscription Confirmed</span></a><!--end:Menu link-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.card_declined') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Credit Card Declined</span></a><!--end:Menu link-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.promo_1') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Promo 1</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.promo_2') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Promo 2</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.authentication.email.promo_3') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Promo 3</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.extended.multi_steps_sign_up') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Multi-steps Sign-up</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.welcome') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Welcome Message</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.verify_email') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Verify Email</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.coming_soon') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Coming Soon</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.password_confirmation') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Password Confirmation</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.account_deactivated') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Account Deactivation</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.error_404') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Error 404</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.authentication.general.error_500') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Error 500</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i class="ki-outline ki-file fs-2"></i></span><span
                            class="menu-title">Corporate</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div
                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.about') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">About</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.team') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Our
                                    Team</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.contact') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Contact
                                    Us</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.licenses') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Licenses</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.sitemap') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Sitemap</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-39 fs-2"></i></span><span
                            class="menu-title">Social</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.social.feeds') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Feeds</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.social.activity') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Activty</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.social.followers') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Followers</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.social.settings') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i class="ki-outline ki-bank fs-2"></i></span><span
                            class="menu-title">Blog</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.blog.home') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Blog
                                    Home</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.blog.post') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Blog
                                    Post</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-chart-pie-3 fs-2"></i></span><span
                            class="menu-title">FAQ</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.faq.classic') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">FAQ
                                    Classic</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.faq.extended') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">FAQ
                                    Extended</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-bucket fs-2"></i></span><span
                            class="menu-title">Pricing</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.pricing') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Column
                                    Pricing</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.pricing.table') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Table
                                    Pricing</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i class="ki-outline ki-call fs-2"></i></span><span
                            class="menu-title">Careers</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.careers.list') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Careers
                                    List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.pages.careers.apply') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Careers
                                    Apply</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-color-swatch fs-2"></i></span><span
                            class="menu-title">Utilities</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Modals</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">General</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.general.invite_friends') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Invite Friends</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.general.view_users') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">View Users</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.general.select_users') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Select Users</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.general.upgrade_plan') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Upgrade Plan</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.general.share_earn') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Share & Earn</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Forms</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.forms.new_target') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">New Target</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.forms.new_card') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">New Card</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.forms.new_address') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">New Address</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.forms.create_api_key') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Create API Key</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.forms.bidding') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Bidding</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Wizards</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.create_app') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Create App</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.create_campaign') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Create Campaign</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.create_account') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Create Business
                                                    Acc</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.create_project') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Create Project</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.top_up_wallet') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Top Up Wallet</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.offer_a_deal') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Offer a Deal</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.wizards.two_factor_authentication') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Two Factor Auth</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Search</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.search.users') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Users</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('metronic.utilities.modals.search.select_location') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Select Location</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Search</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.search.horizontal') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Horizontal</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.search.vertical') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Vertical</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.search.users') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Users</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.search.select_location') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Location</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Wizards</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.horizontal') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Horizontal</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.vertical') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Vertical</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.two_factor_authentication') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Two Factor Auth</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.create_app') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Create App</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.create_campaign') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Create Campaign</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.create_account') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Create Account</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.create_project') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Create Project</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.modals.wizards.top_up_wallet') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Top Up Wallet</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.utilities.wizards.offer_a_deal') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Offer a Deal</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-document fs-2"></i></span><span
                            class="menu-title">Forms</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                                class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Editors</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.forms.editors.ckeditor_classic') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">CKEditor Classic</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.forms.editors.ckeditor_balloon') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">CKEditor Balloon</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.forms.editors.ckeditor_balloon_block') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">CKEditor Balloon Block</span></a><!--end:Menu link-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.forms.editors.ckeditor_inline') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">CKEditor Inline</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.forms.editors.ckeditor_document') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">CKEditor Document</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-element-7 fs-2"></i></span><span
                            class="menu-title">Widgets</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.lists') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Lists</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.statistics') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Statistics</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.charts') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Charts</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.mixed') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Mixed</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.tables') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Tables</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.widgets.feeds') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Feeds</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item pt-5"><!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                    </div><!--end:Menu content-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-41 fs-2"></i></span><span
                            class="menu-title">Projects</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.list') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">My
                                    Projects</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.project') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">View Project</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.targets') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Targets</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.budget') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Budget</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.users') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Users</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.files') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Files</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.activity') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.projects.settings') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-basket fs-2"></i></span><span
                            class="menu-title">eCommerce</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Catalog</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.products') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Products</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.categories') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Categories</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Add Product</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Edit Product</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.add_category') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Add Category</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.catalog.edit_category') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Edit Category</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Sales</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.sales.listing') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Orders Listing</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.sales.details') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Order Details</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.sales.add_order') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Add Order</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.sales.edit_order') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Edit Order</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Customers</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.customers.listing') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customer Listing</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.customers.details') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customer Details</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Reports</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.reports.view') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Products Viewed</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.reports.sales') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Sales</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.reports.returns') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Returns</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.reports.customer_orders') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Customer Orders</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.ecommerce.reports.shipping') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Shipping</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.ecommerce.settings') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-25 fs-2"></i></span><span
                            class="menu-title">Contacts</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.contacts.getting_started') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Getting Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.contacts.add_contact') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Add Contact</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.contacts.edit_contact') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Edit Contact</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.contacts.view_contact') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">View Contact</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-chart fs-2"></i></span><span class="menu-title">Support
                            Center</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.support_center.overview') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Tickets</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.support_center.tickets.list') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Tickets List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.support_center.tickets.view') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">View Ticket</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Tutorials</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.support_center.tutorials.list') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Tutorials List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.support_center.tutorials.post') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Tutorial Post</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.support_center.faq') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">FAQ</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.support_center.licenses') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Licenses</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.support_center.contact') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Contact Us</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-28 fs-2"></i></span><span class="menu-title">User
                            Management</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Users</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.user_management.users.list') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Users List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.user_management.users.view') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">View User</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Roles</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.user_management.roles.list') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Roles List</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.user_management.roles.view') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">View Role</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.user_management.permissions') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Permissions</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-38 fs-2"></i></span><span
                            class="menu-title">Customers</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.customers.getting_started') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Getting Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.customers.list') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                    Listing</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.customers.view') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                    Details</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-map fs-2"></i></span><span
                            class="menu-title">Subscription</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.subscriptions.getting_started') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Getting Started</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.subscriptions.list') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Subscription List</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.subscriptions.add') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Add Subscription</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.subscriptions.view') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">View Subscription</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-credit-cart fs-2"></i></span><span class="menu-title">Invoice
                            Manager</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View
                                    Invoices</span><span
                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.invoices.view.invoice_1') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 1</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.invoices.view.invoice_2') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 2</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('metronic.apps.invoices.view.invoice_3') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Invoice 3</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.invoices.create') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Create Invoice</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-switch fs-2"></i></span><span class="menu-title">File
                            Manager</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.file_manager.folders') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Folders</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.file_manager.files') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Files</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.file_manager.blank') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Blank Directory</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.file_manager.settings') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-sms fs-2"></i></span><span class="menu-title">Inbox</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.inbox.listing') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Messages</span><span class="menu-badge"><span
                                        class="badge badge-success">3</span></span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.inbox.compose') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Compose</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.inbox.reply') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">View &
                                    Reply</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-message-text-2 fs-2"></i></span><span
                            class="menu-title">Chat</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.chat.private') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Private
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.chat.group') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Group
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.apps.chat.drawer') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Drawer
                                    Chat</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                        href="{{ route('metronic.apps.calendar') }}"><span class="menu-icon"><i
                                class="ki-outline ki-calendar-8 fs-2"></i></span><span
                            class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item pt-5"><!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
                    </div><!--end:Menu content-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-element-7 fs-2"></i></span><span class="menu-title">Layout
                            Options</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.layouts.light_sidebar') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Light Sidebar</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.layouts.dark_sidebar') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Dark Sidebar</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.layouts.light_header') }}"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Light Header</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.layouts.dark_header') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Dark
                                    Header</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-text-align-center fs-2"></i></span><span
                            class="menu-title">Toolbars</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.toolbars.classic') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Classic</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.toolbars.saas') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">SaaS</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.toolbars.accounting') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Accounting</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.toolbars.extended') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Extended</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.toolbars.reports') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Reports</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span
                        class="menu-link"><span class="menu-icon"><i
                                class="ki-outline ki-menu fs-2"></i></span><span
                            class="menu-title">Asides</span><span
                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.asides.aside_1') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Filters</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.asides.aside_2') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Segments</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.asides.aside_3') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Shipment
                                    History</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.asides.aside_4') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Courier
                                    Activity</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="{{ route('metronic.asides.aside_5') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                        href="{{ route('metronic.layout_builder') }}"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-13 fs-2"></i></span><span class="menu-title">Layout
                            Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item pt-5"><!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
                    </div><!--end:Menu content-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                        href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                        target="_blank"><span class="menu-icon"><i
                                class="ki-outline ki-rocket fs-2"></i></span><span
                            class="menu-title">Components</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                        href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"><span
                            class="menu-icon"><i class="ki-outline ki-abstract-26 fs-2"></i></span><span
                            class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                        target="_blank"><span class="menu-icon"><i
                                class="ki-outline ki-code fs-2"></i></span><span class="menu-title">Changelog
                            v8.3.3</span></a><!--end:Menu link--></div><!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
