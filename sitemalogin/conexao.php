<?php

    define('host', 'localhost');
    define('usuario', 'root');
    define('senha', 'Oliver.1992*');
    define('bank', 'myTest');

    $conn = new mysqli(host, usuario, senha, bank);

    if($conn->connect_error){
        die("Error" . $conn->connect_error);
    }

?>