<?php

session_start();
require "../function/login.php";
require "../apps/sesseion.php";
require "../database/conncetion.php";
require "../function/sanitalization.php";



if(isset($_GET['update'])){
    $id = $_GET['update'];
    $select = "SELECT * FROM batches WHERE  id=$id";
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)){
        $courses=mysqli_fetch_assoc($result);

        $batchname= $courses['name'];
        $course_id = $courses['course'];
        $instractor = $courses['instractor'];
        $start_date = $courses['start_date'];
        $finish_date  = $courses['finish_date'];

        $selectc = "SELECT * FROM courses WHERE id=$course_id";
             $resultc = mysqli_query($conn , $selectc);

            $rowc = mysqli_fetch_assoc($resultc);
            $coursena = $rowc['name'];
            $courseid = $rowc['id'];

    }



}

$nameErr = $courseErr = $instructorErr = $start_dateErr = $finish_dateErr = $rowErr= "";
$namee = $courseid = $instructor = $start_date1 = $finish_date1 = $row= "";
if(isset($_POST['update'])){
    $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
    $courseid = mysqli_real_escape_string($conn, dataSanitizations($_POST['course']));
    $instructor = mysqli_real_escape_string($conn, dataSanitizations($_POST['instructor']));
    $start_date1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['startdate']));
    $finish_date1 = mysqli_real_escape_string($conn, dataSanitizations($_POST['finishdate']));

   

        $selectc1 = "SELECT id FROM courses WHERE name='$courseid'";
         $resultc1 = mysqli_query($conn , $selectc1);

        $rowc1 = mysqli_fetch_assoc($resultc1);
        $courses = $rowc1['id'];


        if(empty($namee)){
            $nameErr = "Name is required";
            
        }

        if(empty($courseid)){
            $courseErr = "Course name is required";
            
        }

        if(empty($instructor)){
            $instructorErr = "Instructor name is required";
            
        }

        if(empty($start_date1)){
            $start_dateErr = "Start date is required";
            
        }

        if(empty($finish_date1)){
            $finish_dateErr = "Finish date is required";
            
        }

        

        elseif($namee  &&  $courses && $instructor && $start_date1 && $finish_date1){
            // die($namee.$courses.$instructor.$start_date.$finish_date);

            $update = "UPDATE batches SET name='$namee',course=$courses, instractor='$instractor', start_date='$start_date', finish_date='$finish_date'";

            $query = mysqli_query($conn,$update);
      

           if($query){
               header("location:../layouts/batch");
           }
           else{
               echo "jaribu";
           }

        }
           


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ATC-SCMS</title>
    <link rel="shortcut icon" href="../image/logo.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/icons/font/bootstrap-icons.css">
</head>

