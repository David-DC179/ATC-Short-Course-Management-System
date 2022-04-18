<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
session_destroy();

$msg = "";

if(!$msg){
    $msg = "<p class='alert alert-warning'> THANK YOU USING OUR SYSTEM </p>";
    header("Location: ../index.php?msg=$msg");
}
