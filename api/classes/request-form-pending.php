<?php


class RequestFormPending
{
   
    public function request_pending($post)
    {
        global $conn;
       
        $accountinfo =  $_SESSION['loggedin-account-info'];
        $date = date("m-d-Y");

        $sql = "INSERT INTO `request_traffic`(`Employee`, `College`, `Campus`, `Status`, `Email`, `Data_Requested`, `Date_Released`, `Signature`, `Request_Type`, `Request_ID`) 
                VALUES (
                  '".$accountinfo['fullname']."',
                  '".$accountinfo['college']."',
                  '".$accountinfo['campus']."',
                  'Pending',
                  '".$accountinfo['emailAddress']."',
                  '".$date."',
                  '-PENDING-',
                  '".$accountinfo['surname']."',
                  '".$post['requestType']."', null)";
                

        if ($conn->query($sql) === TRUE) {
          echo json_encode(array(
              'success'=>true,
              'message'=> 'Successfully created'
          ));
        } else {
          echo json_encode(array(
              'success'=>false,
              'message'=> 'Unable to process the request',
              'errorDetail' =>  $sql . "<br>" . $conn->error
          ));
        }
        


    }
}


?>


