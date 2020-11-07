<?php

    $servername = "localhost";
    $username = "root";
    $pass = "Oliver.1992*";
    $bank = "mydb2";

    $conn = new mysqli($servername, $username, $pass, $bank);

    if($conn->connect_error){
        die("Error to connected: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (nome, senha) VALUES ('Queiros de almeida',  '123')";

    if($conn->query($sql) === TRUE){
        echo "Sucesso ao inserir dados";
    }else{
        echo "Erro ao inserir dados" . $conn->error;
    }

    $conn->close();

?>