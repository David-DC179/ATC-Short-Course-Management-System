<?php
    session_start();
    $_SESSION['deleted']='Thanks for using our system';

    require "../function/login.php";
   require "../apps/sesseion.php";
    require "../database/conncetion.php";
    require "../function/sanitalization.php";



    if(isset($_GET['deletecourse'])){
        $id = $_GET['deletecourse'];

        $select = "SELECT * FROM courses WHERE  id=$id ";
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)){
            $course=mysqli_fetch_assoc($result);
            $delete = $course['deletes'];
            $names = $course['name'];

           


        }

        if($delete=='active'){
            $update = "UPDATE courses SET deletes='deleted' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
            
            $msg = "";
            if($query){
               
             
               header("location:../layouts/course.php");
          
            //    $msg = "<span class='alert alert-danger'>$names  are deleted</span>";
            }
            else{
                echo "jaribu";
            }
    

            
        }
       

        

 
        

    }
    if(isset($_GET['deletedepartiment'])){
        $id = $_GET['deletedepartiment'];

        $select = "SELECT * FROM departiments WHERE  id=$id ";
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)){
            $departiment=mysqli_fetch_assoc($result);
            $delete = $departiment['deletes'];
            $names = $departiment['name'];

           


        }

        if($delete=='active'){
            $update = "UPDATE departiments SET deletes='deleted' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
            
            $msg = "";
            if($query){
               
               
               header("location:../layouts/departiment.php");
            
           $msg = "<span class='alert alert-danger'>$names  are deleted</span>";
               
               
            }
            else{
                echo "jaribu";
            }
    

            
        }
       

        

 
        

    }