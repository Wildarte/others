<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro de conexao" . $conn->connect_error);
    }

    echo "Tudo certo ao connectar";

    $sql = "DELETE FROM tableTest WHERE id=2";

    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>