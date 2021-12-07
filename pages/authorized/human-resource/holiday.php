
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
                                <h4 class="page-title">All Holidays</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Holidays</a>
                            </li>
                            <li class="breadcrumb-item active">All Holidays</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Holidays
                            </h2>
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
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Title </th>
                                            <th class="center"> Type </th>
                                            <th class="center"> Start Date </th>
                                            <th class="center"> End Date </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center">1</td>
                                            <td class="center">New Year's Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">January 1</td>
                                            <td class="center">January 3</td>
                                            <td class="center">Celebrating New Year's Eve Yearly</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">2</td>
                                            <td class="center">Bataan Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">April 9</td>
                                            <td class="center">April 9</td>
                                            <td class="center"> Araw ng Kagitingan, also known as Bataan Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">3</td>
                                            <td class="center">Maundy Thursday</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">April 1</td>
                                            <td class="center">April 1</td>
                                            <td class="center">Celebration of the Holy Week</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">4</td>
                                            <td class="center">Good Friday</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">April 2</td>
                                            <td class="center">April 2</td>
                                            <td class="center"> Celebration of the Holy Week</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">5</td>
                                            <td class="center">Labor Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">May 1</td>
                                            <td class="center">May 1</td>
                                            <td class="center">Celebration of Labor Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">6</td>
                                            <td class="center">Eid'l Fitr</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">May 13</td>
                                            <td class="center">May 13</td>
                                            <td class="center">Feast of Ramadhan</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">7</td>
                                            <td class="center">Independence Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">June 12</td>
                                            <td class="center">June 12</td>
                                            <td class="center">Celebrating Philippine Independence</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">8</td>
                                            <td class="center">Eid'l Adha</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">July 20</td>
                                            <td class="center">July 20</td>
                                            <td class="center">Feast of Sacrifice</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">9</td>
                                            <td class="center">National Heroes Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">August 30</td>
                                            <td class="center">August 30</td>
                                            <td class="center">Celebrating Heroes Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">10</td>
                                            <td class="center">Bonifacio Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">November 30</td>
                                            <td class="center">November 30</td>
                                            <td class="center">Celebrating Bonifacio Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">11</td>
                                            <td class="center">Christmas Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">December 25</td>
                                            <td class="center">December 25</td>
                                            <td class="center"> Celebration of Christmas Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">12</td>
                                            <td class="center">Rizal Day</td>
                                            <td class="center">Regular Holiday</td>
                                            <td class="center">December 30</td>
                                            <td class="center">December 30</td>
                                            <td class="center"> Celebration of Jose Rizal Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">13</td>
                                            <td class="center">Chinese New year</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">February 12</td>
                                            <td class="center">February 12</td>
                                            <td class="center">Chinese New Year Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">14</td>
                                            <td class="center">EDSA People Power Revolution</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">February 25</td>
                                            <td class="center">February 25</td>
                                            <td class="center">EDSA Revolution Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">15</td>
                                            <td class="center">Black Saturday</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">April 3</td>
                                            <td class="center">April 3</td>
                                            <td class="center">Holy Week Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">16</td>
                                            <td class="center">Ninoy Aquino Day</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">August 21</td>
                                            <td class="center">August 21</td>
                                            <td class="center">Ninoy Aquino Day</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="center">17</td>
                                            <td class="center">All Saint's Day</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">November 1</td>
                                            <td class="center">November 1</td>
                                            <td class="center">All Saint's Day Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>

                                        
                                        <tr class="odd gradeX">
                                            <td class="center">18</td>
                                            <td class="center">Feast of Immaculate Concepcion of Mary</td>
                                            <td class="center">Special Non-Working Holiday</td>
                                            <td class="center">December 8</td>
                                            <td class="center">December 8</td>
                                            <td class="center">Immaculate Concepcion Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="center">19</td>
                                            <td class="center">All Soul's Day</td>
                                            <td class="center">Special Working Holiday</td>
                                            <td class="center">December 8</td>
                                            <td class="center">December 8</td>
                                            <td class="center">All Soul's Day Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="center">20</td>
                                            <td class="center">Christmas Eve</td>
                                            <td class="center">Special Working Holiday</td>
                                            <td class="center">December 24</td>
                                            <td class="center">December 24</td>
                                            <td class="center">Christmas Eve Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="center">21</td>
                                            <td class="center">Last Day of the Year</td>
                                            <td class="center">Special Working Holiday</td>
                                            <td class="center">December 31</td>
                                            <td class="center">December 31</td>
                                            <td class="center">New Year's Eve Celebration</td>
                                            <td class="center">
                                                <a href="edit-holiday.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="center"></th>
                                            <th class="center"></th>
                                            <th class="center"> Reference </th>
                                            <th class="center"> https://www.officialgazette.gov.ph/nationwide-holidays/ </th>
                                            <th class="center"> Proclamation No. 1107, s 2021 </th>

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
    


    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>


</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 19:34:28 GMT -->
</html>