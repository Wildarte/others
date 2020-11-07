<?php

    include 'connect.php';

    $sql = "SELECT * FROM tableTest  LIMIT 9";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($linha = $result->fetch_assoc()){
            echo "<h1> id: " . $linha["id"] . " - First Name: " . $linha["firstname"] . " - Last Name: " . $linha["lastname"] . "</h1>";
        }
    }

?>