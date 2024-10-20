<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#cms" data-bs-toggle="collapse">
                        <i class="fa-brands fa-font-awesome"></i>
                        CMS <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="cms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('view.sitesetting')}}">
                                    <span> Sitesetting </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.banner')}}">
                                    <span> Banner </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.contact')}}">
                                    <span> Contact </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('view.socialmedia')}}">
                                    <span> Social Media </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('view.aboutus')}}"><i class="fa fa-film"></i>
                        <span> About Us </span></a>
                </li>

                {{-- <li>
                    <a href="#message" data-bs-toggle="collapse">
                        <i class="far fa-comment"></i>
                        Messages <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="message">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">
                                    <span> Message </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span> Special Message </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li>
                    <a href="#">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span> Notice/Downloads/Events</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="#">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span> Publication</span>
                    </a>
                </li> --}}

                <li>
                    <a href="#gallery" data-bs-toggle="collapse">
                        <i class="fa fa-film"></i>
                        Gallery <span class="arrow-down" style="float:right"></span>
                    </a>
                    <div class="collapse" id="gallery">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">
                                    <span> Videos </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span> Gallery and Fee Structure </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('view.destination')}}">
                        <i class="fa fa-location"></i>
                        <span> Destination </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('view.testimonial')}}">
                        <i class="fa-solid fa-warehouse"></i>
                        <span> Testimonial </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->
</div>
<!-- Sidebar -left -->