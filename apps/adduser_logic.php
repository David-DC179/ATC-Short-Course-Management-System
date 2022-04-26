<?php 
   

//    session_start();
//    require "../function/login.php";
//   require "../apps/sesseion.php";
   require "../database/conncetion.php";
   require "../function/sanitalization.php";

   




    // $errors = array($name=>"Name is required",$username=>"Username is required", $departiment=>"Departiment is required", $role=>"Role is required", $status=>"Status is required");
        $nameErr = $usernameErr = $departimentErr = $roleErr = $statusErr = $rowErr= "";
        $namee = $username = $departiment = $rolee = $status = $row= "";
        if(isset($_POST['submit'])){

            $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $username = mysqli_real_escape_string($conn, dataSanitizations($_POST['username']));
            $departiment = mysqli_real_escape_string($conn, dataSanitizations($_POST['departiment']));
            $rolee = mysqli_real_escape_string($conn, dataSanitizations($_POST['roles']));
            $status = mysqli_real_escape_string($conn, dataSanitizations($_POST['status']));
            // $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));


            if(empty($namee)){
                $nameErr = "Name is required";
                
            }

            if(empty($username)){
                $usernameErr = "Username is required";
                
            }

            if(empty($departiment)){
                $departimentErr = "Departiment is required";
                
            }

            if(empty($rolee)){
                $roleErr = "Role is required";
                
            }
         

            if(empty($status)){
                $statusErr = "Status is required";
                
            }


            elseif( $namee && $username && $departiment && $rolee && $status){
                $insert = "INSERT INTO users(name,username,departiment,role,status) VALUES('$namee','$username','$departiment','$rolee','$status')";
                $query= mysqli_query($conn , $insert);

                if($query){
                     header("location:../layouts/users.php");
                     $rowErr = "row inserted";
                }
              
            }

           


        }
?>