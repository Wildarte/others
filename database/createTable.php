<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $bank = "mydb2";

    $conn = new mysqli($servername, $username, $password, $bank);

    if($conn->connect_error){
        die("Error: " . $conn->connect_error);
    }else{
        echo "Successfully";
    }

    $sql = "CREATE TABLE user (
            id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30) NOT NULL,
            senha VARCHAR(30) NOT NULL,
            dia_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ";

    if($conn->query($sql) === TRUE){
        echo "Table created successfully";
    }else{
        echo "Error to create table: " . $conn->error;
    }

    $conn->close();

?>