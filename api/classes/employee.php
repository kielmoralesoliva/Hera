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


    public function add_employee($post)
    {
        
        global $conn;
        echo $post['furname'];
        
        try {
            $sql = "INSERT INTO `user_account`(`id`, `username`, `password`, `emailAddress`, `phoneNumber`, `accountType`, `gender`, `employeeIdNumber`, `furname`, `name`, `middle`, `college`, `birthdate`, `educBackground`, `academicRank`, `status`, `campus`, `sickLeave`, `vacationLeave`, `splLeave`, `mandatoryLeave`, `maternityLeave`, `PaternityLeave`, `SoloParentLeave`)
                              VALUES (
                                  null,
                                  '".$post['username']."',
                                  '".$post['password']."',
                                  '',
                                  '',
                                  'HR Officer',
                                  'female',
                                  '',
                                  '".$post['furname']."',
                                  '".$post['name']."',
                                  '".$post['middle']."',
                                  '',
                                  '',
                                  '',
                                  '',
                                  'Temporary',
                                  '',
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
                echo json_encode(array('success'=>false,'message'=>'Unable to create data', 'errorDetails'=>$conn->error));
            }
        } catch (\Throwable $th) {
            echo json_encode(array('success'=>false,'message'=>'Unable to process your data. Paki ayos naman'));
        }

    }


}



?>


