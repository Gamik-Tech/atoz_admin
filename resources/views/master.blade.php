<!DOCTYPE html>
<html lang="en">
<style>
    .bg-c-black {
        background: #222211 !important;
    }
    .bg-c-7e7e35 {
        background: #7e7e35 !important;
    }

    .bg-c-7e3d35 {
        background: #7e3d35 !important;
    }

    .bg-c-357e6d {
        background: #357e6d !important;
    }
    .bg-c-693268 {
        background: #693268 !important;
    }
    .bg-c-5a711657 {
        background: #5a711657 !important;
    }
    .bg-c-bb527fb3 {
        background: #bb527fb3 !important;
    }
    .bg-c-3c357e {
        background: #3c357e !important;
    }
    .bg-c-a536e1ad {
        background: #a536e1ad !important;
    }
    
</style>
@include('header')

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ url('/') }}/public/assets/images/logo.png"
                                alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()"
                                    class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ url('/') }}/public/assets/images/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ url('/') }}/public/assets/images/avatar-4.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ url('/') }}/public/assets/images/avatar-3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{ url('/') }}/public/assets/images/avatar-4.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius"
                                        src="{{ url('/') }}/public/assets/images/avatar-4.jpg"
                                        alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ url('/') }}/" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ url('/') }}/master" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Master</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Seller Master</h4>
                                                                <h6 class="text-muted m-b-0"> Modify and delete master
                                                                    information of a seller</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/sellmaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-purple">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                                    Best Sellers</h4>
                                                                <h6 class="text-muted m-b-0"> Include or exclude a
                                                                    seller from the best seller list</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/bestseller.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-green">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                                                    Delivery Guys</h4>
                                                                <h6 class="text-muted m-b-0">Modify master information
                                                                    of a delivery guy</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/sellmaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-red">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                                                    Item Master</h4>
                                                                <h6 class="text-muted m-b-0">Make an item to be visible
                                                                    to customers</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/ItemMaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-yellow">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    System Master</h4>
                                                                <h6 class="text-muted m-b-0">Set radius, gst rates and
                                                                    many more</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/SysMaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-a536e1ad">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    User Master</h4>
                                                                <h6 class="text-muted m-b-0">View and modify user's
                                                                    basic information</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/UserMaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-3c357e">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Community</h4>
                                                                <h6 class="text-muted m-b-0"> View and modify user's
                                                                    basic information</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/Community.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-bb527fb3">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Email SMS</h4>
                                                                <h6 class="text-muted m-b-0"> Modify Email, SMS &
                                                                    Notification Settings</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/Email.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-5a711657">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Subscriptn</h4>
                                                                <h6 class="text-muted m-b-0"> View and change
                                                                    subscription settings</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/Subscription.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-693268">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Coupons</h4>
                                                                <h6 class="text-muted m-b-0">View and change
                                                                    information of coupons</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/Coupon.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-357e6d">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Offers</h4>
                                                                <h6 class="text-muted m-b-0">View and change
                                                                    information of offers</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/offers.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-7e3d35">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    FAQs</h4>
                                                                <h6 class="text-muted m-b-0"> Frequently asked
                                                                    questions with answers</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/FAQ.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-7e7e35">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">Admin Users</h4>
                                                                <h6 class="text-muted m-b-0">Modify master information
                                                                    of Admin Users</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/sellmaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-black">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">Update</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
