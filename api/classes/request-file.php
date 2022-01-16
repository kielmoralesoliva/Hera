<?php


class RequestFile
{
   
    public function requestFile($post)
    {
        global $conn;
       
       



        $accountinfo =  $_SESSION['loggedin-account-info'];
       // $date = date("m-d-Y");

        echo $accountinfo;



      //  $sql = "INSERT INTO `request_traffic`(`Employee`, `College`, `Campus`, `Status`, `Email`, `Data_Requested`, `Date_Released`, `Signature`, `Request_Type`, `Request_ID`) 
       // VALUES ('".$accountinfo['fullname']."','".$accountinfo['college']."','".$accountinfo['campus']."','".$accountinfo['status']."','".$accountinfo['emailAddress']."','".$date."',
       // '".$date."','".$accountinfo['surname']."','".$post['requestType']."','[value-10]')";
        
        //echo $sql;
      

       // if ($conn->query($sql) === TRUE) {
         // echo "New record created successfully";
        //} else {
         // echo "Error: " . $sql . "<br>" . $conn->error;
        //}
        


    }
}


?>


