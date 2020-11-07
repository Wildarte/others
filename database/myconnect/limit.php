<?php

    include 'connect.php';

    $sql = "SELECT * FROM tableTest LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<p> id: " . $row["id"] . " - First Name: " . $row["firstname"] . " - Last Name: " . $row["lastname"] . "</p>";
        }
    }

?>