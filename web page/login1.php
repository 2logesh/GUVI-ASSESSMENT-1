<?php

$link = mysqli_connect("localhost", "root", "", "register");
 
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
 $email = mysql_real_escape_string($link,$_REQUEST['email']);
 $password = mysql_real_escape_string($link,$_REQUEST['password']);
 


// Attempt insert query execution
$sql = "INSERT INTO login (email,password) VALUES ('$email','$password')";

if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
