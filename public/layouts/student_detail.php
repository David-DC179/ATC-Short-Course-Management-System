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

<body class="container-fluid  mt-5 mb-5" style="background-color: #E9F9EF; padding: 10px; border-radius: 50px ;" >
    
    <div >
        <div class="row">
        
            <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me-" src="../image/logo.png" width="104" height="103" alt="" srcset="">
                            &nbsp;&nbsp;<div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>

                <div class="navbar navbar-light text-dark shadow-sm mt-3 mb3" style="height: auto; background-color:#B9F88E;">
                        <div class="container">
                            <nav class="navbar-brand">
                                <strong class="float-md-start">ATC-SCMS | STUDENT </strong>
                                
                                
                            </nav>
                            <strong class="float-md-end ">Coordinater Name:  David Christopher 
                                <img  hreclass="image rounded-pill " src="../image/icon.png" width="50" height="50" alt=""> &nbsp;
                                
                            </strong>
                        
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
                                        <li>
                                        <div class="btn btn-outline-primary px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                            <a href="../forms/registration_student.php" class="nav-link align-middle px-0">
                                            <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Register Student</span>
                                            </a>  
                                        </div> 
                                        </li>
                                    
                    
                                    

                                        <li class="btn btn-outline-success  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">View Student</span> </a>
                                        
                                        </li>
                                    

                                        <li class="btn btn-outline-info  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">Assign Student</span> </a>
                                        </li>
                                    
                                        <li>
                                            <div class="btn btn-outline-warning mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../updates/update_student.php" class="nav-link align-middle px-0">
                                                <i class="fs-4  bi-pencil-square text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Update Student</span>
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
                                        <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-10" style="background-color: #E2FECF;">
                           
                                
                           

                            <!-- end of side bar Student-->

                            <div class="row">
                                <div class="container ">
                                    <div class="col-md-6">
                                        <h3 class="h3">  STUDENTS DETAILS</h3>

                                        
                                            <div class="table-responsive-sm">
                                            <h4>A. PERSONAL PARTICULARS</h4>
                                                <table class="table ">
                                                        <tr>
                                                            <td>Full Name: </td>
                                                            <td>David Christopher</td>
                                                        </tr>
                                                    
                                                    <tr>
                                                        <td>Date of Birth:</td>
                                                        <td>17-09-2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Place of Birth: </td>
                                                        <td>Dar es salaam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality:</td>
                                                        <td class="">Tanzanian </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td><label for=""> Marital Status</label></td>
                                                        <td>Single</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>Male</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tel. No</td>
                                                        <td>0764063426</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail address</td>
                                                        <td>david@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Current residence address</td>
                                                        <td>Arusha</td>
                                                    </tr>
                                                
                                                </table>
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
</body>
</html>