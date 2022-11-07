<?php

$link = mysqli_connect("localhost", "root", "", "welcome");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $fname = mysql_real_escape_string($link,$_REQUEST['fname']);
 $lname = mysql_real_escape_string($link,$_REQUEST['lname']);
 $gender= mysql_real_escape_string($link,$_REQUEST['gender']);
 $reg_no = mysql_real_escape_string($link,$_REQUEST['reg_no']);
 $department = mysql_real_escape_string($link,$_REQUEST['department']);
 $email = mysql_real_escape_string($link,$_REQUEST['email']);
 $dob= mysql_real_escape_string($link,$_REQUEST['dob']);
 $mobnumber = mysql_real_escape_string($link,$_REQUEST['mobnumber']);
 $adress= mysql_real_escape_string($link,$_REQUEST['address']);
 $country= mysql_real_escape_string($link,$_REQUEST['country']);
 $state= mysql_real_escape_string($link,$_REQUEST['state']);
 $city = mysql_real_escape_string($link,$_REQUEST['city']);
 $pincode= mysql_real_escape_string($link,$_REQUEST['pincode']);





// Attempt insert query execution
$sql = "INSERT INTO welcome (fname,lname,gender,reg_no, department,email, dob, mobnumber,address,country,state,city,pincode) VALUES ('$fname','$lname','$gender',$reg_no','$department,'$email', '$dob', '$mobnumber','$address','$country','$state','$city','$pincode')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>