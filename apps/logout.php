<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
session_destroy();

$msg = "";

if(!$msg){
    $msg = "THAN YOU USING OUR SYSTEM";
    header("Location: ../index.php?msg=$msg");
}
