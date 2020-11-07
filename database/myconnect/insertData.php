<?php

    include 'connect.php';

    $insert = "INSERT INTO tableTest (firstname, lastname, email) VALUES('Joao', 'Ribeiro', 'jb@email.com')";

    if($conn->query($insert) === TRUE){
        echo "Dados inseridos com sucesso";
    }else{
        echo "Erro ao inserir dados" . $insert . "<br>" . $conn->error;
    }

    $conn->close;

?>