<?php 

require "./function/sanitalization.php";
require "./database/conncetion.php";
   session_start();
   require "./function/login.php";

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

            $select = "SELECT username,password,role,name from users WHERE username ='$username'";
            $result = mysqli_query($conn , $select);
            if(mysqli_num_rows($result)==1){
                $user = mysqli_fetch_assoc($result);
                $username2 = $user['username'];
                $password2 = $user['password'];
                $name = $user['name'];
          

                if($username == $username2 && $password == $password2){
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['name'] = $user['name'];

                    $role = $_SESSION['role'];

                    if($role =='Admin'){
                        header("location:./layouts/dashbord.php");
                    }
                    else{
                        array_push($errors, " Wew sio admini bhan");
                    }

                     
                }
                else{
                    array_push($errors, "Invalid credentials");
                }
            }else{
                array_push($errors, "Invalid credentials");
            }
           
        }

        
    }
?>