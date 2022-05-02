<?php 
   require "../database/conncetion.php";
   require "../function/sanitalization.php";

   $nameErr = $lastnameErr = $emailErr = $phoneErr = $departimentErr = $rowErr= "";
   $namee  = $lastname = $email = $phone = $departiment  = $row= "";
   if(isset($_POST['submit'])){

      $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
      $lastname = mysqli_real_escape_string($conn, dataSanitizations($_POST['lastname']));
      $email = mysqli_real_escape_string($conn, dataSanitizations($_POST['email']));
      $phone = mysqli_real_escape_string($conn, dataSanitizations($_POST['phone']));
      $departiment = mysqli_real_escape_string($conn, dataSanitizations($_POST['departiment']));
      

      $selectd1 = "SELECT id FROM departiments WHERE name='$departiment'";
      $resultd1 = mysqli_query($conn , $selectd1);

     $rowd1 = mysqli_fetch_assoc($resultd1);
     $departimentd1 = $rowd1['id'];


        if(empty($namee)){
            $nameErr = "First name is required";
        
            }

        if(empty($lastname)){
            $lastnameErr = "Last name is required";
            
            }
        if(empty($email)){
            $emailErr = "Email is required";
                
            }
        if(empty($phone)){
            $phoneErr = "Phone number is required";
                
            }
  
        if(empty($departiment)){
           $departimentErr = "Departiment is required";
     
        }
  
     
  
  
     elseif($namee && $lastname && $email && $phone && $departimentd1  ){
  
        // die ($namee.$departimentd1.$duration);
  
        $insert = "INSERT INTO instructors(name,last_name,email,phone,departiment_id) VALUES('$namee','$lastname','$email','$phone',$departimentd1)";
             
        $query= mysqli_query($conn,$insert);
  
       
        if($query){
           header("location:../layouts/instructors.php");
        }
        else{
            echo "jaribu";
            
        }
  

    }

}
