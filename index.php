<?php

//require 'conf.php';

session_start();
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
    header("location:home.php?user=$user&pass=$pass");
} else {
    header("location:login.html");
}