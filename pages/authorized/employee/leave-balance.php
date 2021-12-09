
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:33:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title> Romblon State University Human Resource</title>
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
  
    <!-- #Top Bar -->
    <div>

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
                            <li class="active">
                                <a href=""> Leave Balance</a>
                            </li>
                            <li class="">
                            <a href="employee-leave-types">Leave Types</a>
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


                    <li class="<?php echo $activation == "holiday"? "active": ""; ?>">
                        <a href="holiday">
                            <i data-feather="calendar"></i>
                            <span>Holiday</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="holiday">
                            <i data-feather="check-circle"></i>
                            <span>Request a Form</span>
                        </a>
                    </li>


                    <li class="header">-- Employee Data</li>


                </ul>
            </div>
            <!-- #Menu -->
        </aside>
 


    </div></div>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header"> 
           <h3> <strong>Available</strong> Leave Balance<br></h3>

            <div class="row ">
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-purple">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="far fa-window-restore"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Vacation Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h1 class="d-flex align-items-right mb-0">
                                       0
                                    </h1>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
              

                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-blue-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-walking"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Sick Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h1 class="d-flex align-items-right mb-0">
                                       0
                                    </h1>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Special Privilege Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        102
                                    </h2>
                                </div>
                              
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-red">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Maternity Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        102
                                    </h2>
                                </div>
                              
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Paternity Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        102
                                    </h2>
                                </div>
                              
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Study Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        102
                                    </h2>
                                </div>
                              
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Solo Parent Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        102
                                    </h2>
                                </div>
                              
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-money-check-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Mandatory/Force Leave</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        58
                                    </h2>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>


        
      
        </div>


        <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>FAQs</strong>
                                <small>Find your solutions from here.</small>
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
                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                <h4 class="panel-title">
                                                    <a role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_1"
                                                        aria-expanded="true" aria-controls="collapseOne_1">
                                                        Q1. Anim pariatur cliche reprehenderit?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_1" class="panel-collapse collapse in show"
                                                role="tabpanel" aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid
                                                    single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.
                                                    Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                    helvetica,
                                                    craft beer labore wes anderson cred nesciunt sapiente.
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
                                            <div class="panel-heading" role="tab" id="headingThree_11">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseThree_2"
                                                        aria-expanded="false" aria-controls="collapseThree_1">
                                                        Q2. It has survived not only five centuries, but also the leap
                                                        into?
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
                                                        Q3. Worked as Professor and Head of the department at Sarda
                                                        Collage?
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
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingOne_11">
                                                <h4 class="panel-title">
                                                    <a role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_3"
                                                        aria-expanded="true" aria-controls="collapseOne_3">
                                                        Q4. It has survived not only five centuries, but also the leap
                                                        into?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_3" class="panel-collapse collapse " role="tabpanel"
                                                aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid
                                                    single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.
                                                    Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                    helvetica,
                                                    craft beer labore wes anderson cred nesciunt sapiente.
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
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_4"
                                                        aria-expanded="false" aria-controls="collapseOne_4">
                                                        Q5. Worked as Professor and Head of the department?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_4" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid
                                                    single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.
                                                    Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                    helvetica,
                                                    craft beer labore wes anderson cred nesciunt sapiente.
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
                                            <div class="panel-heading" role="tab" id="headingTwo_11">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_5"
                                                        aria-expanded="false" aria-controls="collapseOne_5">
                                                        Q6. It has survived not only five centuries, but also the leap
                                                        into?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_5" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid
                                                    single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.
                                                    Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                    helvetica,
                                                    craft beer labore wes anderson cred nesciunt sapiente.
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
                                            <div class="panel-heading" role="tab" id="headingTwo_12">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_6"
                                                        aria-expanded="false" aria-controls="collapseOne_6">
                                                        Q7. Completed my graduation in Arts from the well known?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_6" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid
                                                    single origin coffee nulla assumenda shoreditchet. Nihil anim
                                                    keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                    proident.
                                                    Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh
                                                    helvetica,
                                                    craft beer labore wes anderson cred nesciunt sapiente.
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
                <!-- #END# Basic Examples -->
            </div>

        
    </section>

  



    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/bundles/echart/echarts.js"></script>
    <script src="assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:34:28 GMT -->
</html>