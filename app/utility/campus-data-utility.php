<?php




function totalEmployees() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account`");

    $row =  mysqli_num_rows( $result);
    echo $row;
}


function totalRegularFaculty() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where educBackground = 'Masteral Graduate' OR  educBackground ='Doctorate Graduate'");

    $row =  mysqli_num_rows( $result);
    echo $row;
}




?>