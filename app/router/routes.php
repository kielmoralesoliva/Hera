<?php
    include './app/router/router.php';
    
    include './app/config/app-config.php';   



   $activation = null;
 
 //   if( isset( $_COOKIE['user_id'] ) AND !empty( $_COOKIE['user_id'] ) ) {
       $router->get('/dashboard', function () {
            $activation = "dashboard";
            include './pages/authorized/human-resource/dashboard.php';
        });

        $router->get('/employee-list', function () {
            $activation = "employee-list";
            include './pages/authorized/human-resource/employee-list.php';
        });

        $router->get('/add-employee', function () {
            $activation = "employee-list";
            include './pages/authorized/human-resource/add-employee.php';
        });

        $router->get('/announcement', function () {
            $activation = "announcement";
            include './pages/authorized/human-resource/announcement.php';
        });

        $router->get('/leave-request', function () {
            $activation = "leave-request";
            include './pages/authorized/human-resource/leave-request.php';
        });

        $router->get('/leave-types', function () {
            $activation = "leave-request";
            include './pages/authorized/human-resource/leave-types.php';
        });

        $router->get('/holiday', function () {
            $activation = "holiday";
            include './pages/authorized/human-resource/holiday.php';
        });

        $router->get('/employee', function () {
          
            include './pages/authorized/employee/employee-dashboard.php';
        });
        $router->get('/employee-dashboard', function () {
          
            include './pages/authorized/employee/employee-dashboard.php';
        });
        $router->get('/employee-announcement', function () {
          
            include './pages/authorized/employee/employee-dashboard2.php';
        });
        $router->get('/employee-leave-balance', function () {
          
            include './pages/authorized/employee/leave-balance.php';
        });
        $router->get('/employee-leave-types', function () {
          
            include './pages/authorized/employee/leave-types.php';
        });
        $router->get('/directory', function () {
          
            include './pages/authorized/employee/directory.php';
        });
        $router->get('/employee-home', function () {
          
            include './pages/authorized/employee/employee-home.php';
        });

        
  //  } 
   // else {

       
        /* Homepage route route */
        $router->get('/', function () {
            include './pages/unauthorized/home.php';
        });

         /* (Sign In) route */
        $router->get('/signin', function () {
            include './pages/unauthorized/signin.php';
        });

  //  }
    


    
    
?>