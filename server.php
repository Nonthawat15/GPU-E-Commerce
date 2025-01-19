<?php 

    $servername = "10.1.3.40";
    $username = "65102010116";
    $password = "";
    $dbname = "register_db";

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>