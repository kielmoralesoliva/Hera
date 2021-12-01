<?php
    include './app/router/router.php';
    
    include './app/config/app-config.php';   



   $activation = null;

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

    $router->get('/hr-profile', function () {
        $activation = "hr-profile";
        include './pages/authorized/human-resource/hr-profile.php';
    });


   /* if( isset( $_COOKIE['user_id'] ) AND !empty( $_COOKIE['user_id'] ) ) {
        
         Dashboard route 
        $router->get('/', function () {
            include './pages/authorize/admin/dashboard.php';
        });

         Dashboard route 
        $router->get('/dashboard', function () {
            include './pages/authorize/admin/dashboard.php';
        });

        /* (Notification) route 
        $router->get('/area-boundary', function () {
            include './pages/authorize/admin/LosBanosMapBoundary.php';
        });    

        /* Reports route 
        $router->get('/reports', function () {
            include './pages/authorize/admin/reports.php';
        });

        /* (Notification) route *
        $router->get('/notifications', function () {
            include './pages/authorize/admin/notifications.php';
        });

    } 
    else {

        /* (Sign In) route *
        $router->get('/', function () {
            include './pages/sign-in.php';
        });

        /* (Sign Up) route *
        $router->get('/signup', function () {
            include './pages/sign-up.php';
        });

    }
    
*/


    
    
?>