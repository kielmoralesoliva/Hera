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
                <a class="navbar-brand" href="employee-landing">
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
                                        <a href="#"   id ="logout">

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
                            <div class="sidebar-userpic-name"> <?php echo  ACCOUNT_INFO['password'] ." ". ACCOUNT_INFO['username']; ?> </div>
                            <div class="profile-usertitle-job ">HR Staff </div>
                        </div>
                    </li>

                    <li class="header">-- HR Services</li>
                    
                    
        

                    <li class="">
                        <a href="hr-all-requests">
                            <i data-feather="calendar"></i>
                            <span>All Requests</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="employee-dashboard">
                            <i data-feather="calendar"></i>
                            <span>Announcements</span>
                        </a>
                    </li>
                    <li>
                        <a href="hr-campus-data">
                            <i data-feather="mail"></i>
                            <span>Campus Data</span>
                        </a>
                    </li>

                    <li class="">
                         <a href="hr-leave-management">
                            <i data-feather="clipboard"></i>
                            <span>Leave Management</span>
                        </a>
                    </li>
                    <li class="header">-- Employee Data</li>
           
                        
                    <li class="">
                        <a href="hr-employees">
                            <i data-feather="check-circle"></i>
                            <span>Regular Employee</span>
                        </a>
                    </li>                  
                            
                    <li class="">
                        <a href="hr-lecturers">
                            <i data-feather="check-circle"></i>
                            <span>College Lecturers</span>
                        </a>
                    </li>      

                    <li class="active">
                        <a href="hr-employees">
                            <i data-feather="check-circle"></i>
                            <span>Job Orders</span>
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
                                <h4 class="page-title">All Employees</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">All Employees</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Employees
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
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">ID</th>
                                            <th class="center"> Last Name </th>
                                            <th class="center"> First Name </th>
                                            <th class="center"> Middle Name </th>
                                            <th class="center"> Birth Date </th>
                                            <th class="center">Academic Rank</th>
                                            <th class="center"> Status </th>
                                            <th class="center"> Campus </th>
                                            <th class="center"> Education </th>
                                            <th class="center"> Designation </th>
                                            <th class="center"> Appointment Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0, $fc = count(hrJobOrders()); $i < $fc; $i++) {?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo hrJobOrders()[$i]["employee_ID"];?>
                                            </td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["surname"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["firstname"];?></td>  
                                            <td class="center"><?php echo hrJobOrders()[$i]["middlename"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["birthdate"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["academicRank"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["status"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["campus"];?></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["educBackground"];?></td>
                                            <td class="center"></td>
                                            <td class="center"><?php echo hrJobOrders()[$i]["appointment"];?></td>
                                        </tr>
                                        <?php } ?>
                                   
                         
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="center">ID</th>
                                            <th class="center"> Last Name </th>
                                            <th class="center"> First Name </th>
                                            <th class="center"> Middle Name </th>
                                            <th class="center"> Birth Date </th>
                                            <th class="center">Academic Rank</th>
                                            <th class="center"> Status </th>
                                            <th class="center"> Campus </th>
                                            <th class="center"> Education </th>
                                            <th class="center"> Designation </th>
                                            <th class="center"> Appointment </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
















    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/bundles/echart/echarts.js"></script>
    <script src="assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/js/bundles/export-tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/bundles/export-tables/buttons.flash.min.js"></script>
    <script src="assets/js/bundles/export-tables/jszip.min.js"></script>
    <script src="assets/js/bundles/export-tables/vfs_fonts.js"></script>
    <script src="assets/js/bundles/export-tables/buttons.html5.min.js"></script>

</body>


</html>