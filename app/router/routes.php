<?php
    include './app/router/router.php';
    include './app/config/app-config.php'; 
    include './app/utility/campus-data-utility.php';
    include './app/utility/hr-campus-data.php';
    include './app/utility/print-request.php';
    include './app/utility/my-files.php';
?>

<script>
    var API_URL = '<?php echo API_URL;?>';
    var ASSET_URL = '<?php echo ASSET_URL;?>';
    var  SITE_URL = '<?php echo SITE_URL;?>';
</script>






<?php

$router->get('/request-form', function () {
          
    include './assets/printable/request-form.php';
});


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
        $router->get('/employee-extended', function () {
          
            include './pages/authorized/employee/employee-dashboard2.php';
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
        $router->get('/my-files', function () {
          
            include './pages/authorized/employee//include/my-files.php';
        });

    }
    
    if(ACCOUNT_INFO['accountType'] == 'HR Officer') {
        $router->get('/', function () {
          
            include './pages/authorized/human-resource/include/hr-all-requests.php';
        });
        
            $router->get('/hr-employees', function () {
          
                include './pages/authorized/human-resource/include/hr-employees.php';
            });
            $router->get('/hr-lecturers', function () {
          
                include './pages/authorized/human-resource/include/hr-lecturers.php';
            });
      
            $router->get('/hr-job-order', function () {
          
                include './pages/authorized/human-resource/include/hr-job-order.php';
            });
      
      
            $router->get('/hr-leave-management', function () {
          
                include './pages/authorized/human-resource/include/leave-management.php';
            });
            $router->get('/hr-add-employee', function () {
              
                include './pages/authorized/human-resource/include/hr-add-employee.php';
            });
            $router->get('/hr-campus-data', function () {
              
                include './pages/authorized/human-resource/include/hr-campus-data.php';
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

            $router->get('/print-request', function () {
              
                include './pages/authorized/human-resource/include/print-request-form.php';
            });





            
    


    }


       




        $router->get('/page-error', function () {
          
            include './pages/unauthorized/error.php';
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



