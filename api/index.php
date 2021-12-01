<?php

    header('Content-Type: application/json');

    include '../app/router/router.php'; 

    // App Configuration
    include '../app/config/app-config.php'; 
    include '../app/common/validation.php'; 

    include './classes/employee.php';
    include './classes/signin.php';

    $router->post('/signin', function () {
        $entry = new Entry();
        $entry->signin($_POST);
    });

    $router->get('/employee-list', function () {
        $employee = new Employee();
        $employee->get_employees($_GET);
    });

    $router->post('/add-employee-form', function () {
        $employee = new Employee();
        $employee->add_employee($_POST);
    });

    
   
    $router->get('', function () {
        echo json_encode(array('errorCode'=>404,'message'=>'Invalid request'));
    });

    // Run router
    $router->run();
?>