<?php
    include './app/router/router.php';
    include './app/config/app-config.php'; 
    include './app/utility/campus-data-utility.php';

?>

<script>
    var API_URL = '<?php echo API_URL;?>';
    var ASSET_URL = '<?php echo ASSET_URL;?>';
    var  SITE_URL = '<?php echo SITE_URL;?>';
</script>






<?php

   $activation = null;
 
   if( isset( $_SESSION['loggedin-account-info'] ) AND !empty( $_SESSION['loggedin-account-info'] ) ) {



    define ('ACCOUNT_INFO', $_SESSION['loggedin-account-info']);

    if(ACCOUNT_INFO['accountType'] == 'Employee') {
      
        $router->get('/', function () {
            include './pages/authorized/employee/employee-landing.php';
        });
        $router->get('/employee-landing', function () {
            include './pages/authorized/employee/employee-landing.php';
        });
        $router->get('/employee-leave-balance', function () {
          
            include './pages/authorized/employee/leave-balance.php';
        });
   
        $router->get('/directory', function () {
          
            include './pages/authorized/employee/directory.php';
        });
        $router->get('/employee-dashboard', function () {
          
            include './pages/authorized/employee/employee-dashboard.php';
        });
        $router->get('/downloadable', function () {
          
            include './pages/authorized/employee/downloadable.php';
        });
        $router->get('/holiday', function () {
          
            include './pages/authorized/human-resource/holiday.php';
        });

        $router->get('/employee-profile', function () {
          
            include './pages/authorized/employee/employee-profile.php';
        });
        $router->get('/file-leave', function () {
          
            include './pages/authorized/employee/file-leave.php';
        });
        $router->get('/employee-request', function () {
          
            include './pages/authorized/employee/employee-request.php';
        });


    }
    
    if(ACCOUNT_INFO['accountType'] == 'HR Officer') {
        echo 'this is for Officer';
    }


       




        $router->get('/page-error', function () {
          
            include './pages/authorized/employee/error.php';
        });


   
        $router->get('/hr-employees', function () {
          
            include './pages/authorized/human-resource/include/hr-employees.php';
        });
        $router->get('/hr-add-employee', function () {
          
            include './pages/authorized/human-resource/include/hr-add-employee.php';
        });
   
        $router->get('/hr-landing', function () {
          
            include './pages/authorized/human-resource/include/humanresource-landing.php';
        });
        $router->get('/hr-file-leave', function () {
          
            include './pages/authorized/human-resource/include/file-leave.php';
        });
        $router->get('/hr-all-requests', function () {
          
            include './pages/authorized/human-resource/include/hr-all-requests.php';
        });






        

        
   } 
   else {

        $router->get('/', function () {
            include './pages/unauthorized/login.php';
        });

         /* (Sign In) route */
        $router->get('/signin', function () {
            include './pages/unauthorized/login.php';
        });

   }
    


    
    
?>



