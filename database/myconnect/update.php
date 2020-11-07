<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myBD = "myTest";

    $conn = new mysqli($servername, $username, $password, $myBD);

    if($conn->connect_error){
        die("Error" . $conn->connect_error);
    }
    echo "<p>Conectado com sucesso!</p>";

    $sql = "UPDATE tableTest SET firstname='Cabrunco' WHERE lastname='Ribeiro'";

    if($conn->query($sql)){
        echo "<p>Dados atualizados com sucesso!</p>";
    }else{
        echo "<p>Erro ao atualizar dados</p>";
    }

?>