<?php

session_start();
try
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user && $pass){
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        header("location:home.php?user=$user&pass=$pass");
    }else{
        echo 'login failed,please try again!';
    }
}catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}