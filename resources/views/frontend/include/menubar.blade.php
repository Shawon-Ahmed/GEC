<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('homepage') }}">
                                <img alt="Porto" width="82" height="40" src="{{ asset('frontend/img/logo.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{ route('homepage') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('aboutUs') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="{{ route('service') }}">
                                                Service
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Corporate Finance
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Corporate Restructuring
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Economic Consulting
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Litigation Consulting
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Strategic Consulting
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="demo-business-consulting-expertise-detail.html">
                                                        Tech Consulting
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('project') }}">
                                                Project
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('team') }}">
                                                Team
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('blog') }}">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('contactUs') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>