<?php 
    require "../apps/sesseion.php";
    require "../database/conncetion.php";

    
    
        $errors = array();

        if(isset($_POST['submit'])){

            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));
            $name = mysqli_real_escape_string($conn, dataSanitizations($_POST['name']));


        }
?>