<?php
    include_once "db.php";

    $first_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $last_name = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);