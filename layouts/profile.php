<?php
     session_start();
     require "../function/login.php";
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
<body class="">
    
    <div class="container   mt-5 mb-5" style="background-color: #E9F9EF; border: 4px solid grey; padding: 10px; border-radius: 50px ;" >
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me" src="../image/logo.png" width="104" height="103" alt="" srcset="">
                            &nbsp;&nbsp; <div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>

                <div class="navbar navbar-light text-dark shadow-sm mt-3" style="height: auto; background-color:#B9F88E;">
                        <div class="container">
                            <nav class="navbar-brand">
                                <strong class="float-md-start">ATC-SCMS | PROFILE  </strong>&nbsp;
                                

                               
                                
                            </nav>
                            <strong class="float-md-end "><?php echo $role ." : ". $name?>  
                                <img  hreclass="image rounded-pill " src="../image/icon.png" width="50" height="50" alt=""> &nbsp;
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
                                <a href="../layouts/dashbord.php" class="text-dark fw-bold text-decoration-none ">Dashbord</a>
                               
                                
                            </li>
                            <li><a href="#" class="text-dark fw-bold text-decoration-none">User Manuel</a></li>
                            <li><hr class="dropdown-divider w-"></li>
                            <li><a href="../apps/logout.php" class="text-dark fw-bold text-decoration-none">Log out</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
              


                
              
                 
            </div> 
                  
           
        
       
        
            <div class="row mt-5 mb-5 ">
                <div class="col-md-12 ">
                <div class="card  p-3">
                    <div class="row bg-info bg-gradient">
                        <div class="col-md-12">
                           <div class="card-header ">
                                <strong>Profile</strong>
                            </div> 
                        </div>
                    </div>

                    <div class="row">

                   
                        <div class="col-md-3 rounded-pill mt-3 mb-3" >
                            <img src="../image/icon.png" width="200" height="200" alt="Profile Pictures" srcset="" style="border: 2px solid grey;
                                padding: 10px;
                                border-radius: 50px ;">
                           
                        </div>
                
                        <div class="col-md-6 mt-3">
                            <div class="table-responsive-sm">
                                <table class="table">
                                        <tr>
                                            <td>Full Name: </td>
                                            <td><?php echo $name;?></td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Email:</td>
                                        <td>davidchristopher@atc.ac.tz</td>
                                    </tr>
                                    <tr>
                                        <td>Role: </td>
                                        <td><?php echo $role ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>

                                        <?php 
                                            if($status=='Active'){?>

                                                <td class="badge m-1 bg-success"><?php echo $status?> </td>
                                                        <?php

                                            }
                                             else if($status =='Offlile'){?>
                                                <td class="badge m-1 bg-danger"> Not Active </td>

                                           <?php }
                                           else{?>
                                                        <td class="badge m-1 bg-warning"> Pending </td>

                                         <?php  }
                                        ?>
                                        
                                       
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td colspan=""><a href="#" class="text-decoration-none"><strong class="h6 mt-3 text-primary">Change password?</strong></a></td>
                                        <td colspan=""><a href="#" class="text-decoration-none"><strong class="h6 mt-3 text-primary">Change Profile Picture</strong></a></td>
                                    </tr>
                                </table>
                            </div>
                         
                            <div class="form-group"></div>
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