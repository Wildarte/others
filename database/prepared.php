<?php

    include('connectMyBD.php');
    
    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (nome, senha) VALUES(?,?)");
    $stmt->bind_param($nome, $senha);

    $nome = 'Arnaldo Sérgio';
    $senha = 'g9j5tsd';
    $stmt->execute();

    echo "New records created successfully";

    $stmt-close();
    $conn->close()

?>