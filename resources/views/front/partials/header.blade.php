<header class="site-header">
    <div id="main-header" class="main-header header-sticky">
        <div class="inner-header container clearfix">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            </div>
            <div class="header-right-toggle pull-right hidden-md hidden-lg">
                <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
            </div>
            <div class="header-info hidden-sm hidden-xs">
                <ul>
                    <li><i class="fa fa-phone"></i>+49 233 322 333</li>
                    <li><i class="fa fa-envelope-o"></i>your@website.com</li>
                    <li class="language">
                    <p><a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-down"></i></a></p>
                    <div id="example" class="more">
                        <p><a href="#" id="example-hide" class="hideLink"
                        onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-up"></i></a></p>
                        <form method="get" id="blog-search" class="blog-search">
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">Dutch</a></li>
                                <li><a href="#">Albanian</a></li>
                            </ul>
                        </form>
                    </div>
                    </li>
                    @if (Auth::check())
                        <a href="{{ route('backend') }}">{{ Auth::user()->name }} logged in </a>
                    @else
                    <ul>
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                    @endif
                </ul>
            </div>
            <nav class="main-navigation text-left hidden-xs hidden-sm">
                <ul>
                    <li><a href="/" class="">Home</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="homepage-2.html">Homepage 2</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('courses') }}" class="">Courses</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="courses-grid.html">Courses Grids</a></li>
                            <li><a href="courses-list.html">Courses List</a></li>
                            <li><a href="single-course.html">Single Course</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('events') }}" class="">Events</a>
                        {{-- <li><a href="#" class="has-submenu">Events</a> --}}
                        {{-- <ul class="sub-menu">
                            <li><a href="classic-events.html">Classic Events</a></li>
                            <li><a href="calendar-events.html">Calendar Events</a></li>
                            <li><a href="single-event.html">Single Event</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('professors') }}">Teachers</a></li>
                        {{-- <ul class="sub-menu"> --}}
                            {{-- <li><a href="about.html">About Us</a></li> --}}
                            {{-- <li><a href="single-teacher.html">Single Teacher</a></li> --}}
                            {{-- <li><a href="gallery-4.html">Gallery 4 Columns</a></li>
                            <li><a href="gallery-3.html">Gallery 3 Columns</a></li> --}}
                        {{-- </ul> --}}
                    </li>
                    <li><a href="{{ route('news') }}" class="">News</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="classic-news.html">Classic News</a></li>
                            <li><a href="grid-news.html">Grid News</a></li>
                            <li><a href="single-post.html">Single Post</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="#search"><i class="fa fa-search"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
