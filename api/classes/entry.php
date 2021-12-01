<?php


class Entry
{
   
    public function signin($post)
    {
        global $conn;

        $sql = "SELECT `ID`, `Username`, `Password` FROM employeedata2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode(array(
                'errorCode'=>0,
                'responseData'=> $row
            ));
        } else {
            echo json_encode(array('errorCode'=>404,'errorMsg'=>'Invalid username or password'));
        }
    }
}


?>


