<?php 
       require "../database/conncetion.php";
       require "../function/sanitalization.php";

       $nameErr = $coordinatornameErr  = $rowErr= "";
        $namee = $coordinatornameErr =  $row= "";
    
   if(isset($_POST['submit'])){

    $namee = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
    $coordinator_name = mysqli_real_escape_string($conn, dataSanitizations($_POST['coordinator']));

    if(empty($namee)){
        $nameErr = "Name is required";
    }

    if(empty($coordinator_name)){

        $coordinatornameErr = "Coordinator Name required";

    }
    elseif($namee && $coordinator_name){
        echo "in";
    }

   }    


?>