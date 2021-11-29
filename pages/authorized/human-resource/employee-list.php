
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
                                            <th class="center">#</th>
                                            <th class="center"> Name </th>
                                            <th class="center"> Designation </th>
                                            <th class="center"> Mobile </th>
                                            <th class="center"> Email </th>
                                            <th class="center"> Address </th>
                                            <th class="center">Joining Date</th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user1.jpg" alt="">
                                            </td>
                                            <td class="center">Rajesh</td>
                                            <td class="center">Programmer</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98fde0f9f5e8f4fdd8fdf5f9f1f4b6fbf7f5">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">22 Feb 2000</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Pooja Patel</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c29342d213c20290c29212d2520622f2321">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">27 Aug 2005</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Sarah Smith</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d1ccd5d9c4d8d1f4d1d9d5ddd89ad7dbd9">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">05 Jun 2011</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user4.jpg" alt="">
                                            </td>
                                            <td class="center">John Deo</td>
                                            <td class="center">Designer</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3a273e322f333a1f3a323e3633713c3032">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">15 Feb 2012</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Jay Soni</td>
                                            <td class="center">Purchase Officer</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2c7dac3cfd2cec7e2c7cfc3cbce8cc1cdcf">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">12 Nov 2012</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user6.jpg" alt="">
                                            </td>
                                            <td class="center">Jacob Ryan</td>
                                            <td class="center">Receptionist</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="503528313d203c3510353d31393c7e333f3d">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">03 Dec 2001</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Megha Trivedi</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b1e031a160b171e3b1e161a121755181416">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">17 Mar 2013</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user8.jpg" alt="">
                                            </td>
                                            <td class="center">Rajesh</td>
                                            <td class="center">Sr. Tester</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e1b061f130e121b3e1b131f1712501d1113">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">22 Feb 2000</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Pooja Patel</td>
                                            <td class="center">Team Leader</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="701508111d001c1530151d11191c5e131f1d">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">27 Aug 2005</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user6.jpg" alt="">
                                            </td>
                                            <td class="center">Sarah Smith</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f3eef7fbe6faf3d6f3fbf7fffab8f5f9fb">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">05 Jun 2011</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Jacob Ryan</td>
                                            <td class="center">Receptionist</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84e1fce5e9f4e8e1c4e1e9e5ede8aae7ebe9">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">03 Dec 2001</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="../../assets/images/user/user4.jpg" alt="">
                                            </td>
                                            <td class="center">Megha Trivedi</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="badfc2dbd7cad6dffadfd7dbd3d694d9d5d7">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">17 Mar 2013</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Rajesh</td>
                                            <td class="center">Director</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89ecf1e8e4f9e5ecc9ece4e8e0e5a7eae6e4">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">22 Feb 2000</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Pooja Patel</td>
                                            <td class="center">Programmer</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="acc9d4cdc1dcc0c9ecc9c1cdc5c082cfc3c1">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">27 Aug 2005</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <td class="center">Sarah Smith</td>
                                            <td class="center">Manager</td>
                                            <td class="center">+ 167-894-2378</td>
                                            <td class="center"><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f2eff6fae7fbf2d7f2faf6fefbb9f4f8fa">[email&#160;protected]</a></td>
                                            <td class="center">22,tilak appt. surat</td>
                                            <td class="center">05 Jun 2011</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
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
                                            <th class="center"> Name </th>
                                            <th class="center"> Designation </th>
                                            <th class="center"> Mobile </th>
                                            <th class="center"> Email </th>
                                            <th class="center"> Address </th>
                                            <th class="center">Joining Date</th>
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