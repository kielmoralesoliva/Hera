
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AtrioHR - HR and Company Management Admin Template</title>
    <!-- Favicon-->
    <link rel="icon" href=" assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href=" assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href=" assets/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href=" assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src=" assets/images/loading.png" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
  
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-bs-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="" />
                    <span class="logo-name">HeraHR</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                            role="button">
                            <i class="far fa-bell"></i>
                            <span class="notify"></span>
                            <span class="heartbeat"></span>
                        </a>
                       
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="assets/images/user.jpg" alt="user">
                        </div>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    

    <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="assets/images/usrbig.jpg" class="user-img-style" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Maricar Falogme </div>
                            <div class="profile-usertitle-job ">HR Staff </div>
                        </div>
                    </li>

                    <li class="header">-- HR Services</li>
                    
                    
        

                    <li class="<?php echo $activation == "announcement"? "active": ""; ?>">
                        <a href="employee-announcement">
                            <i data-feather="calendar"></i>
                            <span>Announcement</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="employee-dashboard">
                            <i data-feather="calendar"></i>
                            <span>Campus Data</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="clipboard"></i>
                            <span>Leave Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="employee-leave-balance"> Leave Balance</a>
                            </li>
                            <li class="active">
                                <a href="leave-types">Leave Types</a>
                            </li>
                            <li>
                                <a href="">Request for Leave</a>
                            </li>
                        </ul>
                    </li>




                  <li class="<?php echo $activation == "employee-list"? "active": ""; ?>">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="check-circle"></i>
                            <span>Request a Form</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                                <a href="pages/employee/edit-employee.html">Civil Service Forms</a>
                            </li>
                            <li>
                                <a href="pages/employee/edit-employee.html">RSU Local Forms</a>
                            </li>
                            <li>
                                <a href="pages/employee/edit-employee.html">GSIS Forms</a>
                            </li>
               
                        </ul>
                    </li>





                    <li class="header">-- Personal</li>
                    <li class="">
                        <a href="saln">  
                    <i class="
far fa-folder"></i>
                            <span>My Files</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="saln">  
                    <i class="fas fa-user-circle"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li class="header">-- Others</li>
                    <li class="">
                        <a href="directory">  
                    <i class="fas fa-phone-volume"></i>
                            <span>Officials Directory</span>
                        </a>
                    </li>

                    <li class="<?php echo $activation == "holiday"? "active": ""; ?>">
                        <a href="holiday">
                            <i data-feather="calendar"></i>
                            <span>Holiday</span>
                        </a>
                    </li>







                </ul>
            </div>
            <!-- #Menu -->
        </aside>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Widgets</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href=" index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ul>
                    </div>
                </div>
            </div>
  
            <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Announcement</strong> Section</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu float-end">
                                    <li>
                                        <a href="#" onClick="return false;" class=" waves-effect waves-block">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;" class=" waves-effect waves-block">Another
                                            action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;" class=" waves-effect waves-block">Something
                                            else
                                            here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="demo">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">brightness_medium</i>
                                            <div class="price-value"> Memorandum
                                                <span class="month">President/University Updates</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">President Updates</h3>
                                        <div class="pricing-content">
                                         
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">View Announcement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable greenColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">local_mall</i>
                                            <div class="price-value"> Vacancies
                                                <span class="month">Hiring Updates</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">Hiring Updates</h3>
                                        <div class="pricing-content">
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">View Announcement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable redColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">spa</i>
                                            <div class="price-value"> Submission
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">Urgent Documents</h3>
                                        <div class="pricing-content">
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">View Announcement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="pricingTable blueColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">filter_vintage</i>
                                            <div class="price-value"> HR Updates
                                                <span class="month">per month</span>
                                            </div>
                                        </div>
                                        <h3 class="heading">HR Daily Updates</h3>
                                        <div class="pricing-content">
                                        </div>
                                        <div class="pricingTable-signup">
                                            <a href="#">View Announcement</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Single</strong>Slide Auto Play</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="owl-carousel owl-theme" id="single_slide_autoplay">
                                <div class="item">
                                    <img src="assets/images/image-gallery/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/image-gallery/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/image-gallery/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/image-gallery/4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/image-gallery/5.jpg" alt="">
                                </div>
                            </div>
                            <div class="owl-btns">
                                <div class="owl-play play">Play</div>
                                <div class="owl-stop stop">Stop</div>
                            </div>
                        </div>
                    </div>
                </div>













        




    </section>
    <script src=" assets/js/app.min.js"></script>
    <script src=" assets/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src=" assets/js/admin.js"></script>
    <!-- Carousel Js -->
    <script src=" assets/js/pages/medias/carousel.js"></script>
    <!-- Knob Js -->
    <script src=" assets/js/pages/charts/jquery-knob.js"></script>
    <script src=" assets/js/pages/todo/todo.js"></script>
    <script src=" assets/js/bundles/amcharts4/core.js"></script>
    <script src=" assets/js/bundles/amcharts4/charts.js"></script>
    <script src=" assets/js/bundles/amcharts4/animated.js"></script>
    <script src=" assets/js/pages/widgets/data-widget.js"></script>
</body>

</html>

