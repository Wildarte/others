<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro TOTTAAAALLL");
    }
    echo "Tudo certo ao conectar";

    $sql = "SELECT * FROM tableTest ORDER BY lastname";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<p>id: " . $row["id"] . "</p>";
        }
    }else{
        echo "0 results";
    }

    $conn->close();

?>