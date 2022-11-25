<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $database= "crudtest";

    //creating connection
    $conn =mysqli_connect($servername, $username, $password, $database);

    //checking if database is properly connected
    if($conn){
        echo "connection successful";
    }
    else{
        die("Error".mysqli_connect_errno());
    }


?>