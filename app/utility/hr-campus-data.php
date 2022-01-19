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











function hrTotalEmployees() {
 

    global $conn;

    $sql = "SELECT * FROM user_account";
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