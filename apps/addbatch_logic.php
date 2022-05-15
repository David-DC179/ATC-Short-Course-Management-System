<?php 
   

//    session_start();
//    require "../function/login.php";
//   require "../apps/sesseion.php";
   require "../database/conncetion.php";
   require "../function/sanitalization.php";



  

        $nameErr = $courseErr = $instructorErr = $start_dateErr = $finish_dateErr = $iddErr="";                                                                                                                                                                                                                         $iddErr ="";
        $namee = $course = $instructor = $start_date = $finish_date = $id= "";

           
if(isset($_POST['submit'])){



            
         
            $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $course = mysqli_real_escape_string($conn, dataSanitizations($_POST['course']));
            $instructor = mysqli_real_escape_string($conn, dataSanitizations($_POST['instructor']));
            $start_date = mysqli_real_escape_string($conn, dataSanitizations($_POST['startdate']));
            $finish_date = mysqli_real_escape_string($conn, dataSanitizations($_POST['finishdate']));




           

                $selectc1 = "SELECT id FROM courses WHERE name='$course'";
                 $resultc1 = mysqli_query($conn , $selectc1);

                $rowc1 = mysqli_fetch_assoc($resultc1);
                $courses = $rowc1['id'];


                if(empty($namee)){
                    $nameErr = "Name is required";
                    
                }
        
                if(empty($course)){
                    $courseErr = "Course name is required";
                    
                }
        
                if(empty($instructor)){
                    $instructorErr = "Instructor name is required";
                    
                }
        
                if(empty($start_date)){
                    $start_dateErr = "Start date is required";
                    
                }
        
                if(empty($finish_date)){
                   
                    
                }

                        // insert batch information in db
                
        
                elseif($namee  &&  $courses && $instructor && $start_date && $finish_date){
                   $insert = "INSERT INTO batches(name,course,instractor,start_date,finish_date) VALUES('$namee',$courses,'$instructor','$start_date','$finish_date')";
                   $query = mysqli_query($conn,$insert);

                   if($query){
                       header("location:../layouts/batch");
                   }
                   else{
                       echo "jaribu";
                   }

                }

                // update students whre id is selected

            if($_POST['studentid']!=''){
            
                foreach($_POST['studentid'] as $sid){

            
            $selectstudent = "SELECT * FROM students where id =$sid";
            $resultstudent = mysqli_query($conn , $selectstudent);

           $rowstudents = mysqli_fetch_assoc($resultstudent);
           $studentid[]= $rowstudents['id'];

          
       

            $update = "UPDATE students SET status = 'Active',batch_id=3 where id in ($sid)";
            $querystudent = mysqli_query($conn ,$update);

                    if($querystudent){
                        header("location{../layouts/batch.php");
                    } else{
                        echo "jaribu ten";
                    }
           }
            }else{

                $iddErr = "Must be select students";

            }


                   


        }
    // }