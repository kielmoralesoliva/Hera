<?php


class Entry
{
   
    public function signin($post)
    {
        global $conn;
       
        $sql = "SELECT * FROM `user_account` WHERE `username`='".$post['username']."' AND `password`='".$post['password']."' OR `emailAddress`='".$post['username']."' AND `password`='".$post['password']."' ";
        
        $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();

            $_SESSION['loggedin-account-info'] = $row;
            
            echo json_encode(array(
                'success'=>true,
                'data'=> $row
            ));
        } else {
            echo json_encode(array(
                'success'=>false,
                'message'=> 'Invalid account credentials',
            ));
        }
    }
}


?>


