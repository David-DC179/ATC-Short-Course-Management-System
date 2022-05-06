<?php
    session_start();
    require "../function/login.php";
   require "../apps/sesseion.php";
    require "../database/conncetion.php";
    require "../function/sanitalization.php";



    if(isset($_GET['activationuser'])){
        $id = $_GET['activationuser'];

        $select = "SELECT * FROM users WHERE  id=$id";
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)){
            $users=mysqli_fetch_assoc($result);
            $status = $users['status'];


        }

        if($status=='Actives'){
            $update = "UPDATE users SET status='Offline' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
    
           
            if($query){
               header("location:../layouts/users.php");
            }
            else{
                echo "jaribu";
            }
    

            
        }else{
            $update = "UPDATE users SET status='Actives' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
    
           
            if($query){
               header("location:../layouts/users.php");
            }
            else{
                echo "jaribu";
            }
    
        }

        

 
        

    }


    
    if(isset($_GET['activationbatch'])){
        $id = $_GET['activationbatch'];

        $select = "SELECT * FROM batches WHERE  id=$id";
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)){
            $batch=mysqli_fetch_assoc($result);
            $status = $batch['status'];


        }

        if($status=='active'){
            $update = "UPDATE batches SET status='Complete' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
    
           
            if($query){
               header("location:../layouts/batch.php");
            }
            else{
                echo "jaribu";
            }
    

            
        }

        elseif($status=='Pending'){
            $update = "UPDATE batches SET status='active' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
    
           
            if($query){
               header("location:../layouts/batch.php");
            }
            else{
                echo "jaribu";
            }
    

            
        }
        
        else{
            $update = "UPDATE batches SET status='Pending' WHERE id=$id";
            $query= mysqli_query($conn,$update);
            
    
           
            if($query){
               header("location:../layouts/batch.php");
            }
            else{
                echo "jaribu";
            }
    
        }

        

 
        

    }