<header id="header-sticky" class="header-6">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <a href="#" class="logo">
                    <img width="60px" src="{{ asset('build/assets/img/logo/logo.svg') }}" alt="logo-img">
                </a>
                <div class="header-left">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('landing.home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('landing.about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>