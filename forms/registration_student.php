<?php
session_start();
require "../function/login.php";
require "../apps/sesseion.php";
require "../apps/addstudents_logic.php";
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

<body class="container-fluid col-md-12  mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
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
                                <strong class="float-md-start">ATC-SCMS |MANAGE STUDENTS </strong>
                                
                                
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
                                <a href="../layouts/students.ph" class="btn btn-outline-dark">INSTRUCTORS  <img src="../image/batche2.jfif" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/course.php" class="btn btn-outline-dark"> COURSESS <img src="../image/course2.png" class="image rounded-pill" width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/batch.php" class="btn btn-outline-dark"> BATCHES <img src="../image/batch.png" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
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
                  
                   
                                       
                                        <div class="btn btn-outline-success px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                            <a href="../layouts/students.php" class="nav-link align-middle px-0">
                                            <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">View Student</span>
                                            </a>  
                                        </div> 
                                    

                                        <li class="btn btn-outline-info  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">Assign Student</span> </a>
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

          <h3>SHORT COURSE REGISTRATION FORM</h3>
                <div class="ms-5">
                    <div class=" ">
                        <h4>PERSONAL PARTICULARS</h4>
                    </div>
                    <div class="-body">
                        <form action="" method="post">

                        
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">First name</label>
                                    <input type="text" name="firstname" placeholder="David " class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $first_nameErr;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Middle name</label>
                                    <input type="text"name="middlename" placeholder="Christopher " class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $middle_nameErr;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last name</label>
                                    <input type="text" name="lastname" placeholder="Senior" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $last_nameErr;?></span>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Date of Birth</label>
                                    <input type="date" name="DOB" placeholder="" id="date" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $date_of_birthErr;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Place of Birth</label>
                                    <input type="text" name="POB" placeholder="Dar es salaam" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $place_of_birthErr;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Nationality</label>
                                    <input type="text" name="nationality" placeholder="Tanzanian" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $nationalityErr;?></span>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for=""> Marital Status</label>
                                    <select name="marital" id="" class="form-control">
                                    <option value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="divoced">Divoced</option>
                                    </select>
                                    <span class="text-danger fw-bold"><?php echo $marital_statusErr;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for=""> Gender</label>
                                    <select name="gender" id="" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select>
                                    <span class="text-danger fw-bold"><?php echo $genderErr;?></span>
                                </div>
<!-- 
                                <div class="col-md-4">
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div> -->

                       
                             
                            </div>
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Tel. No</label>
                                    <input type="text" name="phone" placeholder="0764063426" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $phonenumberErr;?></span>
                                    <span class="text-danger fw-bold"><?php echo $phonenumberErrv;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">E-mail address</label>
                                    <input type="text" name="email" placeholder="davidchristopher@gmail.com" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $emailErr;?></span>
                                    <span class="text-danger fw-bold"><?php echo $emailErrv;?></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Current residence address</label>
                                    <input type="text" name="currentaddress" placeholder="Sakina Arusha" class="form-control">
                                    <span class="text-danger fw-bold"><?php echo $current_addressErr;?></span>
                             
                                </div>


                            </div>
                               
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                                <!-- <div class="col-md-4">
                                    <label for="">Program Name</label>
                                    <input type="text" placeholder="Computer Application" class="form-control">
                                </div> -->
                                <div class="col-md-4">
                                    <label for=""></label>
                                  
                                    <button type="submit" name="submit" class="btn btn-primary form-control">Save</button>

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

        
                        
            </div>

           

            

        </div>
        


    </div>
                 
       
              

    <div class="row border-top rounded-dark mt-4" style="text-align: center;">
            <div class="col-md-12 mt-3 " style="height: 7vh;">
            <p class=" text-muted"> Arusha Technical College &copy;2022 </p>
            </div>
        </div>
    </div>
        
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/js/date.js"></script>
</body>
</html>