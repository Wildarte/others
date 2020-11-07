<?php

    include 'connect.php';

    $select = "SELECT id, firstname, lastname from tableTest";
    $result = $conn->query($select);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"] . " - name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    }else{
        echo "0 results";
    }

    $conn->close();
?>