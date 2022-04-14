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

<body class="container-fluid  mt-5 mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
    <div class="">
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
                                <strong class="float-md-start">ATC-SCMS | BATCH </strong>
                                
                                
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
                                    

                                        <li class="btn btn-outline-info  mt-3 px-3" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">Assign Batch</span> </a>
                                        </li>
                                    
                                        <!-- <li>
                                            <div class="btn btn-outline-warning mt-3 px-3" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../updates/update_batch.php" class="nav-link align-middle px-0">
                                                <i class="fs-4  bi-pencil-square text-dark fw-bold"> </i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Update Batch</span>
                                                </a>  
                                            </div> 
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
                                        <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
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
                        
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Batch name</label>
                                    <input type="text" placeholder="June batch 2 " class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label for=""> Course</label>
                                    <input type="text" placeholder="Web Design " class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""> Departiment</label>
                                    <select name="" id="" class="form-control">
                                    <option value=""> Select Departiment</option>
                                    <option value="Single">ICT</option>
                                    <option value="Married">Mechanical</option>
                                    <option value="divoced">Civil</option>
                                    </select>
                                </div>
                             
    
                            </div>
                            
                            
                        </div>

                     
                        <div class="form-group col-md-12">
                            <div class="row">
                             
                                <div class="col-md-4">
                                    <label for=""> Instructor</label>
                                    <input type="text" placeholder=" " class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""> Number of Students</label>
                                    <input type="text" placeholder=" " class="form-control">
                                </div>
                             
                            </div>
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                              <label for="">Duration </label>
                                <div class="col-md-4">
                                    <label for="">Start Date</label>  
                                    <input type="date" placeholder="" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label for="">Start Date</label>  
                                    <input type="date" placeholder="" class="form-control">
                                </div>
                                
                                
                           


                            </div>
                               
                            
                            
                        </div>

                        <div class="form-group col-md-12">
                            <div class="row">
                        
                                <div class="col-md-4">
                                    <label for=""></label>
                                    <!-- <input type="button" value="Save" class="btn btn-info form-control"> -->
                                    <button type="submit" class="btn btn-primary form-control">Save</button>

                                </div>



                            </div>
                               
                            
                            
                        </div>
                     
                    
                       
                       
                        
                        <div class="form-group">
                        <span></span>
                          
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