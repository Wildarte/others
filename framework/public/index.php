<?php


include './../app/Libraries/Database.php';
$db = new Database;

$usuarioId = 10;
$titulo = 'Titulo do post';
$texto = 'Texto do post';

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");
$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);

$db->executa();

echo '<hr>Total Resultados: '.$db->totalResultados();
echo '<hr>Último id: '.$db->ultimoIdInserido();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/estilos.css">
</head>
<body>
    <?php
        echo 'teste';
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <script src="/public/js/jquery.funcoes.js"></script> 
</body>
</html>
