<?php
    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";

    // Create connection
    
    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        dir("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connected! <br>";
    }

    $sql = "CREATE DATABASE mydb2";

    if($conn->query($sql) === true){
        echo "Database created successfully";
    }else{
        echo "Error creating database; " . $conn->error;
    }

?>  