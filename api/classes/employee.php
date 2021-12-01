<?php


class Employee
{
   
    public function get_employees($get)
    {
        global $conn;

        $sql = "SELECT * FROM `user_account`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode(array(
                'success'=>true,
                'data'=> $row
            ));
        } else {
            echo json_encode(array('success'=>false,'message'=>'No results'));
        }
    }
}


?>


