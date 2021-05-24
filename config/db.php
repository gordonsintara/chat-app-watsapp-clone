<?php
    $conn = mysqli_connect("localhost","root","","whatsapp");

    if(!$conn){
        echo "error...LOL" . mysqli_connect_error();
    }