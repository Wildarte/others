<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">

        <label for="">Enviar imagem:</label>
        <input type="file" name="pic" id="" accept="image/*">
        <button type="submit">Enviar Imagem</button>

    </form>

    <?php

        if(isset($_FILES['pic'])){

            $ext = strtolower(substr($_FILES['pic']['name'],-4));
            $new_name = date("Y.m.d-H.i.s") . $ext;
            $dir = './imagens/'; //diretório para uploads
            move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //fazer upload do arquivo
            
            echo ('Imagem enviada com sucesso');
        }

    ?>

</body>
</html>