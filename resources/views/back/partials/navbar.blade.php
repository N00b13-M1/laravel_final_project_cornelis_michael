<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">EDUCA</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href='{{ route('home') }}'>
                <i class='bx bxs-server'></i>
                <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="{{ route('profiles.index') }}">
                <i class='bx bx-user'></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="{{ route('banners.index') }}">
                <i class='bx bx-chat'></i>
                <span class="links_name">Banner</span>
            </a>
            <span class="tooltip">Banner</span>
        </li>
        <li>
            <a href="{{ route('services.index') }}">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Services</span>
            </a>
            <span class="tooltip">Services</span>
        </li>
        <li>
            <a href="{{ route('courses.index') }}">
                <i class='bx bx-folder'></i>
                <span class="links_name">Courses</span>
            </a>
            <span class="tooltip">Courses</span>
        </li>
        <li>
            <a href="{{ route('professors.index') }}">
                <i class='bx bxs-server'></i>
                <span class="links_name">Professors</span>
            </a>
            <span class="tooltip">Professors</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">News</span>
            </a>
            <span class="tooltip">News</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Contact</span>
            </a>
            <span class="tooltip">Contact</span>
        </li>
        <li>
            <a href="">
                <i class='bx bx-cog'></i>
                <span class="links_name">Mailing list</span>
            </a>
            <span class="tooltip">Mailing list</span>
        </li>
        <li class="profile">
            <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <div class="name">Michael Cornelis</div>
                    <div class="job">Web designer</div>
                </div>
            </div>
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-log-out' id="log_out"></i>
                <span class="">LogOut</span>
            </a>
        </li>
    </ul>
</div>
