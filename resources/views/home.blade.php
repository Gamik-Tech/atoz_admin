<!DOCTYPE html>
<html lang="en">

@include('header')

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
                                        <a href="{{ url('/') }}/admin/logout">
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
                                            <a href="{{ url('/') }}/admin/logout"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ url('/') }}/" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
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
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                                                    Sellers In Services</h4>
                                                                <h6 class="text-muted m-b-0">Get the list of sellers
                                                                    for
                                                                    a particular service.</h6>
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
                                                                    <p class="text-white m-b-0">View</p>
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
                                                                    Failed Trans</h4>
                                                                <h6 class="text-muted m-b-0">Get date wise list of
                                                                    failed or pending transactions.</h6>
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
                                                                    <p class="text-white m-b-0">View</p>
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
                                                                    Order Details</h4>
                                                                <h6 class="text-muted m-b-0">Get details of an order
                                                                    along with logs</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/itemmaster.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-red">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">View</p>
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
                                                                    Datewise Orders</h4>
                                                                <h6 class="text-muted m-b-0">Get list of orders within
                                                                    a
                                                                    range of days.</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <input type="image" name="ImgSellerInService"
                                                                    id="ImgSellerInService"
                                                                    src="{{ url('/') }}/public/assets/images/datewise.png"
                                                                    style="height:45px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
                                                        <div class="card-footer bg-c-yellow">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">View</p>
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
                                                                    Day Book</h4>
                                                                <h6 class="text-muted m-b-0">Get transaction summary of
                                                                    the day</h6>
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
                                                        <div class="card-footer bg-c-lavender">
                                                            <div class="row align-items-center">
                                                                <div class="col-9">
                                                                    <p class="text-white m-b-0">View</p>
                                                                </div>
                                                                <div class="col-3 text-right">
                                                                    <i class="fa-solid fa-note-sticky"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
                                        </div>
                                        <div class="row">
                                            <!--  project and team member start -->
                                            <div class="col-xl-7 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Last 10 Orders</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                </li>
                                                                <li><i class="fa fa-window-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            Order Id
                                                                        </th>
                                                                        <th>Seller</th>
                                                                        <th>Customer</th>
                                                                        <th>Amount</th>
                                                                        <th>Status</th>
                                                                        <th class="">Details</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <div class="d-inline-block">
                                                                                    <h6>1354</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>Thita & Bita</td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class="">197.95
                                                                        </td>
                                                                        <td>samit kumar dey</td>
                                                                        <td class=""><i
                                                                                class="fa-solid fa-circle-info"></i>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-right m-r-20">
                                                                <a href="#!"
                                                                    class=" b-b-primary text-primary">Net
                                                                    Amount received today:</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Last 10 dats summary</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                </li>
                                                                <li><i class="fa fa-window-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 400px;"></div>
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
    </div>
    @include('footer')
</body>

</html>
