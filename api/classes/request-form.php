<?php


class RequestForm
{
   
    public function request($post)
    {
        global $conn;
       
        $accountinfo =  $_SESSION['loggedin-account-info'];
        $date = date("m-d-Y");

        $sql = "INSERT INTO `request_traffic`(`Employee`, `College`, `Campus`, `Status`, `Email`, `Data_Requested`, `Date_Released`, `Signature`, `Request_Type`, `Request_ID`) 
                VALUES (
                  '".$accountinfo['fullname']."',
                  '".$accountinfo['college']."',
                  '".$accountinfo['campus']."',
                  'Released',
                  '".$accountinfo['emailAddress']."',
                  '".$date."',
                  '".$date."',
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

     public function approveRequest($post)
    {
        global $conn;
       
        $sql = "UPDATE request_traffic SET `Status`='Approved' WHERE `Request_ID`='".$post['requestId']."'";

        if ($conn->query($sql) === TRUE) {
          echo json_encode(array(
            'success'=>true,
            'message'=> 'Successfully updated',
            'error' => $sql
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


