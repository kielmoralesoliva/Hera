<?php


class Employee
{
   
    public function get_employees($get)
    {
        global $conn;

        $sql = "SELECT `ID`, `EmployeeSurname`, `EmployeeName`, `EmployeeMiddle`, `College`, `Age` FROM employeedata2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

          
                echo json_encode(array(
                    'errorCode'=>0,
                    'responseData'=> $row


                ));
            

        } else {
            echo json_encode(array('errorCode'=>304,'errorMsg'=>'Incorrect username or password'));
        }

    }


}


?>


