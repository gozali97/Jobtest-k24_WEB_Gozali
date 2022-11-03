<div class="header">
    <div class="header-left">
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{url('fotomember/'.Auth::user()->foto) }}" alt="">
                    </span>
                    <span class="user-name">{{ Auth::user()->nama }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ url('/profil') }}"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
        <div class="github-link">
            <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
        </div>
    </div>
</div>