<body class="container-fluid  mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
<div class="">
    <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me-" src="../image/logo.png" width="104" height="103" alt="" srcset="">
                            &nbsp; &nbsp; <div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>


                    <div class="navbar navbar-light text-dark shadow-sm mt-3 mb-3" style="height: auto; background-color:#B9F88E;">
                        <div class="container-fluid">
                            <nav class="navbar-brand">
                                <strong class="float-md-start">ATC-SCMS |BATCHES </strong>
                                
                                
                            </nav>
                            <strong class="float-md-end "><?php  echo $rolename.":"." ".$name;?>
                                <img  class="profile rounded-pill " src="../image/icon.png" width="50" height="50" alt=""> &nbsp;
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>                                            
                            </strong>
                        
                        </div>
                    </div>
                

                <div class="collapse text-dark" id="navbarHeader" style=" background-color:#E2FECF;">
                    <div class="container-fluid " style=" background-color:#E2FECF;">
                        <div class="row" style=" background-color:#E2FECF;" >

                            
                            <div class="col-md-12 ms-5 ">
                                <a href="../layouts/students.ph" class="btn btn-outline-dark">MANAGE STUDENTS  <img src="../image/student.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/course.php" class="btn btn-outline-dark"> COURSES <img src="../image/course2.png" class="image rounded-pill" width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/instructors.php" class="btn btn-outline-dark"> INSTRUCTORS <img src="../image/batch.png" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/departiment.php" class="btn btn-outline-dark"> DEPARTIMENTS <img src="../image/dep2.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/payment.php" class="btn btn-outline-dark"> PAYMENTS <img src="../image/accoun.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/users.php" class="btn btn-outline-dark">MANAGE USERS <img src="../image/check3.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/report.php" class="btn btn-outline-dark"> REPORT <img src="../image/report.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                    
                                
                         
                            </div>
                        </div>
                    </div>
                </div>
                                
                            

              
                 
            </div> 
        </div>
                  
           
            <!-- end of hending and navbar -->

                    <div class="container-fluid ">

                        <div class="row flex-nowrap mt-3 ">

                            <div class="col-auto  col-md-4 col-xl-2 px-sm-2 px-0 bg- text-dark justify-content-center" style=" background-color:#B9F88E;">
                                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                                    <div class="btn btn- px-5" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="../layouts/dashbord.php" class="nav-link align-middle px-0">
                                            <i class="fs-4 bi-house text-dark fw-bold "></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Home</span>
                                        </a>  
                                    </div>    

               
                            
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                        <div class="btn btn-outline-primary px-3 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../forms/add_batch.php" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Create Batch</span>
                                                </a>  
                                        </div> 


                                        
                                        <div class="btn btn-outline-success px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                            <a href="../layouts/batch.php" class="nav-link align-middle px-0">
                                            <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">View Batch</span>
                                            </a>  
                                        </div> 
                                    

                                 
                                   
                               
        
                                    
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#" class="d-flex align-items-center text- text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                
                                        <span class="d-none d-sm-inline mx-1 text-dark">Control Panel</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-light text-small shadow" style=" background-color:#E2FECF;">
                                          <li>
                                        <a class="dropdown-item" href="./profile.php">Profile
                                        <img src="../image/icon.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                        </a>
                                    
                                        </li>
                                        <li><a class="dropdown-item" href="#">User Manuel</a></li>
                            
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="../apps/logout.php">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-10" style="background-color: #E2FECF;">
                 

                            <!-- end of side bar Student-->

                            <div class="row">
                            <div class="container">
      <div class="row justify-content-">
            <div class="col-md-10 ">

          <h3>UPDATE BATCH</h3>
                <div class="ms-5">
                   
                    <div class="-body">
                        <form action="" method="post">

                        
                        
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Batch name</label>
                                    
                                    <input type="text" name="name" value="<?php echo $batchname; ?>" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $nameErr;?></span>
                                </div>

                                <div class="col-md-4">
                                    <label for=""> Course</label>
                                    <select name="course" id="" class="form-control">
                                    <option value="<?php echo $coursena;?>"> <?php echo $coursena;?> </option>
                                        
                                    <?php
                                $select1 = "SELECT * FROM courses";

                                $query = mysqli_query($conn,$select1);

                                if($rows=mysqli_num_rows($query)){
                                    
                                    
                                    while($course = mysqli_fetch_assoc($query)){
                                       $coursename= $course['name'];
                                       $coursesid= $course['name'];
                                        
                                        ?>
                                       
                                        <option value="<?= $coursesid ?>" ><?php echo $coursename ?></option>
                                     
                                            
                        <?php }


                                }
                            ?>
                               
                                
                                    </select>
                                    <span class="text-danger fw-bold"><?php echo $courseErr;?></span>
                                </div>
                               
                             
    
                            </div>
                            
                            
                        </div>

                     
                        <div class="form-group col-md-12">
                            <div class="row">
                             
                                <div class="col-md-4">
                                    <label for=""> Instructor</label>
                                    <input type="text" name="instructor" value="<?php echo $instractor;?>" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $instructorErr;?></span>
                                </div>
                              
                             
                            </div>
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                              <label for="">Duration </label>
                                <div class="col-md-4">
                                    <label for="">Start Date</label>  
                                    <?php echo $courses['start_date'] ?>
                                    <input type="text" name="startdate" value="<?php echo $start_date ?>" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $start_dateErr;?></span>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Finish Date</label> 
                                    <?php echo $finish_date ?> 
                                    <input type="text" name="finishdate" value="<?php echo $finish_date ?>" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $finish_dateErr;?></span>
                                </div>
                                
                                
                           


                            </div>
                               
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                        
                                <div class="col-md-4">
                                    <label for=""></label>
                                  
                                    <button type="submit" name="update" class="btn btn-primary form-control">Save</button>

                                </div>



                            </div>
                               
                            
                            
                        </div>
                     
                    
                    
                          
                        </form>
                    </div>
                </div>
      
            </div> 
        </div>
        
        
    </div>

                              
                              
  
            </div>

           

            

        </div>
        


    </div>
                 
       
              

    <div class="row border-top rounded-dark mt-4" style="text-align: center;">
            <div class="col-md-12 mt-3 " style="height: 7vh;">
            <p class=" text-muted">&copy; Arusha Technical College 2022 </p>
            </div>
        </div>
    </div>
        
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>