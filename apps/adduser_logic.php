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
            $rolee = mysqli_real_escape_string($conn, dataSanitizations($_POST['role']));
            $status = mysqli_real_escape_string($conn, dataSanitizations($_POST['status']));

           

            $selectd1 = "SELECT id FROM departiments WHERE name='$departiment'";
                 $resultd1 = mysqli_query($conn , $selectd1);

                $rowd1 = mysqli_fetch_assoc($resultd1);
                $departimentd1 = $rowd1['id'];

                


        
            $selectr1 = "SELECT * FROM roles where name='$rolee'";

            
            $queryr1 = mysqli_query($conn,$selectr1);
        
                   
        
        
                    $rowr1 = mysqli_fetch_assoc($queryr1); 
                    $roler1 = $rowr1['id'];
      
                   
                    
       
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

        

        elseif($namee && $username &&  $departimentd1 && $roler1 && $status){
            
         
        //  die ($namee.$username.$departimentd1.$roler1.$status);

         $insert = "INSERT INTO users(name,username,departiment_id,role,status) VALUES('$namee','$username',$departimentd1,$roler1,'$status')";
           
        $query= mysqli_query($conn,$insert);

       
        if($query){
           header("location:../layouts/users.php");
        }
        else{
            echo "jaribu";
        }
        }
        

    }