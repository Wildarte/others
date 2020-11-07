<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $bank = "mydb2";

    $conn = new mysqli($servername, $username, $password, $bank);

    if($conn->connect_error){
        die("Erro ao conectar: " . $conn->connect_error);
    }else{
        echo "successfully";
    }

    $sql = "INSERT INTO user (nome, senha) VALUES('Homem-Aranha', '123456')";

    if($conn->query($sql) === TRUE){
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is " . $last_id;
    }else{
        echo "Erro " . $sql. "<br>" . $conn->error;
    }
    
?>