<?php
session_start();
require "../function/login.php";
require "../apps/sesseion.php";
 require "../database/conncetion.php";
 require "../function/sanitalization.php";

 
 if(isset($_GET['update'])){
    $id = $_GET['update'];
    $select = "SELECT * FROM courses WHERE  id=$id";
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)){
        $courses=mysqli_fetch_assoc($result);

        $fullname= $courses['name'];
        $departiment_id = $courses['departiment_id'];
        $duration = $courses['duration'];
      

        $selectd = "SELECT * FROM departiments WHERE id=$departiment_id";
             $resultd = mysqli_query($conn , $selectd);

            $rowd = mysqli_fetch_assoc($resultd);
            $departimentn = $rowd['name'];
            $departimentid = $rowd['id'];


    }

    $nameErr = $departimentErr = $durationErr = $rowErr= "";
    $namee  = $departiment = $duration = $row= "";

    if(isset($_POST['update'])){

        $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
        $departiment = mysqli_real_escape_string($conn, dataSanitizations($_POST['departiment']));
        $duration = mysqli_real_escape_string($conn, dataSanitizations($_POST['duration']));
  
        $selectd1 = "SELECT id FROM departiments WHERE name='$departiment'";
        $resultd1 = mysqli_query($conn , $selectd1);
  
       $rowd1 = mysqli_fetch_assoc($resultd1);
       $departimentd1 = $rowd1['id'];
  
       if(empty($namee)){
        $nameErr = "Name is required";
        
        }
  
  
        if(empty($departiment)){
           $departimentErr = "Departiment is required";
     
        }
  
        if(empty($duration)){
            $durationErr = "Duration is required";
            
        }
  
  
        elseif($namee &&  $departimentd1 && $duration ){
            

            $update = "UPDATE courses SET name='$namee', departiment_id=$departimentd1, duration='$duration' WHERE id =$id";
            $query = mysqli_query($conn,$update);

           



            if($query){
                header("location:../layouts/course.php");
            }
            else{
                echo "in";
            }
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

<body class="container-fluid   mb-5" style="background-color: #E9F9EF;  padding: 10px; border-radius: 50px ;" >
    
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
                                <strong class="float-md-start">ATC-SCMS |COURSES </strong>
                                
                                
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
                                <a href="../layouts/instructors.php" class="btn btn-outline-dark"> INSTRUCTORS <img src="../image/batche2.jfif" class="image rounded-pill"  width="32" height="30"  alt="" srcset=""></a>
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
                                    <li>
                                            <div class="btn btn-outline-primary mt-3 px-4" style=" border: 2px solid grey; padding: 10px;">
                                                <a href="../updates/update_course.php" class="nav-link align-middle px-0">
                                                    <i class="fs-4 bi-plus text-dark fw-bold "></i> <br> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">Add course</span>
                                                </a>  
                                            </div> 
                                        </li>


                                        
                                        <div class="btn btn-outline-success px-4 mt-3" style=" border: 2px solid grey; padding: 10px;">
                                            <a href="../layouts/course.php" class="nav-link align-middle px-0">
                                            <i class="fs-4  bi-table text-dark fw-bold" width="16" height="16"></i> <br> <span class="ms- d-none d-sm-inline text-dark fw-bold">View course</span>
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

                                            <h3>ADD NEW COURSE</h3>
                                            <div class="ms-5">
                                            
                                                <div class="-body">
                                                    
                                                    <form action="" method="post">

                       
                        
                                                                <div class="form-group col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <label for="">Course name</label>
                                                                            <input type="text" name="name" value="<?php echo $fullname; ?>" class="form-control">
                                                                            <span class="text-danger fw-bold"><?php echo $nameErr;?></span>
                                                                        </div>
                                                                    

                                                                    </div>
                                                                </div>
                                            
                                            
                                                            </div>

                                                            


                                                            <div class="form-group col-md-12">
                                                                <div class="row">
                                                            

                                                                            <div class="col-md-4">
                                                                                        <label for=""> Departiment</label>
                                                                                        <select name="departiment" id="" class="form-control">
                                                                                        <option value="<?php echo $departimentn;?>"> <?php echo $departimentn;?> </option>
                                                                                            
                                                                                        <?php
                                                                                    $select1 = "SELECT * FROM departiments";

                                                                                    $query = mysqli_query($conn,$select1);

                                                                                    if($rows=mysqli_num_rows($query)){
                                                                                        
                                                                                        
                                                                                        while($departiment = mysqli_fetch_assoc($query)){
                                                                                        $dept= $departiment['name'];
                                                                                        $deptid= $departiment['name'];
                                                                                            
                                                                                            ?>
                                                                                        
                                                                                            <option value="<?= $deptid ?>" ><?php echo $dept ?></option>
                                                                                        
                                                                                                
                                                                                <?php }


                                                                                    }
                                                                                ?>
                                                                                
                                                                                    
                                                                                        </select>
                                                                                        <span class="text-danger fw-bold"><?php echo $departimentErr;?></span>
                                                                            </div>
                                            
                                        
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-12 mt-3">
                                                                <div class="row">
                                                                
                                                                    <div class="col-md-7">
                                                                        <label for="">Duration </label>
                                                                        <input type="text" name="duration" value="<?php echo $courses['duration'] ?>"  class="form-control">
                                                                        <span class="text-danger fw-bold"><?php echo $durationErr;?></span>
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
                        <p class=" text-muted"> Arusha Technical College &copy;2022 </p>
                        </div>
                    </div>
                </div>
        
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>