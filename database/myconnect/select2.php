<?php

    include 'connect.php';

    $select = "SELECT firstname FROM tableTest WHERE id=14";
    $resultado = $conn->query($select);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo "<a href='" . $row["firstname"]. "'> Click </a>";
        }
    }else{
        echo "0 results";
    }
    $conn->close();
?>