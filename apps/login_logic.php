<?php 

require "./function/sanitalization.php";
require "./database/conncetion.php";
   

    $errors = array();

    if(isset($_POST['submit'])){
         $username = mysqli_real_escape_string($conn, dataSanitizations( $_POST['username']));
         $password = mysqli_real_escape_string($conn, dataSanitizations($_POST['password'])) ;

        global $errors;

        if(empty($username)){
            array_push($errors, "Username is required");
        }

        if(empty($password)){
            array_push($errors,"Password is required");
        }

        if(empty($errors)){
            header("location:./layouts/dashbord.php");
        }

        
    }
?>