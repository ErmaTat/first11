<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='index.htm'>
            <span class="sidebar-brand-text align-middle">
                First.11
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall">
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Charles Hall
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class='dropdown-item' href='pages-profile.html'><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class='dropdown-item' href='pages-settings.html'><i class="align-middle me-1"
                                data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>

                    <div class="sidebar-user-subtitle">Designer</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user align-middle">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">App</li>
            <li class="sidebar-item">
                <a data-bs-target="#site" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Site</span>
                </a>
                <ul id="site" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('tournaments.index') }}'>Blogs</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('tournaments.index') }}'>About</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('logo.index') }}'>Logos</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#tournaments" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Tournaments</span>
                </a>
                <ul id="tournaments" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('tournaments.index') }}'>Manage</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#clubs" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Clubs</span>
                </a>
                <ul id="clubs" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('clubs.index') }}'>Manage</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#players" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Players</span>
                </a>
                <ul id="players" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('clubs.index') }}'>Manage</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#locations" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Locations</span>
                </a>
                <ul id="locations" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('clubs.index') }}'>Manage</a></li>
                </ul>
            </li>
            <li class="sidebar-header">App</li>
            <li class="sidebar-item">
                <a data-bs-target="#notifications" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Notifications</span>
                </a>
                <ul id="notifications" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('clubs.index') }}'>Manage</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#support" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Help & Support</span>
                </a>
                <ul id="support" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='{{ route('clubs.index') }}'>Manage</a></li>
                </ul>
            </li>

        </ul>


    </div>
</nav>
