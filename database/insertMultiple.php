<?php

    include('connectMyBD.php');

    $sql = "INSERT INTO user (nome, senha) VALUES('Arnold Schwazneger', 'de38os98');";
    $sql .= "INSERT INTO user (nome, senha) VALUES('Chandler Bing', 'yyddw223');";

    if($conn->multi_query($sql)){
        echo "New records created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>