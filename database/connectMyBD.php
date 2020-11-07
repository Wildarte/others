<?php

    $servername = "localhost";
    $username = "root";
    $pass = "Oliver.1992*";
    $bank = "mydb2";

    $conn = new mysqli($servername, $username, $pass, $bank);

    if($conn->connect_error){
        dir("Erro: " . $conn->error);
    }else{
        echo "conectado com sucesso!!!";
    }

?>