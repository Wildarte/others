<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro");
    }
    echo "successfully <br>";

    $insert = "INSERT INTO tableTest (firstname, lastname, email) VALUES('Andre', 'Oliver', 'oliver@email.com')";

    if($conn->query($insert) === TRUE){
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last insert ID is:" . $last_id;
    }else{
        echo "Error: " . $insert . "<br>" . $conn->error;
    }

?>