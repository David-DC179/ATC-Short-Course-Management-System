<?php
  session_start();
  require "../function/login.php";
  require "../apps/sesseion.php";
  require "../database/conncetion.php";
 
                                                            
                                          
  $select = "SELECT * FROM students ";
              $result = mysqli_query($conn,$select);

             


             $row = mysqli_num_rows($result);

             $select1 = "SELECT * FROM students ";
             $result1 = mysqli_query($conn,$select1);

            


            $row1 = mysqli_num_rows($result1);



              if(mysqli_num_rows($result1)>0 ){

                $student1 = mysqli_fetch_assoc($result1);

               
                $statusy = $student1['status'];
              
              
               
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

<body class="container-fluid   mb-5" style="background-color: #E9F9EF; padding: 10px; border-radius: 50px ;" >
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
                                
                                <a href="../layouts/course.php" class="btn btn-outline-dark"> COURSE <img src="../image/course2.png" class="image rounded-pill" width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/instructors.php" class="btn btn-outline-dark"> INSTRUCTORS <img src="../image/batche2.jfif" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/batch.php" class="btn btn-outline-dark"> BATCHES <img src="../image/batch.png" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
                                <a href="../layouts/departiment.php" class="btn btn-outline-dark"> DEPARTIMENTS <img src="../image/dep2.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
                                <a href="" class="btn btn-outline-dark"> PAYMENTS <img src="../image/accoun.png" class="image rounded-pill" width="32" height="30" alt="" srcset=""></a>
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
                            <div class="row mb-4 justify-content-center">
                                <div class="col-md-3 ">
                                    <div class="card bg-info">
                                        <div class="card-header fw-bold">All Students</div>
                                        <div class="card-body">
                                            <span><?php echo "0".$row  ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-success">
                                        <div class="card-header fw-bold">ACTIVE Students</div>
                                        <div class="card-body">
                                            <span>
                                                
                                                
                                            <?php 
                                                if($statusy === 'Active'){
                                                    echo "0" .$row ;
                                                }
                                             ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-warning">
                                        <div class="card-header fw-bold">Pontential Students</div>
                                        <div class="card-body">
                                            <span>0
                                            <?php 
                                                if($statusy == 'Potential'){
                                                    echo "0".$row1 ;
                                                }
                                             ?>
                                            </span>
                                            
                                        </div>
                                    </div>
                                </div>
                         
                            </div> 

                            <!-- end of side bar Student-->

                            <div class="row">
                                <div class="container">
                                    <div class="float-md-start">
                                        <h3 class="h3"> LIST OF STUDENTS</h3>
                                    </div>
                                    <div class="float-md-end">
                                    <input class="form-controme-3  rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                    <span class="btn btn-outline-success btn-sm " type="submit">Search</span>
                                
                                </div> 

                                <div class="table-responsive-sm col-md-12">
                                <table class="table table-hover ">
                             
                                    <thead class="table bg-dark text-light " style="text-align: center;">

                                        <th>SN</th>
                                        <th colspan="">FULL NAME</th>
                                        <th>GENDER</th>
                                        <th>COURSE NAME</th>
                                        <th>BATCH NAME</th>
                                        <th>DEPARTIMENT</th>                      
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                        
                                    </thead>
                                    <tr >

                                    <?php
                                                  $sn = 1;
                                                  while($students = mysqli_fetch_assoc($result) ){
                                                      $studentname = $students['first_name']; 
                                                      $middle = $students['middle_name']; 
                                                      $last = $students['last_name']; 
                                                      $gender = $students['gender']; 
                                                      $batch = $students['batch_id'];
                                                      $statusi = $students['status'];
                                                      $payment = $students['payment'];
                                           

                                                $selectb = "SELECT * FROM batches WHERE id=$batch";
                                                $resultb = mysqli_query($conn , $selectb);

                                                $rowb = mysqli_fetch_assoc($resultb);
                                                $batchname = $rowb['name'];

                                                $selectd = "SELECT * FROM departiments WHERE id=$batch";
                                                $resultd = mysqli_query($conn , $selectd);

                                                $rowd = mysqli_fetch_assoc($resultd);
                                                $departimentname = $rowd['name'];

                                                $selectc = "SELECT * FROM courses WHERE id=$batch";
                                                $resultc = mysqli_query($conn , $selectc);

                                                $rowc = mysqli_fetch_assoc($resultc);
                                                $courses = $rowc['name'];


                                                
                                            ?>
                                                
                                                <td><?php echo $sn++; ?></td>
                                                <td colspan="">
                                                    <?php echo $studentname?>
                                                    <?php echo $middle?>
                                                    <?php echo $last?>
                                                
                                                </td>
                                                <td><?php echo $gender ?></td>
                                                
                                                <td><?php echo $courses?></td>
                                                <td><?php echo $batchname?></td>
                                                <td><?php echo $departimentname?></td>
                                                <td>
                                                    
                                                    

                                                    <?php 
                                                        if($statusi == 'Active'){
                                                            echo " <span class='badge bg-success'> Active</span>";

                                                        }

                                                        // else{
                                                        //     echo "<span class='badge bg-warning'> Potential</span>";
                                                        // }
                                                        if($statusi == 'Potential'){
                                                            
                                                            echo "<span class='badge bg-warning'>Pontential</span>";
                                                        }

                                                        echo " ";

                                                        if($payment == 'Payed'){
                                                            echo "<span class='badge bg-success'> Payed</span>";

                                                        }

                                                        if($payment == 'Pending'){
                                                            echo "<span class='badge bg-danger'> Not Payed</span>";

                                                        }
                                                      
                                                      
                                                       
                                                        // else{
                                                        //     echo "<span class='badge bg-danger'> Not Payed</span>";
                                                        // }
                                                        
                                                        

                                                    ?>
                                                        
                                                </td>
                                                <td><a href="../layouts/student_detail.php?view=<?php echo $students['id'];?>" name="view"><i class="fs-4 bi bi-person-lines-fill text-primary fw-bold"></i> </a> 
                                                <a href="../updates/update_student.php?update=<?php echo $students['id'];?>" name="update"><i class="fs-4  bi-pencil-square text-warning fw-bold"></i></a></td>

                                                </tr>


                                                <?php     }
                                            
                                            }
                                                
                                      
                         
                                        ?>

                                          



                                    </table>
                                    
                                <div>Rows <?php echo $row." "."Inserted"; ?></div>

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