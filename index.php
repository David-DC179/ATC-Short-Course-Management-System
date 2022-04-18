<?php 
    require "./apps/login_logic.php";

   


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATC-SCMS</title>
    <link rel="shortcut icon" href="./image/logo.png">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
</head>
<!-- 
<style>
    <!-- /* .form-signin:hover{
        padding: 3%; */
        
        

    } -->
</style>
<body>
<div class="container   mt-5 mb-5" style="background-color: #E9F9EF; border: 4px solid grey; padding: 10px; border-radius: 50px ;" >
        <div class="row justify-content-center">
        <div class="col-md-12 mt-2">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md">
                        
                            <img class= " me-" src="./image/logo.png" width="104" height="103" alt="" srcset="">
                            <div style="font-family: Times New Roman;">
                               <strong>  <h1 class=" h1 fw-bold" style="text-align: center; font-style:times">Arusha Technical College</h1> </strong>
                                <h1 class="fw-bold h2" style="text-align: center;">Short Course Management System</h2> 
                            </div>
         
                </header>
            
              <div class="header  rounded-pill mt-3" style="height: 8vh; background-color:#B9F88E; ">
                    <strong class="h5 float-md-start ms-3 mt-3" >ATC-SCMS | LOGIN</strong> 
                </div>

            </div> 
            <div class="form-signin col-md-4 mt-5 mb-5 ">
                <div class="card m-4  " style="text-align: center; background-color:#E2FECF;  border: 3px solid grey;
  padding: 10px;
  border-radius: 50px ;">
                    <div class="card-header">
                    <strong>Login into ATC-SCMS</strong>
                    </div>

                    <div class="card-body">
                        <div >
                           
                        <?php 
                        global $msg;
                         echo $msg;
                        if(isset($_GET['msg'])) 
                            echo $msg."santeeeeee";
                        ?> 
                         
                                   <?php     foreach($errors as $error){
                                
                                echo "<p class='alert alert-danger'>$error </p>";
                                
                            }
                              
                            
                            ?>
                           
                          
                        </div>
                       
                        <form action="" method="post">

                        <div class="form-floating col-md-12"> 
                           
                            <input type="text" name="username" id="floatingInput" placeholder="Enter Email" class="form-control rounded-pill ">
                            <label for="floatingInput" class="form-label">Username</label>
                              
                        </div>

                        

                        <div class="form-floating mt-3">
                            
                            <input type="password" name="password" placeholder="Enter Password" class=" rounded-pill form-control">
                            <label for="floatingPassword" class="form-label">Password</label>
                        </div>

                        <div class="form-group">
                            <a href="#" class="text-decoration-none"><strong class="h6 mt-3 text-primary">Forget password?</strong></a>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="btn form-control text-dark rounded-pill " style="background-color: #B9F88E;">Login</button>
                        </div>
                    </form>
                    </div>
                 
                    
                </div>
            </div>
        </div>

        <div class="row border-top rounded-dark mt-4" style="text-align: center;">
            <div class="col-md-12 mt-3 " style="height: 7vh;">
                
                <p class=" text-muted"> &copy;Arusha Technical College 2022 </p>
            </div>
        </div>

    </div>
</body>
</html>

<?php
?>

                  