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
                $role2 = $user['role'];
                $name2 = $user['name'];
                $status2 = $user['status'];

               
                
                    $selectr = "SELECT * FROM roles WHERE id=$role2 ";
                    $resultr = mysqli_query($conn , $selectr);

                    $rowr = mysqli_fetch_assoc($resultr);
                    $rolename = $rowr['name'];
                    $role_id = $rowr['id'];
                    

                    


                if($username == $username2 && $password == $password2 && $role2 == $role_id && $status2){
                    
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['status'] = $user['status'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['id'] = $rowr['id'];
                    $_SESSION['namee'] = $rowr['name'];

                    
           
                    if($role2 == '1' && $status2 ='Actives'){
                      
      
                        
                       header("location:./layouts/dashbord.php");

                    }

                    elseif( $role2 == '2' && $status2 =='Actives'){
                        header("location:./layouts/dashbord.php");

                    }

                    elseif($role2 == '3' && $status2 == 'Actives'  ){
                        array_push($errors, " Instructor Dashbord on progress sorry!!");

                    }

                    elseif($role2=='4'&& $status2 == 'Actives'){
                      array_push($errors, "Accoutant Dashbord on progress sorry!!");

                    }

                    elseif($role2 =='5' && $status2 == 'Actives'  ){
                        array_push($errors, " Rector Dashbord on progress sorry!!");

                    }


                    else{
                        array_push($errors, " Your Account is in Active Contact Your Admin");
                    }


                    // if($role =='1' && $status == 'Active' ||  $role =='Coordinator' && $status == 'Active' ){
                        
                    // }
                    
                 
                
                    // else{
                    //    
                    // }

                     
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