<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/13
 * Time: 13:28
 */

session_start();
try
{
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
        unset($_SESSION['user']);
        unset($_SESSION['pass']);
        session_destroy();
        header("location:index.php");
    }else{
        echo 'sign out failed,please try again!';
    }
}catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}