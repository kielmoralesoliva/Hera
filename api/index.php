<?php

    header('Content-Type: application/json');

    include '../app/router/router.php'; 

    // App Configuration
    include '../app/config/app-config.php';

    include './classes/entry.php';
    include './classes/file-leave.php';
    include './classes/request-form.php';
    include './classes/approve-request-form.php';

    // include './classes/employee.php';

    $router->post('/signin', function () {
        $entry = new Entry();
        $entry->signin($_POST);
    });

    $router->post('/file-leave', function () {
        $entry = new FileLeave();
        $entry->fileLeave($_POST);
    });

    $router->post('/request-file', function () {
       $rf = new RequestForm();
       $rf->request($_POST);
    });

        $router->post('/approve-request-file', function () {
       $rf = new RequestForm();
       $rf->approveRequest($_POST);
    });

    $router->post('/logout', function () {
        session_unset();
        echo json_encode(array(
            'success'=>true,
            'message'=> 'Successfully Logged Out',
        ));
    });




    // $router->get('/employee-list', function () {
    //     $employee = new Employee();
    //     $employee->get_employees($_GET);
    // });

    // $router->post('/add-employee-form', function () {
    //     $employee = new Employee();
    //     $employee->add_employee($_POST);
    // });

    
   
    $router->get('', function () {
        echo json_encode(array('errorCode'=>404,'message'=>'Invalid request'));
    });

    // Run router
    $router->run();
?>