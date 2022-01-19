<?php





function totalEmployees() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account`");

    $row =  mysqli_num_rows( $result);
    echo $row;
}


function totalRegularFaculty() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Permanent' OR  status = 'Temporary' OR  status = 'Casual'");

    $row =  mysqli_num_rows( $result);
    echo $row;
    function percentage1() {
        global $conn;
        $result = $conn->query("SELECT * FROM `user_account`");
        $row1 =  mysqli_num_rows( $result);
     
        $result2 = $conn->query("SELECT * FROM `user_account` where status = 'Permanent' OR  status = 'Temporary' OR  status = 'Casual'");
    
        $row2 =  mysqli_num_rows( $result2);
        $percent = ($row2 / $row1) *100;
       echo round($percent, 2);
    }
}






function totalJobOrders() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Job Order'");

    $row =  mysqli_num_rows( $result);
    echo $row;


   function percentage2() {
    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Job Order'");
    $row =  mysqli_num_rows( $result);


    $result2 = $conn->query("SELECT * FROM `user_account`");

    $row2 =  mysqli_num_rows( $result2);

    $percent = ($row / $row2) *100;
    echo round($percent, 2);

    
   }
}

function totalLecturers() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Lecturer'");

    $row =  mysqli_num_rows( $result);
    echo $row;

    function percentage3() {
        global $conn;
    
        $result = $conn->query("SELECT * FROM `user_account` where status = 'Lecturer'");
        $row =  mysqli_num_rows( $result);
    
    
        $result2 = $conn->query("SELECT * FROM `user_account`");
    
        $row2 =  mysqli_num_rows( $result2);
    
        $percent = ($row / $row2) *100;
        echo round($percent, 2);
    
        
       }
}


function totalPermanent() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Permanent'");

    $row =  mysqli_num_rows( $result);
    echo $row;

    function percentage6() {
        global $conn;
    
        $result = $conn->query("SELECT * FROM `user_account` where status = 'Permanent'");
        $row =  mysqli_num_rows( $result);
    
    
        $result2 = $conn->query("SELECT * FROM `user_account`");
    
        $row2 =  mysqli_num_rows( $result2);
    
        $percent = ($row / $row2) *100;
        echo round($percent, 2);
    
        
       }
}

function totalTemporary() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where status = 'Temporary'");

    $row =  mysqli_num_rows( $result);
    echo $row;

    function percentage7() {
        global $conn;
    
        $result = $conn->query("SELECT * FROM `user_account` where status = 'Temporary'");
        $row =  mysqli_num_rows( $result);
    
    
        $result2 = $conn->query("SELECT * FROM `user_account`");
    
        $row2 =  mysqli_num_rows( $result2);
    
        $percent = ($row / $row2) *100;
        echo round($percent, 2);
    
        
       }
}


function totalRegularTeaching() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where academicRank = 'INSTRUCTOR I' OR 
    academicRank = 'INSTRUCTOR II' OR 
    academicRank = 'INSTRUCTOR III' OR 
    academicRank = 'ASSISTANT PROFESSOR I' OR 
    academicRank = 'ASSISTANT PROFESSOR II' OR
    academicRank = 'ASSISTANT PROFESSOR III' OR
    academicRank = 'ASSISTANT PROFESSOR IV' OR
    academicRank = 'ASSOCIATE PROFESSOR I' OR
    academicRank = 'ASSOCIATE PROFESSOR II' OR
    academicRank = 'ASSOCIATE PROFESSOR III' OR
    academicRank = 'ASSOCIATE PROFESSOR IV' OR
    academicRank = 'ASSOCIATE PROFESSOR V' ");

    $row =  mysqli_num_rows( $result);
    echo $row;
    function percentage4() {
        global $conn;
    
        $result = $conn->query("SELECT * FROM `user_account` where academicRank = 'INSTRUCTOR I' OR 
        academicRank = 'INSTRUCTOR II' OR 
        academicRank = 'INSTRUCTOR III' OR 
        academicRank = 'ASSISTANT PROFESSOR I' OR 
        academicRank = 'ASSISTANT PROFESSOR II' OR
        academicRank = 'ASSISTANT PROFESSOR III' OR
        academicRank = 'ASSISTANT PROFESSOR IV' OR
        academicRank = 'ASSOCIATE PROFESSOR I' OR
        academicRank = 'ASSOCIATE PROFESSOR II' OR
        academicRank = 'ASSOCIATE PROFESSOR III' OR
        academicRank = 'ASSOCIATE PROFESSOR IV' OR
        academicRank = 'ASSOCIATE PROFESSOR V' ");
        $row =  mysqli_num_rows( $result);
    
    
        $result2 = $conn->query("SELECT * FROM `user_account`");
    
        $row2 =  mysqli_num_rows( $result2);
    
        $percent = ($row / $row2) *100;
        echo round($percent, 2);
    
        
       }
    


}



function totalRegularNonTeaching() {
 

    global $conn;

    $result = $conn->query("SELECT * FROM `user_account` where academicRank != 'INSTRUCTOR I' AND  
    academicRank != 'INSTRUCTOR II' AND  
    academicRank != 'INSTRUCTOR III' AND  
    academicRank != 'ASSISTANT PROFESSOR I' AND  
    academicRank != 'ASSISTANT PROFESSOR II' AND 
    academicRank != 'ASSISTANT PROFESSOR III' AND 
    academicRank != 'ASSISTANT PROFESSOR IV' AND 
    academicRank != 'ASSOCIATE PROFESSOR I' AND 
    academicRank != 'ASSOCIATE PROFESSOR II' AND 
    academicRank != 'ASSOCIATE PROFESSOR III' AND 
    academicRank != 'ASSOCIATE PROFESSOR IV' AND 
    academicRank != 'ASSOCIATE PROFESSOR V' AND
    status != 'Job Order' AND  status != 'Lecturer'");

    $row =  mysqli_num_rows( $result);
    echo $row;
    function percentage5() {
        global $conn;
    
        $result = $conn->query("SELECT * FROM `user_account` where academicRank != 'INSTRUCTOR I' AND  
        academicRank != 'INSTRUCTOR II' AND  
        academicRank != 'INSTRUCTOR III' AND  
        academicRank != 'ASSISTANT PROFESSOR I' AND  
        academicRank != 'ASSISTANT PROFESSOR II' AND 
        academicRank != 'ASSISTANT PROFESSOR III' AND 
        academicRank != 'ASSISTANT PROFESSOR IV' AND 
        academicRank != 'ASSOCIATE PROFESSOR I' AND 
        academicRank != 'ASSOCIATE PROFESSOR II' AND 
        academicRank != 'ASSOCIATE PROFESSOR III' AND 
        academicRank != 'ASSOCIATE PROFESSOR IV' AND 
        academicRank != 'ASSOCIATE PROFESSOR V' AND
        status != 'Job Order' AND  status != 'Lecturer'");


        $row =  mysqli_num_rows( $result);
    
    
        $result2 = $conn->query("SELECT * FROM `user_account`");
    
        $row2 =  mysqli_num_rows( $result2);
    
        $percent = ($row / $row2) *100;
        echo round($percent, 2);
    
        
       }
    


}





function Directory() {

    
    global $conn;

    $sql = "SELECT * FROM directory";
    $result = $conn->query($sql);
    $list = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list,$row);
        }
    } 
    return $list;

}










?>