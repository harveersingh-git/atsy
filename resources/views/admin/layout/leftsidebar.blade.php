<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{ url('/') }}"><img src="{{asset('assets/images/icon-dark.svg')}}" alt="Etsy Connector Logo" class="img-fluid logo"><span>Etsy Connector</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                @if(Auth::user()->profile_image)
                <img src="{{asset('profile_images/')}}/{{Auth::user()->profile_image}}" class="user-photo" alt="User Profile Picture">
                @else
                <img src="{{asset('assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">


                @endif
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong> {{ Auth::user()->name }}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}"><a href="{{ url('/') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li class="{{ Request::segment(1) === 'edit-profile' ? 'active' : null }}"><a href="{{ url('edit-profile') }}"><i class="icon-home"></i><span>Edit Profile</span></a></li>
                <li class="{{ Request::segment(1) === 'change-password' ? 'active' : null }}"><a href="{{ url('change-password') }}"><i class="icon-home"></i><span>Change Password</span></a></li>

                <li class="{{ Request::segment(1) === 'etsy-config' ? 'active' : null }}">
                    <a href="#uiElements" class="has-arrow"><i class="icon-settings"></i><span>Settings</span></a>
                    <ul>
                        <li class="{{ Request::segment(1) === 'etsy-config' ? 'active' : null }}"><a href="{{ url('etsy-config') }}">Etsy Config</a></li>
                

                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</div>