



<?php



function getEmployeeData() {


global $conn;

$result = $conn->query("SELECT * FROM `request_traffic` where Request_ID= '".$_GET['id']."'");
$row = $result->fetch_assoc();




return $row;


}



















?>