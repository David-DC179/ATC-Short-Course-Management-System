<?php
         
         $username = $_SESSION['username'];

         //displya name
        $name = $_SESSION['name'];

         $role = $_SESSION['role'];

         //diplsay role 
         $rolename = $_SESSION['namee'];
         
         if(!isLoggedIn($username)){
             header("Location: ../index.php");
         }
         if(!isAdmin($role)){
             header("Location: ../index.php");
         }
