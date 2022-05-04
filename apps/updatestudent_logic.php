<?php 
    
        
         require "../function/sanitalization.php";
         require "../database/conncetion.php";

         if(isset($_GET['update'])){
            $id = $_GET['update'];
            $select = "SELECT * FROM students WHERE  id=$id";
            $result = mysqli_query($conn,$select);
            
            if(mysqli_num_rows($result)){
                $students=mysqli_fetch_assoc($result);
    
                $first_name2 = $students['first_name'];
                $middle_name2 = $students['middle_name'];
                $last_name2 = $students['last_name'];
                $date_of_birth2 = $students['date_of_birth'];
                $place_of_birth2 = $students['place_of_birth'];
                $nationality2  = $students['nationality'];
                $marital_status2 = $students['marital_status'];
                $gender2 =$students['gender'];
                $phonenumber2 = $students['phonenumber'];
                $email2 =$students['email'];
                $current_address2 = $students['current_address'];
            }
         }
        
        

            
        $first_nameErr = $middle_nameErr = $last_nameErr = $date_of_birthErr = $place_of_birthErr = $nationalityErr = $marital_statusErr = $genderErr = $phonenumberErr = $emailErr = $current_addressErr ="";
        $first_name = $middle_name = $last_name = $date_of_birth = $place_of_birth = $nationality = $marital_status = $gender = $phonenumber = $email = $current_address  = "";
        if(isset($_POST['update'])){
            $first_name1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['firstname']));
            $middle_name1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['middlename']));
            $last_name1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['lastname']));
            $date_of_birth1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['DOB']));
            $place_of_birth1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['POB']));
            $nationality1  = mysqli_real_escape_string($conn, dataSanitizations($_POST['nationality']));
            
            $marital_status1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['marital']));
            $gender1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['gender']));
            $phonenumber1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['phone']));
            $email1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['email']));
            $current_address1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['currentaddress']));
           

            // $name = $students['first_name']; 
            // $middle = $students['middle_name']; 
            // $last = $students['last_name']; 
            // $gender = $students['gender']; 
            // $batch = $students['batch_id'];
            // $status = $students['status'];
            // $payment = $students['payment'];

           

                // $selectc1 = "SELECT id FROM courses WHERE name='$course'";
                //  $resultc1 = mysqli_query($conn , $selectc1);

                // $rowc1 = mysqli_fetch_assoc($resultc1);
                // $courses = $rowc1['id'];


                if(empty($first_name1)){
                    $first_nameErr = "firstname is required";
                    
                }

                if(empty($middle_name1)){
                    $middle_nameErr = "Middlename is required";
                    
                }

                if(empty($last_name1)){
                    $last_nameErr = "Lastname is required";
                    
                }

                if(empty($date_of_birth1)){
                    $date_of_birthErr = "Date of birth is required";
                    
                }
        
                if(empty($place_of_birth1)){
                    $place_of_birthErr = "Place of birth is required";
                    
                }
        
                if(empty($nationality1)){
                    $nationalityErr = "Nationality name is required";
                    
                }
        
                if(empty($marital_status1)){
                    $marital_statusErr = "Marital Status is required";
                    
                }
        
                if(empty($gender1)){
                    $genderErr = "Gender is required";
                    
                }

                if(empty($phonenumber1)){
                    $phonenumberErr = "Phonenumber is required";
                    
                }

                if(empty($email1)){
                    $emailErr = "Email address is required";
                    
                }

                if(empty($current_address1)){
                    $current_addressErr = "Current address is required";
                    
                }
        
                
        
                elseif($first_name1 && $middle_name1 && $last_name1 && $date_of_birth1 && $place_of_birth1 && $nationality1 && $marital_status1 && $gender1 && $phonenumber1 && $email1 && $current_address1){
                    echo "inside";
                //             $insert = "INSERT INTO students(first_name,middle_name,last_name,date_of_birth,place_of_birth,nationality,marital_status,gender,phonenumber,email,current_address) 
                //                                 VALUES('$first_name1', '$middle_name1', '$last_name1', '$date_of_birth1', '$place_of_birth1', '$nationality1', '$marital_status1', '$gender1', '$phonenumber1' , '$email1','$current_address1')";
                   
                //    $query = mysqli_query($conn,$insert);

                //    if($query){
                //        header("location:../layouts/students.php");
                //    }
                //    else{
                //        echo "jaribu";
                //    }

                }
                   


        }

?>