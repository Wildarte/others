<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar com o servidor");
    }

    $select = "SELECT * FROM tableTest WHERE lastname='Raiam'";
    $result = $conn->query($select);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<p>First Name: " . $row["reg_date"] . "</p>";
        }
    }else{
        echo "Nada encontrado";
    }
    
    $conn->close();
?>