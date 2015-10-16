<?php
    include('passwords.php');
    include('functions.php');

    $username    = $_POST["username"];
    $thePassword = $_POST["password"];

if(
    array_key_exists($username , $passwords )
    && $passwords[$username] == $thePassword
){
    // Set the userid in the session to the userid passed in
    $_SESSION['username']=$username;

    header("Location: index.php");
}else{
    header("Location: login.php");
}


?>
