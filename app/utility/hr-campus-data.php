<?php




function userRequests() {

    
    global $conn;

    $sql = "SELECT * FROM request_traffic";
    $result = $conn->query($sql);
    $list = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;

}



function myRequests() {

    
    global $conn;

    $sql = "SELECT * FROM `request_traffic` where Employee = '".ACCOUNT_INFO['fullname']."'";
    $result = $conn->query($sql);
    $list = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;

}









function hrTotalEmployees() {
 

    global $conn;

    $sql = "SELECT * FROM user_account where status='Permanent' OR status='Temporary'";
    $result = $conn->query($sql);
    $list = array();


    if ($result->num_rows > 0) {
    

        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;
}


function hrLecturers() {
 

    global $conn;

    $sql = "SELECT * FROM user_account where status='Lecturer'";
    $result = $conn->query($sql);
    $list = array();


    if ($result->num_rows > 0) {
    

        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;
}

function hrJobOrders() {
 

    global $conn;

    $sql = "SELECT * FROM user_account where status='Job Order'";
    $result = $conn->query($sql);
    $list = array();


    if ($result->num_rows > 0) {
    

        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;
}







?>