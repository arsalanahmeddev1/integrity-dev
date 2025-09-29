    <!--==============================
    Header Area
        ==============================-->
    <header class="header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="header-container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('/assets/web/images/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="primary-navs">
                            <div class="primary-navs-inner">
                                <ul class="primary-navs-list d-flex align-items-center justify-content-between gap-4">
                                    <div class="close-icon">
                                        <i class="fa-solid fa-xmark menu-toggle"></i>
                                    </div>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('key-features') ? 'active' : '' }}" href="{{ route('key-features') }}">Key Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('packages') ? 'active' : '' }}" href="{{ route('packages') }}">Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact</a>
                                    </li>
                                    @if (!Auth::check())
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navs {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                                    </li>
                                    @endif
                                    @if (Auth::check())
                                        <li class="nav-item">
                                            <a class="navs {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                    @endif
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu-icon d-flex justify-content-end">
                        <i class="fa-solid fa-bars menu-toggle"></i>
                      </div>
                </div>
            </div>
        </div>
    </header>
