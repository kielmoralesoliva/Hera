<?php


class Entry
{
   
    public function signin($post)
    {
        global $conn;

        $sql = "SELECT * FROM `user_account` WHERE `` ";
        if ($conn->query($sql) === TRUE) {
            $row = $result->fetch_assoc();
            echo json_encode(array(
                'success'=>true,
                'data'=> $row
            ));
        } else {
            echo json_encode(array(
                'success'=>false,
                'message'=> 'Invalid account credentials'
            ));
        }
    }
}


?>


