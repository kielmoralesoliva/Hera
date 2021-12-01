
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:33:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AtrioHR - HR and Company Management Admin Template</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    <link href="assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />
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

    
    <?php include './pages/authorized/human-resource/include/navigation-bar.php';   ?>

    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Employees</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employees</a>
                            </li>
                            <li class="breadcrumb-item active">Add Employee</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Add</strong> Employee</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="add-employee-form">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="furname" class="form-control" placeholder="First Name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="middle" class="form-control" placeholder="Middle Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control" placeholder="Last Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            
                                    
                                    <select class="form-control" name="accountType">
                                                <option disabled selected hidden>Select Account Type</option>
                                                <option value="Employee">Employee</option>
                                                <option value="Employee">HR Officer</option>
                                    
                                            </select>
                                
                                        </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                            
                                    
                                    <select class="form-control" name="gender">
                                                <option disabled selected hidden>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                    
                                            </select>
                                
                                        </div>
                                </div>
                            
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            
                                    
                                    <select class="form-control">
                                                <option disabled selected hidden>Academic Rank</option>
                                                <option>Instructor I</option>
                                                <option>Instructor II</option>
                        
                                            </select>
                                
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <select class="form-control" name="status">
                                                <option disabled selected hidden>Status</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Temporary">Temporary</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <select class="form-control" name="campus">
                                                <option disabled selected hidden>Campus Assigned</option>
                                                <option value="Main">Main</option>
                                                <option value="Calatrava"> Calatrava</option>
                                            </select>
                                        </div>
                                </div>
                            
                            
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect">Cancel</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="assets/js/app.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/main/employee.js"></script>
</body>


</html>