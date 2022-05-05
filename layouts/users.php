<?php
     session_start();
     require "../function/login.php";
     require "../apps/sesseion.php";
     require_once "../apps/adduser_logic.php";
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

<body class="container-fluid   mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
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
                                <strong class="float-md-start">ATC-SCMS |MANAGE USER </strong>
                                
                                
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
                            <a href="../layouts/students.php" class="btn btn-outline-dark">MANAGE STUDENTS  <img src="../image/student.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/instructors.php" class="btn btn-outline-dark"> INSTRUCTORS <img src="../image/batche2.jfif" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/course.php" class="btn btn-outline-dark"> COURSES <img src="../image/course2.png" class="image rounded-pill" width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/batch.php" class="btn btn-outline-dark"> BATCHES <img src="../image/batch.png" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/departiment.php" class="btn btn-outline-dark">DEPARTMENTS<img src="../image/dep2.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/payment.php" class="btn btn-outline-dark"> PAYMENTS <img src="../image/accoun.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="../layouts/report.php" class="btn btn-outline-dark"> REPORT <img src="../image/report.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                    
                         
                            </div>
                        </div>
                    </div>
                </div>
                                
                            

              
                 
            </div> 
                  
    
       
                  
           
            <!-- end of ending and navbar -->

                    <div class="container-fluid ">

                        <div class="row flex-nowrap mt-3 ">

                            <div class="col-auto  col-md-4 col-xl-2 px-sm-2 px-0 bg- text-dark justify-content-center" style=" background-color:#B9F88E;">
                                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                                    <div class="btn btn- px-5" style=" border: 2px solid grey; padding: 10px;">
                                        <a href="./dashbord.php" class="nav-link align-middle px-0">
                                            <i class="fs-4 bi-house text-dark fw-bold "></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Home</span>
                                        </a>  
                                    </div>    

               
                            
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                        <li>
                                            <div class="btn btn-outline-primary px-3 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                    <a href="../forms/add_user.php" class="nav-link align-middle px-0">
                                                    <i class="fs-4 bi-person-plus text-dark fw-bold"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Add  User</span>
                                                    </a>  
                                            </div> 
                                        </li>

                                        <li>
                                            <div class="btn btn-outline-success px-3 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                    <a href="../layouts/users.php" class="nav-link align-middle px-0">
                                                   <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">View Users</span>
                                                    </a>  
                                            </div> 
                                        </li>

                                        <!-- <li>
                                            <div class="btn btn-outline-warning px-3 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                                    <a href="../updates/update_user.php" class="nav-link align-middle px-0">
                                                    <i class="fs-4  bi-pencil-square text-dark fw-bold"></i>  <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold"> Update User</span>
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
                                        <li><a class="dropdown-item" href="../apps/logout.php">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-10" style="background-color: #E2FECF;">
                          

                            <!-- end of side bar -->

                            <div class="row">
                                <div class="container">
                                    <div class="float-md-start">
                                        <h3 class="h3"> LIST OF USERS</h3>
                                    </div>
                                    <div class="float-md-end">
                                    <input class="form-controme-3  rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                    <span class="btn btn-outline-success btn-sm " type="submit">Search</span>
                                
                                </div> 

                                <div class="table-responsive-sm">
                                    
                                <table class="table table-hover table-responsive-sm ">
                                <?php
                                            require "../database/conncetion.php";

                                      

                                            
                        
                                        if($role == '1' && $status2 ='Actives'){
                   
                                           
                                          
                                            $select = "SELECT * FROM users where role <> '1' and role <> '$role' ";
                                            $result = mysqli_query($conn,$select);
                                            $row = mysqli_num_rows($result);
                                        }

                                            if($role == '2' ){
                                                $select = "SELECT * FROM users where role = '3' ";
                                            $result = mysqli_query($conn,$select);
                                            $row = mysqli_num_rows($result);

                                            }



                                            if(mysqli_num_rows($result)>0 ){?>
                                                <thead class="table bg-dark text-light">    
                                                    <th>SN</th>
                                                    <th colspan="2">FULL NAME</th>
                                                    <th>USERNAME</th>
                                                    <th>DEPARTIMENT</th>
                                                    <th>ROLE</th>
                                                    <th>STUTAS</th>
                                                    <th>ACTIONS</th>
                                                
                                                </thead>
                                            <?php
                                            
                                                $sn = 1;
                                                while($users = mysqli_fetch_assoc($result) ){
                                                    $name = $users['name']; 
                                                    $username = $users['username']; 
                                                    $role_id = $users['role']; 
                                                    $status = $users['status']; 
                                                    $departiment_id =$users['departiment_id'];

                                                    $selectd = "SELECT * FROM departiments WHERE id=$departiment_id";
                                                    $resultd = mysqli_query($conn , $selectd);

                                                    $rowd = mysqli_fetch_assoc($resultd);
                                                    $departiment = $rowd['name'];

                                                    $selectr = "SELECT * FROM roles WHERE id=$role_id";
                                                    $resultr = mysqli_query($conn , $selectr);

                                                    $rowr = mysqli_fetch_assoc($resultr);
                                                    $role = $rowr['name'];
                                                    


                                                    
                                                ?>
                                                    <tr>
                                                    <td><?php echo $sn++; ?></td>
                                                    <td colspan="2"><?php echo $name; ?>  </td>
                                                    <td><?php echo $username ?></td>
                                                    <td><?php echo $departiment ?> </td>
                                                    <td><?php echo $role ?> </td>
                                              
                                                    
                                                    <?php 
                                                        if($status==='Actives'){?>

                                                            <td class="badge m-1 bg-success">Active</td>
                                                                    <?php

                                                        }
                                                        else if($status ==='Offline'){?>
                                                            <td class="badge m-1 bg-danger"> Offline</td>

                                                    <?php }
                                                    else{?>
                                                             <td class="badge m-1 bg-warning"> <?php echo $status?> </td>

                                                    <?php  }
                                                    ?>

                                                    <td><a href="../updates/update_user.php?update=<?php echo $users['id'];?>" name="update"><i class="fs-4  bi-pencil-square text-warning fw-bold"></i></a></td>
                                                    
                                            
                                                </tr>
                                                
                                           <?php     }
                                            

                                                
                                            }

                                        
                             
                                            ?>

                                    
                    

                                   

                                 
                                </table>
                     

                                <div>Rows <?php echo $row." "."Inserted".$rowErr; ?></div>

                            </div>
                      
                        </div>
                    </div>

        
                        
            </div>

           

            

        </div>
        


    </div>
                 
       <!-- End of center bar -->
              

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