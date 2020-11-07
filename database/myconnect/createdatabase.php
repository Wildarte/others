<?php

    include 'connect.php';

    $sql = 'create database myTest';

    if($conn->query($sql) === true){
        echo "Database created successully";
    }else{
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();

?>