<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ URL::asset('images/icon/logooo.png')}}" alt="Admin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{url('admindashboard')}}">Dashboard 1</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('showcategory')}}">
                        <i class="fas  fa-list-alt"></i>Category <span class="badge badge-dark"></span> </a>
                </li>
                <li>
                    <a href="{{url('showsubcategory')}}">
                        <i class="fas  fa-list-alt"></i>SubCategory <span class="badge badge-dark"></span> </a>
                </li>
                <li>
                    <a href="{{url('showproduct')}}">
                        <i class="fas  fa-list-alt"></i>Products <span class="badge badge-dark"></span> </a>
                </li>

                <li>
                    <a href="{{url('showcontact')}}">
                        <i class="fas  fa-list-alt"></i>ContactUs <span class="badge badge-dark"></span> </a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{url('adminprofile')}}">
                                <i class="zmdi zmdi-account"></i>Admin Profile</a>
                        </li>
                        <li>
                            <a href="{{url('adminlogin')}}">
                                <i class="fas fa-sign-in-alt"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{url('adminforgotpass')}}">
                                <i class="fa fa-lock"></i>Forget Password</a>
                        </li>
                        <li>
                            <a href="{{url('showaddress')}}">
                                <i class="zmdi zmdi-account"></i>Address</a>
                        </li>

                        <li>
                            <a href="{{url('showsocial')}}">
                                <i class="zmdi zmdi-account"></i>SocialMedia</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>



<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ URL::asset('images/icon/logooo.png')}}" alt="Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('admindashboard')}}">Dashboard 1</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{url('showcategory')}}">
                        <i class="fas  fa-list-alt"></i>Category <span class="badge badge-dark"></span> </a>
                </li>
                <li>
                    <a href="{{url('showsubcategory')}}">
                        <i class="fas  fa-list-alt"></i>SubCategory <span class="badge badge-dark"></span> </a>
                </li>
                <li>
                    <a href="{{url('showproduct')}}">
                        <i class="fas  fa-list-alt"></i>Products <span class="badge badge-dark"></span> </a>
                </li>

                <li>
                    <a href="{{url('showcontact')}}">
                        <i class="fas  fa-list-alt"></i>ContactUs <span class="badge badge-dark"></span> </a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('adminprofile')}}">
                                <i class="zmdi zmdi-account"></i>Admin Profile</a>
                        </li>
                        <li>
                            <a href="{{url('adminlogin')}}">
                                <i class="fas fa-sign-in-alt"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{url('adminforgotpass')}}">
                                <i class="fa fa-lock"></i>Forget Password</a>
                        </li>
                        <li>
                            <a href="{{url('showaddress')}}">
                                <i class="zmdi zmdi-account"></i>Address</a>
                        </li>

                        <li>
                            <a href="{{url('showsocial')}}">
                                <i class="zmdi zmdi-account"></i>SocialMedia</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>

<div class="page-container">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap" style="float: right;">

                    <div class="header-button">

                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ URL::asset('public/image') }}/{{ Session::get('admin_profile_image') }}" alt="admin" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn">{{Session::get('admin_name')}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ URL::asset('public/image') }}/{{ Session::get('admin_profile_image') }}" alt="admin" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Session::get('admin_name')}}</a>
                                            </h5>
                                            <span class="email">{{Session::get('admin_email')}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{url('adminprofile')}}">
                                                <i class="zmdi zmdi-account"></i>Admin Profile</a>
                                        </div>
                                    </div>



                                    <div class="account-dropdown__footer">
                                        <a href="{{url('adminlogout')}}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>