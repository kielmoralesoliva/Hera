<?php
    include './app/router/router.php';
    
    include './app/config/app-config.php';   




    $router->get('/dashboard', function () {
        include './pages/authorized/human-resource/dashboard.php';
    });

    $router->get('/employee-list', function () {
        include './pages/authorized/human-resource/employee-list.php';
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