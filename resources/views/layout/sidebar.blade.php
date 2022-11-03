<div class="left-side-bar">
    <div class="brand-logo">
        <h1 class="text-white text-center">K24</h1>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                @if(auth()->user()->role == 'Admin')
                <li>
                    <a href="{{ url('/dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-11"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/member') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user"></span><span class="mtext">Members</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/profil') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-12"></span><span class="mtext">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout1"></span><span class="mtext">Logout</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ url('/dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-11"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/profil') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-user-12"></span><span class="mtext">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout1"></span><span class="mtext">Logout</span>
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
