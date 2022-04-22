<?php
require "../database/conncetion.php";
require "../apps/sesseion.php";

$select = "SELECT * FROM users";
$result = mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0){
  
    $sn = 1;
    while($users = mysqli_fetch_assoc($result)){
        $name = $users['name']; 
        $username = $users['username']; 
        $role = $users['role']; 
        $status = $users['status']; 
      
    }
   

    
}

?>