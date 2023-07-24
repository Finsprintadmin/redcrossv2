<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{url('/')}}" class="header-logo">
            <img src="{{asset('assets/images/brand-logos/krc-logo.png')}}" alt="logo" class="krc-logo">
{{--            <img src="{{asset('assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">--}}
{{--            <img src="{{asset('assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">--}}
{{--            <img src="{{asset('assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">--}}
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">DASHBOARD</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->

                    <a href="{{route('home')}}" class="side-menu__item">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">SECTIONS</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                    <a href="{{route('pledges')}}" class="side-menu__item">
                        <i class="bx bx-box side-menu__icon"></i>
                        <span class="side-menu__label">Pledges</span>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                    <a href="{{route('transactions')}}" class="side-menu__item">
                        <i class="bx bx-medal side-menu__icon"></i>
                        <span class="side-menu__label">Transactions</span>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                    <a href="{{route('donors')}}" class="side-menu__item">
                        <i class="bx bx-file side-menu__icon"></i>
                        <span class="side-menu__label">Donors</span>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                    <a href="{{route('campaigns')}}" class="side-menu__item">
                        <i class="bx bx-party side-menu__icon"></i>
                        <span class="side-menu__label">Campaigns</span>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">SETTINGS</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->

                    <a href="{{route('users')}}" class="side-menu__item">
                        <i class="bx bx-grid-alt side-menu__icon"></i>
                        <span class="side-menu__label">Users</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                    <a href="{{route('roles')}}" class="side-menu__item">
                        <i class="bx bx-layer side-menu__icon"></i>
                        <span class="side-menu__label">Roles</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                <a href="{{route('logs')}}" class="side-menu__item">
                    <i class="bx bx-layer side-menu__icon"></i>
                    <span class="side-menu__label">Logs</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>

                <!-- End::slide -->

                <!-- Start::slide -->

                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="bx bx-layer side-menu__icon"></i>
                    <span class="side-menu__label">APIs</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>

                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
