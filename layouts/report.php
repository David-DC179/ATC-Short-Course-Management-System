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
    <link rel="stylesheet" href="../assets/bootstrap/icons/font/bootstrap-icons.css">
</head>
<body class="container-fluid   mt-5 mb-5" style="background-color: #E9F9EF; padding: 10px; border-radius: 50px ;" >
    
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me-" src="../image/logo.png" width="104" height="103" alt="" srcset="">
                            &nbsp;&nbsp;<div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>

                <div class="navbar navbar-light text-dark shadow-sm mt-3" style="height: auto; background-color:#B9F88E;">
                        <div class="container">
                            <nav class="navbar-brand">
                                <strong class="float-md-start">ATC-SCMS | REPORTS </strong>
                                
                                
                            </nav>
                            <strong class="float-md-end "><?php echo $role ." : ". $name?>  
                                <img  hreclass="image rounded-pill " src="../image/icon.png" width="50" height="50" alt=""> &nbsp;
                                                                          
                            </strong>
                        
                        </div>
                    </div>
                

      
            

          

              
                 
            </div> 
                  
           
        
       
        
            <div class=" container-responsive-sm col-md m-2" style="background-color: #E2FECF;">
          
            <div class="row flex-nowrap t-3 ">
                    <div class="col-auto col-md-4 col-xl-2 px-sm-2 px-0 bg- text-dark" style=" background-color:#B9F88E;">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                                <div class="btn btn- px-5" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="./dashbord.php" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house text-dark fw-bold "></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Home</span>
                                    </a>  
                                </div>    

                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  
                                    
                    
                                    <!-- <li class="btn btn-outline-primary  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-person-plus text-dark fw-bold"></i><br> <span class="ms- d-none d-sm-inline text-dark fw-bold"></span> </a>
                                    </li> -->

                                    <li class="btn btn-outline-success  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">View Report</span> </a>
                                    
                                    </li>
                                

                                    <li class="btn btn-outline-info  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                   </i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">Request Payment Letter</span> </a>
                                    </li>
                                    
                                    <!-- <li class="btn btn-outline-warning  mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4  bi-pencil-square text-dark fw-bold"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">Update Student</span> </a>
                                    </li> -->
                                    
                                    
                                

                                    
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

                    <div class="col-md-9">           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-md-start">
                                    <h3 class="h3"> LIST OF REPORTS</h3>
                                </div>

                            
                            <div class="float-md-end">
                                    <input class="form-controme-3  rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                                <span class="btn btn-outline-success btn-sm " type="submit">Search</span>
                                
                            </div>  
                        </div>
    

                        <div class="row">
                            <div class="container">
                                <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                     
                                    
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
                    <p class=" text-muted">&copy; Arusha Technical College 2022 </p>
                    </div>
        </div>

    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>