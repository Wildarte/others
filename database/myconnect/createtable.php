<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar ao banco de dados" . $conn->connect_error);
    }

    $sql = "CREATE TABLE tableTest (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ";

        if($conn->query($sql) === TRUE){
            echo "table created successfully";
        }else{
            echo "Error creating table: " . $conn->error;
        }

        $close->close();

?>