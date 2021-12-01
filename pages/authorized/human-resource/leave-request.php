
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:33:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AtrioHR - HR and Company Management Admin Template</title>
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

    
    <?php include './pages/authorized/human-resource/include/navigation-bar.php';   ?>
    </div>





    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Leave Request</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Leave</a>
                            </li>
                            <li class="breadcrumb-item active">All Leave Request</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Leave Request
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
                                            <th class="center">#</th>
                                            <th class="center"> Emp ID </th>
                                            <th class="center"> Name </th>
                                            <th class="center"> Appl Date </th>
                                            <th class="center"> Status </th>
                                            <th class="center"> Leave From </th>
                                            <th class="center"> Leave To </th>
                                            <th class="center"> Leave Type </th>
                                            <th class="center"> Remark </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user8.jpg" alt="">
                                            </td>
                                            <td class="center">1001</td>
                                            <td class="center">Brown</td>
                                            <td class="center">15-07-2018</td>
                                            <td class="center">
                                                <div class="badge col-green">Approved</div>
                                            </td>
                                            <td class="center">17-07-2018</td>
                                            <td class="center">21-07-2018</td>
                                            <td class="center">Sick</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user9.jpg" alt="">
                                            </td>
                                            <td class="center">1002</td>
                                            <td class="center">Miller</td>
                                            <td class="center">01-06-2018</td>
                                            <td class="center">
                                                <div class="badge col-red">Reject</div>
                                            </td>
                                            <td class="center">18-06-2018</td>
                                            <td class="center">28-06-2018</td>
                                            <td class="center">Privilege</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user3.jpg" alt="">
                                            </td>
                                            <td class="center">1003</td>
                                            <td class="center">Johnson</td>
                                            <td class="center">14-04-2018</td>
                                            <td class="center">
                                                <div class="badge col-green">Approved</div>
                                            </td>
                                            <td class="center">22-04-2018</td>
                                            <td class="center">28-04-2018</td>
                                            <td class="center">Casual</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user2.jpg" alt="">
                                            </td>
                                            <td class="center">1004</td>
                                            <td class="center">Jones</td>
                                            <td class="center">05-09-2018</td>
                                            <td class="center">
                                                <div class="badge col-red">Reject</div>
                                            </td>
                                            <td class="center">17-09-2018</td>
                                            <td class="center">21-09-2018</td>
                                            <td class="center">Sick</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user7.jpg" alt="">
                                            </td>
                                            <td class="center">1005</td>
                                            <td class="center">Davis</td>
                                            <td class="center">13-08-2018</td>
                                            <td class="center">
                                                <div class="badge col-brown">Pending</div>
                                            </td>
                                            <td class="center">30-08-2018</td>
                                            <td class="center">04-09-2018</td>
                                            <td class="center">Casual</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user5.jpg" alt="">
                                            </td>
                                            <td class="center">1006</td>
                                            <td class="center">Sarah</td>
                                            <td class="center">18-07-2018</td>
                                            <td class="center">
                                                <div class="badge col-red">Reject</div>
                                            </td>
                                            <td class="center">21-07-2018</td>
                                            <td class="center">25-12-2018</td>
                                            <td class="center">Maternity</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user1.jpg" alt="">
                                            </td>
                                            <td class="center">1007</td>
                                            <td class="center">Clark</td>
                                            <td class="center">11-07-2018</td>
                                            <td class="center">
                                                <div class="badge col-green">Approved</div>
                                            </td>
                                            <td class="center">12-07-2018</td>
                                            <td class="center">18-07-2018</td>
                                            <td class="center">Casual</td>
                                            <td class="center">xyz...</td>
                                            <td class="center">
                                                <a href="edit-leave.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Emp ID </th>
                                            <th class="center"> Name </th>
                                            <th class="center"> Appl Date </th>
                                            <th class="center"> Status </th>
                                            <th class="center"> Leave From </th>
                                            <th class="center"> Leave To </th>
                                            <th class="center"> Leave Type </th>
                                            <th class="center"> Remark </th>
                                            <th class="center"> Action </th>
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
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/bundles/echart/echarts.js"></script>
    <script src="assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>

</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:34:28 GMT -->
</html>