<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myBD = "myTest";

    $conn = new mysqli($servername, $username, $password, $myBD);

    if($conn->connect_error){
        die("Connect Error");
    }

    echo "Sucesso ao conectar!";

    $select = "SELECT firstname FROM tableTest WHERE lastname = 'Doe'";
    $result = $conn->query($select);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            echo "<br>First Name: " . $row["firstname"] . "<br>";
        }
    }else{
        echo "0 results";
    }

    $conn->close();
?>