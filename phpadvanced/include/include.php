<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Include</title>
</head>
<body>

    <h1 class="text-center">Title</h1>

    <!-- include ou require são quase iguais, só muda que require nao executa o script caso o arquivo a ser inserido não exista, e o include constinua executando do mesmo jeito mesmo que o arquivo nao exista.
    Sabendo disso é interessante usarmos o require quando realmente o arquivo for um arquivo importante para a aplicação e o include caso o arquivo não seja importante.
    -->
    <?php include 'test.html'; ?>

</body>
</html>