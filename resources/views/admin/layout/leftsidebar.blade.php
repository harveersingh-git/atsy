<div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="{{ url('/') }}"><img src="{{asset('assets/images/icon-dark.svg')}}" alt="HexaBit Logo" class="img-fluid logo"><span>HexaBit</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="{{asset('assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
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
                    <li class="active"><a href="{{ url('/') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                   
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-settings"></i><span>Settings</span></a>
                        <ul>
                            <li><a href="{{ url('edit-profile') }}">Edit Profile</a></li>
                            <li><a href="{{ url('change-password') }}">Change Password</a></li>
                          
                        </ul>
                    </li>
                  
                   
                </ul>
            </nav>     
        </div>
    </div>