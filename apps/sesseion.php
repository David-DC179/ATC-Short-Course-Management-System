<?php
         session_start();
        
         require "../function/login.php";
 
         $username = $_SESSION['username'];
         
         $name = $_SESSION['name'];
         $status = $_SESSION['status'];
       
         $role = $_SESSION['role'];
         if(!isLoggedIn($username)){
             header("Location: ../index.php");
             array_push($errors, "haupo");
         }
         if(!isAdmin($role)){
             header("Location: ../index.php");
             array_push($errors, "haupo");
         }
?>