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

            $select = "SELECT * from users WHERE username ='$username'";
            $result = mysqli_query($conn , $select);
            if(mysqli_num_rows($result)==1){
                $user = mysqli_fetch_assoc($result);
                $username2 = $user['username'];
                $password2 = $user['password'];
                $name = $user['name'];
                $status = $user['status'];

          

                if($username == $username2 && $password == $password2){
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['status'] = $user['status'];

                    $role = $_SESSION['role'];
                    $status = $_SESSION['status'];

                    if($role =='Admin' && $status == 'Active' ||  $role =='Coordinator' && $status == 'Active' ){
                        header("location:./layouts/dashbord.php");
                    }
                    elseif($role =='Instructor' && $status == 'Active' ){
                        array_push($errors, " Wew sio admini bhan");

                    }
                    elseif($role =='Accountant' && $status == 'Active' ){
                        array_push($errors, " Wew sio admini bhan");

                    }
                    elseif($role =='Rector' && $status == 'Active' ){
                        array_push($errors, " Wew sio admini bhan");

                    }
                    else{
                        array_push($errors, " Your Account is in Active Contact Your Admin");
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