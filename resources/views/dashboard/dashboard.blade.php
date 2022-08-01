<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8"/>
    {{--    <title>{{ config('app.name', 'Store') }} | {{ $title??'' }}</title>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <link href="{{ asset('theme/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme/assets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme/assets/vendors/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('theme/assets/demo/default/media/img/logo/favicon.ico') }}"/>

</head>
<!-- end::Head -->
<!-- begin::Body -->
<body
    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <h3 style="color: #868aa8;margin-bottom: -1px;">لوحة التحكم</h3>
                            {{--                                <img alt="" src="http://localhost:8000/theme/assets/demo/default/media/img/logo/logo_default_dark.png" />--}}

                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->

                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic">
                                        <img src="http://localhost:8000/theme/assets/app/media/img/users/user4.jpg"
                                             class="m--img-rounded m--marginless" alt=""/>

                                    </span>
                                        <span class="m-topbar__username m--hide"></span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center"
                                                 style="background: url(http://localhost:8000/theme/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">

                                                <div class="m-card-user m-card-user--skin-dark">


                                                    <div class="m-card-user__pic">

                                                        <img
                                                            src="http://localhost:8000/theme/assets/app/media/img/users/user4.jpg"
                                                            class="m--img-rounded m--marginless" alt=""/>



                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">{!! Auth::user()->name !!}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>

                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">

                                                            <a class="btn btn-primary"  href="{{ route('logout') }}"
                                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                تسجيل الخروج
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
                class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                 m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">


{{--                    @if(Auth::user()->role == 'admin')--}}
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                            <a href="" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">الصالات</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">الصالات</span></span>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ asset('dashboard/hall') }}"
                                           class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">ادارة الصالات</span></a></li>

                                    <li class="m-menu__item " aria-haspopup="true"><a
                                            href="{{ asset('dashboard/hall/create') }}"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">اضافة صالة</span></a></li>
                                </ul>
                            </div>
                        </li>
{{--                    @endif--}}


                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text">الحجوزات</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span class="m-menu__link-text"></span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href="{{ asset('dashboard/reservation') }}"
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">جدول الحجوزات</span></a></li>

                            </ul>
                        </div>
                    </li>
                    @if(Auth::user()->role == 'admin')--}}
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">إدارة المالكيين</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span class="m-menu__link-text"></span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href="{{ route('ownerofhalls.index') }}"
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">عرض المالكيين</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href=" {{ asset('dashboard/ownerofhalls/create') }}"
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">اضافة مالك جديد</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href=" {{ asset('dashboard/ownerofhalls/show') }}"
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">عرض طلبات التسجيل</span></a></li>

                            </ul>
                        </div>
                    </li>



                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text">المحافظة</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span class="m-menu__link-text"></span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href="{{ asset('dashboard/governorate') }} "
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">عرض المحافظات</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                        href="{{ asset('dashboard/governorate/create') }} "
                                        class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">اضافة محافظة</span></a></li>

                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="container">
                    @yield('home')

                    @yield('createCA')
                    @yield('editCA')
                    @yield('indexCA')

                    @yield('createST')
                    @yield('editST')
                    @yield('indexST')

                    @yield('reservation')
                    @yield('governoratec')
                    @yield('governoratei')
                    @yield('governoratee')

                    @yield('o')
                    @yield('c')
                    @yield('e')
                    @yield('r')


                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item	m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
{{--                    2021 &copy; power by <a href="https://google.com" class="m-link">Company name</a>--}}
                </span>
                </div>
            </div>
        </div>
    </footer>    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!--begin::Global Theme Bundle -->
<script src="http://localhost:8000/theme/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="http://localhost:8000/theme/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors -->
<script src="http://localhost:8000/theme/assets/vendors/custom/datatables/datatables.bundle.js"
        type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Scripts -->
<script src="http://localhost:8000/theme/assets/demo/default/custom/crud/datatables/basic/basic.js"
        type="text/javascript"></script>
</body>
<!-- end::Body -->
@yield('scripts')
</html>
