<?php
         
         $username = $_SESSION['username'];
         $name = $_SESSION['name'];
         $role = $_SESSION['role'];
         if(!isLoggedIn($username)){
             header("Location: ../  index.php");
         }
         if(!isAdmin($role)){
             header("Location: ../index.php");
         }
