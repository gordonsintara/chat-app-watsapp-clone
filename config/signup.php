<?php
    include_once "db.php";

    $first_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $last_name = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(!empty($name) && !empty($last_name) && !empty($email) && !empty($password)){
        // is email valid?
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            // is valid 
        }else{
            echo $email." is not a valid email address!";
        }
    }else{
        echo "All fields are required";
    }