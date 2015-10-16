<?php
    // Start the PHP session
    session_start();

    include('passwords.php');

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

/*
    if("Ely" == $username){
        header("Location: http://www.google.com");
    }else{
        header("Location: http://www.duckduckgo.com");
    }
*/
?>
