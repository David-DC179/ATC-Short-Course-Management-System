<?php 
   

//    session_start();
//    require "../function/login.php";
//   require "../apps/sesseion.php";
   require "../database/conncetion.php";
   require "../function/sanitalization.php";

   
// Full texts	
// id
// batch_id
// status
// payment


        $first_nameErr = $middle_nameErr = $last_nameErr = $date_of_birthErr = $place_of_birthErr = $nationalityErr = $marital_statusErr = $genderErr = $phonenumberErr = $emailErr = $phonenumberErrv = $emailErrv = $current_addressErr ="";
$id = $first_name = $middle_name = $last_name = $date_of_birth = $place_of_birth = $nationality = $marital_status = $gender = $phonenumber = $email = $current_address  = "";
        if(isset($_POST['submit'])){
            $id = $_POST['select'];

            die($id);
            $first_name = mysqli_real_escape_string($conn, dataSanitizations($_POST['firstname']));
            $middle_name = mysqli_real_escape_string($conn, dataSanitizations($_POST['middlename']));
            $last_name = mysqli_real_escape_string($conn, dataSanitizations($_POST['lastname']));
            $date_of_birth = mysqli_real_escape_string($conn, dataSanitizations($_POST['DOB']));
            $place_of_birth = mysqli_real_escape_string($conn, dataSanitizations($_POST['POB']));
            $nationality  = mysqli_real_escape_string($conn, dataSanitizations($_POST['nationality']));
            
            $marital_status = mysqli_real_escape_string($conn, dataSanitizations($_POST['marital']));
            $gender = mysqli_real_escape_string($conn, dataSanitizations($_POST['gender']));
            $phonenumber = mysqli_real_escape_string($conn, dataSanitizations($_POST['phone']));
            $email = mysqli_real_escape_string($conn, dataSanitizations($_POST['email']));
            $current_address = mysqli_real_escape_string($conn, dataSanitizations($_POST['currentaddress']));
           

            // $name = $students['first_name']; 
            // $middle = $students['middle_name']; 
            // $last = $students['last_name']; 
            // $gender = $students['gender']; 
            // $batch = $students['batch_id'];
            // $status = $students['status'];
            // $payment = $students['payment'];

           

                $selectc1 = "SELECT id FROM courses WHERE name='$course'";
                 $resultc1 = mysqli_query($conn , $selectc1);

                $rowc1 = mysqli_fetch_assoc($resultc1);
                $courses = $rowc1['id'];


                if(empty($first_name)){
                    $first_nameErr = "firstname is required";
                    
                }

                if(empty($middle_name)){
                    $middle_nameErr = "Middlename is required";
                    
                }

                if(empty($last_name)){
                    $last_nameErr = "Lastname is required";
                    
                }

                if(empty($date_of_birth)){
                    $date_of_birthErr = "Date of birth is required";
                    
                }
        
                if(empty($place_of_birth)){
                    $place_of_birthErr = "Place of birth is required";
                    
                }
        
                if(empty($nationality)){
                    $nationalityErr = "Nationality name is required";
                    
                }
        
                if(empty($marital_status)){
                    $marital_statusErr = "Marital Status is required";
                    
                }
        
                if(empty($gender)){
                    $genderErr = "Gender is required";
                    
                }

                if(!empty($phonenumber)){

                    if(!filter_var($phonenumber,FILTER_VALIDATE_INT)){
                        $phonenumberErrv  = "Invalid Phone number ";
    
                    }

                  
                    
                    
                }
                else{
                    $phonenumberErr = "Phonenumber is required";
              }


                if(!empty($email)){

                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $emailErrv = "Invalid Email Address";
    
                    }
    
                   
                    
                }
                else{
                    $emailErr = "Email address is required";
              }

            
                if(empty($current_address)){
                    $current_addressErr = "Current address is required";
                    
                }
        
                
        
                    elseif($first_name && $middle_name && $last_name && $date_of_birth && $place_of_birth && $nationality && $marital_status && $gender && $phonenumber && $email && $current_address){
                            $insert = "INSERT INTO students(first_name,middle_name,last_name,date_of_birth,place_of_birth,nationality,marital_status,gender,phonenumber,email,current_address) 
                                                VALUES('$first_name', '$middle_name', '$last_name', '$date_of_birth', '$place_of_birth', '$nationality', '$marital_status', '$gender', '$phonenumber' , '$email','$current_address')";
                   
                   $query = mysqli_query($conn,$insert);

                   if($query){
                       header("location:../layouts/students.php");
                   }
                   else{
                       echo "jaribu";
                   }

                }
                   


        }
