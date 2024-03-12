<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"><a href="{{ URL::to('/') }}"><img src="{{ asset('assets/img/logo-removebg-preview.png') }}"></a></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
       <!--  <div class="app-header-left">
            <ul class="header-menu nav">
                <li class="nav-item">
                    <a href="{{ route('dashboardProperties') }}" class="nav-link">
                        <i class="nav-link-icon fa fa-database"> </i>
                        Properties
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="{{ route('dashboardMyAccount') }}" class="nav-link">
                        <i class="nav-link-icon fa fa-cog"></i>
                        My Account
                    </a>
                </li>
            </ul>
        </div> -->
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{$adminAccount->firstname.' '.$adminAccount->lastname}}
                            </div>
                        </div>
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    @if($adminAccount->image!='')
                                        <img width="42" class="rounded-circle" src="{{ URL::to('uploaded/profiles/'.$adminAccount->image) }}" alt="">
                                    @else
                                        <img width="42" class="rounded-circle" src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" alt="">
                                    @endif
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <button type="button" class="dropdown-item"><a href="{{ route('dashboardContactReceive') }}">Messages</a></button>
                                    <button type="button" class="dropdown-item"><a href="{{ route('dashboardMyAccount') }}">My Account</a></button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" class="dropdown-item"><a href="{{ route('logout') }}">Logout</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>