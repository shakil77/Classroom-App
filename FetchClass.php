<?php
include 'Connect.php';
$cname = $_GET['cname'];
if(isset($cname)){
    $sql = "Select * from class where cname='$cname'";
    $result = $con->query($sql);
    if($result->num_rows>0){
        $rows = $result->fetch_assoc(); 
        $subject = $rows['subject'];   
    }  
}
   


