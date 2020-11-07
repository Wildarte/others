<?php

    include('connectMyBD.php');

    $sql = "SELECT id, nome, senha, dia_data FROM user";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id:  ".$row['id']." - nome: ".$row['nome']." - senha: ".$row['senha']." - Data de ingresso: ".$row['dia_data']."<br>";
        }
    }else{
        echo "0 results";
    }

    $conn->close();

?>