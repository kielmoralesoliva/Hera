<?php
    function getUploadedMyFiles() {
        global $conn;
        $result = $conn->query("SELECT * FROM `repository` where employeeId= '".$_SESSION['loggedin-account-info']['employee_ID']."'");
         $list = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($list,$row);
            }
        } 
        return $list;
    }
?>