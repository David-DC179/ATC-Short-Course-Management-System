<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
session_destroy();

header("Location: ../index.php");


// $msg = "";


//     $msg = "<p class='alert alert-warning'> THANK YOU USING OUR SYSTEM </p>";

//     global $msg;
    
//     if(){
//         echo $msg."ertyuiop[poiuop";
//      
//     }
//     else{
//         header("Location: ../index.php");
//     }
    

