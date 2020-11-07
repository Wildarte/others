<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die("Erro ao conectar: " . $conn->connect_error);
    }else{
        echo "successfully";
    }

?>  