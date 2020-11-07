<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar ao banco" . $conn->connect_error);
    }

    echo "<p>Conectado com sucesso!</p>";

    $sql = "UPDATE tableTest SET email=777 WHERE firstname='Carlos'";

    if($conn->query($sql)){
        echo "Tudo Certo";
    }else{
        echo "Erro ao atualizar";
    }

    $conn->close();

?>