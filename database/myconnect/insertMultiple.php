<?php

    include 'connect.php';

    $insertAluno = "INSERT INTO tableTest (firstname, lastname, email) VALUES('Carlos', 'Otavio', 'otavio@email.com');";

    $insertAluno .= "INSERT INTO tableTest (firstname, lastname, email) VALUES('Bruno', 'Ferreira',     'ferreira@email.com');";

    $insertAluno .= "INSERT INTO tableTest (firstname, lastname, email) VALUES('Carol', 'Raiam', 'cr@email.com');";

    if($conn->multi_query($insertAluno) === TRUE){
        echo "New records created successfully";
    }else{
        echo "Error: " . $insertAluno . "<br>" . $conn->error;
    }

    $conn->close();

?>