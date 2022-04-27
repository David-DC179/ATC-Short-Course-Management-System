<?php


    session_start();
    require "../function/login.php";
    require "../database/conncetion.php";
    
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
    <link rel="stylesheet" href="../assets/bootstrap/icons/font/bootstrap-icons.css">
</head>
<body class="container-fluid mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
    <div class="">
    <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= "" src="../image/logo.png" width="104" height="103" alt="" srcset="">
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
                            <strong class="float-md-end "><?php echo $role ." : ". $name?>
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
                                <a href="../layouts/students.php" class="btn btn-outline-dark">MANAGE STUDENTS  <img src="../image/student.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/course.php" class="btn btn-outline-dark"> COURSES <img src="../image/course2.png" class="image rounded-pill" width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/instructors.php" class="btn btn-outline-dark"> INSTRUCTORS <img src="../image/batch.png" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/batch.php" class="btn btn-outline-dark"> DEPARTIMENTS <img src="../image/dep2.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/payment.php" class="btn btn-outline-dark"> PAYMENTS <img src="../image/accoun.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/users.php" class="btn btn-outline-dark">MANAGE USERS <img src="../image/check3.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/report.php" class="btn btn-outline-dark"> REPORT <img src="../image/report.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                    
                                
                         
                            </div>
                        </div>
                    </div>
                </div>
                                
                            

              
                 
            </div> 
                  
    
        </div>
            </div> 
                  
           
        
       
        
            <div class=" container-responsive-sm col-md m-2" style="background-color: #E2FECF;">
          
                                      
              <div class="row flex-nowrap mt-3 ">
                    <div class="col-auto col-md-4 col-xl-2 px-sm-2 px-0 bg- text-dark" style=" background-color:#B9F88E;">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                                <div class="btn btn- px-5" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="./dashbord.php" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house text-dark fw-bold "></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Home</span>
                                    </a>  
                                </div>    

                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
             
                                    <li>
                                        <div class="btn btn-outline-primary px-3 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../forms/add_batch.php" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Create Batch</span>
                                                </a>  
                                        </div> 
                                    </li>

                                    <li>
                                        <div class="btn btn-outline-success px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../layouts/batch.php" class="nav-link align-middle px-0">
                                                <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">View Batch</span>
                                                </a>  
                                        </div> 
                                    </li>

                                    
                                    <li>
                                        <div class="btn btn-outline-warning px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../updates/update_batch.php" class="nav-link align-middle px-0">
                                                <i class="fs-4  bi-pencil-square text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Update Batch</span>
                                                </a>  
                                        </div> 
                                    </li>

                                  
                 
             

                  
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
                                <li><a class="dropdown-item" href=" ../apps/logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-md-10">           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-md-start">
                                    <h3 class="h3"> LIST OF BATCHES</h3>
                                </div>

                            
                            <div class="float-md-end">
                                    <input class="form-controme-3  rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                                <span class="btn btn-outline-success btn-sm " type="submit">Search</span>
                                
                            </div>  
                        </div>
    

                        <div class="row">
                            <div class="container col-md-12">
                                <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>SN</th>
                                            <th colspan="2"> NAME</th>
                                            <th>COURSE</th>
                                            <th>DEPARTIMENT</th>
                                            <th>INSTRUCTOR </th>
                                            <th>NO. STUDENTS</th>
                                            
                                            <th>START DATE</th>
                                            <th>FINISH DATE</th>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td colspan="2">Computer Application</td>
                                            <td>Computer Application</td>
                                            <td>ICT departiment</td>
                                            <td>Eng DC</td>

                                            <td>2345</td>
                                            
                                            
                                            <td>4 april 20222 </td>
                                            <td>22 april 2022</td>
                                    
                                
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td colspan="2">Web Desing</td>
                                        <td>Computer Application</td>
                                        <td>ICT departiment</td>
                                        <td>Eng DC</td>
                                        <td>34455</td>
                                        
                                        
                                        <td>4 april 20222 </td>
                                        <td>22 april 2022</td>
                                            
                                        
                                        </tr>



                                    </table>

                                

                                </div>
                      
                            </div>
                        </div>
              
                   
        
             
                    </div>
     

                </div>

               
            </div>
               


        </div>
        <div class="row border-top rounded-dark mt-4" style="text-align: center;">
                    <div class="col-md-12 mt-3 " style="height: 7vh;">
                    <p class=" text-muted"> Arusha Technical College &copy;2022 </p>
                    </div>
                </div>

        
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>