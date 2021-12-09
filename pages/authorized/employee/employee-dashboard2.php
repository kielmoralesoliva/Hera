
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hera RSU HRMO</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" alt="admin">
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
                    <span class="logo-name">HERA</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="float-start">
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
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user6.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user7.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" onClick="return false;">View All Notifications</a>
                            </li>
                        </ul>
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
                    <li class="float-end">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
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
                    
                    
        

                    <li class="active">
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
                    <li>
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
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Welcome to Hera!</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   

       
                                         

        
                    <div class="body">
                        <div class="demo">
                            <div class="row m-5">
                                <div class="col-md-3 col-sm-2">
                                    <div class="pricingTable">
                                        <div class="pricingTable-header">

                                        </div>
                                        <img src="assets/images/Hera/Happy-Hera-with-Dialog.png" alt="">
                                        <div class="pricing-content">
                                          
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2 col-sm-6">
                                    <div class="pricingTable greenColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">pan_tool</i>
                                            <div class="price-value" style="font-size:150%  "> Want to take a rest?
                                                <span class="month"></span>
                                            </div>
                                        </div>
                                     <br>
                            <h3 class="heading">File Leave<br><br>Leave Balance</h3>
                                        <div class="pricing-content">
                                    
                                        </div>
                                        <div class="pricingTable-signup"><br><br><br>
                                            <a href="#">File a Leave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="pricingTable yellowColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">work</i>
                                            <div class="price-value" style="font-size:150%  "> Request forms?
                                                <span class="month"></span>
                                            </div>
                                        </div>
                                     <br>
                            <h3 class="heading">CSC Forms<br><br>RSU Documents</h3>
                                        <div class="pricing-content">
                                    
                                        </div>
                                        <div class="pricingTable-signup"><br><br><br>
                                            <a href="#">Request Documents</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="pricingTable redColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">announcement</i>
                                            <div class="price-value" style="font-size:150%  "> Announcements?
                                                <span class="month"></span>
                                            </div>
                                        </div>
                                     <br>
                            <h3 class="heading">Vacancies<br><br>Campus Updates</h3>
                                        <div class="pricing-content">
                                    
                                        </div>
                                        <div class="pricingTable-signup"><br><br><br>
                                            <a href="#">See Posting</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6">
                                    <div class="pricingTable blueColor">
                                        <div class="pricingTable-header">
                                            <i class="material-icons">format_align_justify</i>
                                            <div class="price-value" style="font-size:150%  "> Campus Stats?
                                                <span class="month"></span>
                                            </div>
                                        </div>
                                     <br>
                            <h3 class="heading">Statistics<br><br>Employees</h3>
                                        <div class="pricing-content">
                                    
                                        </div>
                                        <div class="pricingTable-signup"><br><br><br>
                                            <a href="#">Campus Stats</a>
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
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>RSU HRMO Announcements</strong>
                                <small>Make sure to read</small>
                            </h2>
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
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_1" role="tablist"
                                        aria-multiselectable="true">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_11">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseThree_2"
                                                        aria-expanded="false" aria-controls="collapseThree_1">
                                                     <h3> Submissions </h3>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_2" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                    Completed my graduation in Arts from the well known and renowned
                                                    institution of India – SARDAR PATEL ARTS COLLEGE, BARODA
                                                    in 2000-01, which was affiliated to M.S. University. I ranker in
                                                    University
                                                    exams from the same university from 1996-01.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseThree_1"
                                                        aria-expanded="false" aria-controls="collapseThree_1">
                                                        <h3> Vacancies </h3>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                    Completed my graduation in Arts from the well known and renowned
                                                    institution of India – SARDAR PATEL ARTS COLLEGE, BARODA
                                                    in 2000-01, which was affiliated to M.S. University. I ranker in
                                                    University
                                                    exams from the same university from 1996-01.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
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
                <!-- #END# Basic Examples -->
            </div>

        
    </section>





    <script src="assets/js/app.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/bundles/echart/echarts.js"></script>
    <script src="assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>
</body>


</html>