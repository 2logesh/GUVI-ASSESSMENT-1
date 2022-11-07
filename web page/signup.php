<?php

$link = mysqli_connect("localhost", "root", "", "register");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $fname = mysql_real_escape_string($link,$_REQUEST['fname']);
 $lname = mysql_real_escape_string($link,$_REQUEST['lname']);
 $mobile = mysql_real_escape_string($link,$_REQUEST['mobile']);
 $DOB = mysql_real_escape_string($link,$_REQUEST['DOB']);
 $email = mysql_real_escape_string($link,$_REQUEST['email']);
 $password = mysql_real_escape_string($link,$_REQUEST['password']);
 $confirm_password = mysql_real_escape_string($link,$_REQUEST['confirm_password']);


// Attempt insert query execution
$sql = "INSERT INTO register (fname,lname,mobile,DOB,email,password, confirm_password) VALUES ('$fname','$lname','$DOB',$mobile','$email','$password', '$confirm_password')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
