<?php 
   require "../database/conncetion.php";
   require "../function/sanitalization.php";

   $nameErr = $departimentErr = $durationErr = $rowErr= "";
   $namee  = $departiment = $duration = $row= "";
   if(isset($_POST['submit'])){

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

      // die ($namee.$departimentd1.$duration);

      $insert = "INSERT INTO courses(name,departiment_id,duration) VALUES('$namee',$departimentd1,'$duration')";
           
      $query= mysqli_query($conn,$insert);

     
      if($query){
         header("location:../layouts/course.php");
      }
      else{
          echo "jaribu";
      }



 

   }

}


?>