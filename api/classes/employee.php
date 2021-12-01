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
            echo json_encode(array('errorCode'=>404,'errorMsg'=>'No results'));
        }
    }


    public function insert_employee($post)
    {
        
        global $conn;

        $sql = "INSERT INTO `user_account`(`id`, `username`, `password`, `emailAddress`, `phoneNumber`, `accountType`, `employeeIdNumber`, `furname`, `name`, `middle`, `college`, `birthdate`, `gender`, `educBackground`, `academicRank`, `status`, `campus`, `sickLeave`, `vacationLeave`, `splLeave`, `mandatoryLeave`, `maternityLeave`, `PaternityLeave`, `SoloParentLeave`)
                              VALUES ('',
                              '".$post['furname']."',
                              '".$post['furname']."',
                              '',
                              '',
                              '".$post['accountType']."',
                              '".$post['furname']."',
                              '".$post['name']."',e-8]',
                              '".$post['middle']."',
                              '".$post['college']."',
                              '',
                              '".$post['gender']."',
                              '',
                              '".$post['academicRank']."',
                              '".$post['status']."',
                              '".$post['campus']."',
                              '',
                              '',
                              '',
                              '',
                              '',
                              '',
                              '')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('success'=>true,'message'=>'Successfully Created'));
        }
        else {
            echo json_encode(array('success'=>false,'message'=>'No results'));
        }







    }


}



?>


