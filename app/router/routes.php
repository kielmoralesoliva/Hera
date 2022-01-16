<?php
    include './app/router/router.php';
    
    include './app/config/app-config.php';   



   $activation = null;
 
 //   if( isset( $_COOKIE['user_id'] ) AND !empty( $_COOKIE['user_id'] ) ) {





  

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




        $router->get('/page-error', function () {
          
            include './pages/authorized/employee/error.php';
        });


   
        $router->get('/hr-employees', function () {
          
            include './pages/authorized/human-resource/include/hr-employees.php';
        });
        $router->get('/hr-add-employee', function () {
          
            include './pages/authorized/human-resource/include/hr-add-employee.php';
        });
   
        $router->get('/request-list', function () {
          
            include './pages/authorized/human-resource/include/request.php';
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












        

        
  //  } 
   // else {

       

        $router->get('/', function () {
            include './pages/unauthorized/home.php';
        });

         /* (Sign In) route */
        $router->get('/signin', function () {
            include './pages/unauthorized/login.php';
        });

  //  }
    


    
    
?>