  <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="index.html"><img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="/admin/transfer" aria-expanded="true"><i class="fa fa-map"></i><span>Transfer</span></a>

                        </li>

                        <li><a href="/admin/category"><i class="ti-map-alt"></i> <span>Category</span></a></li>
                        <li><a href="{{route('admin.rezervation.index')}}"><i class="fa fa-car"></i> <span>Rezervations</span></a></li>
                        <li><a href="{{route('admin.comment.index')}}"><i class="fa fa-comment"></i> <span>Comments</span></a></li>
                        <li><a href="{{route('admin.faq.index')}}"><i class="fa fa-question-circle"></i> <span>FAQ</span></a></li>
                        <li><a href="{{route('admin.message.index')}}"><i class="fa fa-comment-o"></i> <span>Messages</span></a></li>
                        <li><a href="/admin/user"><i class="fa fa-user"></i> <span>User</span></a></li>
                        <li><a href="/admin/setting"><i class="fa fa-cog"></i> <span>SETTINGS</span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->

    <div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search-box pull-left">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..." required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 col-sm-4 clearfix">
                <ul class="notification-area pull-right">
                    <li id="full-view"><i class="ti-fullscreen"></i></li>
                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                    <li class="dropdown">
                        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                            <span>2</span>
                        </i>
                        <div class="dropdown-menu bell-notify-box notify-box">
                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                            <div class="nofity-list">
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                    <div class="notify-text">
                                        <p>You have Changed Your Password</p>
                                        <span>Just Now</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                    <div class="notify-text">
                                        <p>New Commetns On Post</p>
                                        <span>30 Seconds ago</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                    <div class="notify-text">
                                        <p>Some special like you</p>
                                        <span>Just Now</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                    <div class="notify-text">
                                        <p>New Commetns On Post</p>
                                        <span>30 Seconds ago</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                    <div class="notify-text">
                                        <p>Some special like you</p>
                                        <span>Just Now</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                    <div class="notify-text">
                                        <p>You have Changed Your Password</p>
                                        <span>Just Now</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                    <div class="notify-text">
                                        <p>You have Changed Your Password</p>
                                        <span>Just Now</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                        <div class="dropdown-menu notify-box nt-enveloper-box">
                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                            <div class="nofity-list">
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img1.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">Hey I am waiting for you...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img2.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">When you can connect with me...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img3.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">I missed you so much...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img4.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">Your product is completely Ready...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img2.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">Hey I am waiting for you...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img1.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">Hey I am waiting for you...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb">
                                        <img src="{{asset('assets')}}/admin/images/author/author-img3.jpg" alt="image">
                                    </div>
                                    <div class="notify-text">
                                        <p>Aglae Mayer</p>
                                        <span class="msg">Hey I am waiting for you...</span>
                                        <span>3:15 PM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="settings-btn">
                        <i class="ti-settings"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('assets')}}/admin/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="/logoutuser">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
