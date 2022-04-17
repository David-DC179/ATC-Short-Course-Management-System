<?php 
   require "../apps/sesseion.php";

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
</head>

<style>
    .image:hover{
        
       zoom:120%;
       padding: 5%;

        background-color: #B9F88E;
        
    }
    .profile:hover{
        zoom: 120%;
    }
</style>
<!--  -->
<body class="">

    
    
<div class="container  mt-5 mb-5" style="background-color: #E9F9EF; border: 4px solid grey; padding: 10px; border-radius: 50px ;" >
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me-" src="../image/logo.png" width="104" height="103" alt="" srcset="">
                            &nbsp; &nbsp; <div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>


                    <div class="navbar navbar-light text-dark shadow-sm mt-3 mb-3" style="height: auto; background-color:#B9F88E;">
                        <div class="container">
                            <nav class="navbar-brand">
                                <strong class="float-md-start">ATC-SCMS | DASHBORD </strong>
                                
                                
                            </nav>
                            <strong class="float-md-end "><?php echo $role ." : ". $username?> 
                                <img  class="profile rounded-pill " src="../image/icon.png" width="50" height="50" alt=""> &nbsp;
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>                                            
                            </strong>
                        
                        </div>
                    </div>
                

                <div class="collapse text-dark" id="navbarHeader" style=" background-color:#E2FECF;">
                    <div class="container " style=" background-color:#E2FECF;">
                    <div class="row float-md-end" style=" background-color:#E2FECF;" >
                        
                        <div class="col-md-12 offset-md-1 py-4  ">
                            <h4 class="text-white"></h4>
                            <ul class="list-unstyled ">
                                <li>
                                    <a href="../layouts/profile.php" class="text-dark fw-bold text-decoration-none ">Profile</a>
                                    <img src="../image/icon.png" width="20" height="20" alt="">
                                    
                                </li>
                                <li><a href="../resources/ATC-SCMS.pdf" class="text-dark fw-bold text-decoration-none">User Manuel</a></li>
                                <li><hr class="dropdown-divider w-"></li>
                                <li><a href="../apps/logout.php" class="text-dark fw-bold text-decoration-none">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                                
                            

              
                 
            </div> 
                  
           
        
       
        
            <div class="dashbord col-md-12 ">
                
                <div class="row justify-content-center" >
                    
                                    <a href="./students.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                        <div class="h " style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                        padding: 10px;
                                        border-radius: 50px ;">
                                            
                                                <img src="../image/student.png" class="image rounded-pill" width="103" height="100" alt="" srcset="">
                                        <caption>STUDENTS</caption>
                                        
                                    </div>
                                </a>
                  
                                <a href="./instructors.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                    <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                        padding: 10px;
                                        border-radius: 50px;">
                                        
                                            <img src="../image/batche2.jfif" class="image rounded-pill"  width="103" height="102" alt="" srcset="">
                                            <caption>INSTRUCTORS</caption>
                                        
                                    </div> 
                                </a>   
                   
                                <a href="./course.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">   
                                    <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                        padding: 10px;
                                        border-radius: 50px;">
                                            <img src="../image/course2.png" class="image rounded-pill" width="103" height="102"  alt="" srcset="">
                                            <caption>COURSES</caption>
                                        
                                    </div>
                                </a>
                                
                                <a href="./batch.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                    
                                    <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                        padding: 10px;
                                        border-radius: 50px;">
                                        
                                            <img src="../image/batch.png" class="image rounded-pill"  width="103" height="102"  alt="" srcset="">
                                            <caption>BATCHES</caption>
                                    
                                        
                                    </div>  
                                </a>
                    
                </div>
                

       

                <div class="row justify-content-center">

                                <a href="./departiment.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                    <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                    padding: 10px;
                                    border-radius: 50px;">
                                    
                                        <img src="../image/dep2.png" class="image rounded-pill" width="103" height="102" alt="" srcset="">
                                        <caption>DEPARTIMENTS</caption>
                                    
                                        
                                    </div>
                                </a>
                    
                    
                                    <a href="../layouts/payment.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                        <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                        padding: 10px;
                                        border-radius: 50px;">
                                        
                                                <img src="../image/accoun.png" class="image rounded-pill" width="103" height="102" alt="" srcset="">
                                            <caption>PAYMENTS</caption>
                                            
                                        </div>
                                    </a>  
                                    
                                    <a href="../layouts/users.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                        <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                            padding: 10px;
                                            border-radius: 50px;">
                                                                    
                                                <img src="../image/check3.png" class="image rounded-pill" width="103" height="102" alt="" srcset="">
                                            <caption>MANAGE USERS</caption>
                                                        
                                        </div>
                                    </a> 

                                    <a href="../layouts/report.php" class="col-md-2  m-3 text-decoration-none text-dark fw-bold ">
                                        <div class="" style="text-align: center; background-color:#E9F9EF;  border-top: 5px solid grey;
                                            padding: 10px;
                                            border-radius: 50px;">
                                        
                                                <img src="../image/report.png" class="image rounded-pill" width="103" height="102" alt="" srcset="">
                                            <caption>REPORTS</caption>
                                            
                                            
                                        </div>
                                    </a>

                </div>
                        
                    </div>
                

            </div>
            

       <div class="row border-top rounded-dark mt-4" style="text-align: center;">
            <div class="col-md-12 mt-3 " style="height: 7vh;">
            <p class=" text-muted"> &copy; Arusha Technical College 2022 </p>
            </div>
        </div>     

    </div>
    

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>