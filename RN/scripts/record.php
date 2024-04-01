<?php
 include('../Database/databaseconnection.php');  
 $fullName = $_POST['fullName']; 
 $email = $_POST['email']; 
 $pNumber = $_POST['pNumber']; 
 $dob = $_POST['dob']; 
 $gender = $_POST['gender']; 
 $stAddress = $_POST['stAddress']; 
 $stAddress1 = $_POST['stAddress1']; 
 $city = $_POST['city']; 
 $region = $_POST['region']; 
 $pCode = $_POST['pCode']; 
 $course = $_POST['course']; 

 if($con->connect_error){
  die('Connection Failed : '.$con->connect_error);
}
else{

    $stmt = $con->prepare("insert into courseReg(full_name,email,phone_number,dob,gender,street_address,street_address1,city,region,postal_code,course)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss",$fullName,$email,$pNumber,$dob,$gender,$stAddress,$stAddress1,$city,$region,$pCode,$course);
    $stmt->execute();
    header('refresh:0.25; url=../regsucc.html');
    $stmt->close();
    $con->close();
}            


?>
