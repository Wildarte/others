<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create write</title>
</head>
<body>

    <?php 
        
        

        $myfile = fopen("testfile.html", "w") or die("Não oi possível escrever o arquivo");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        $txt = "Bruna Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);


        if(file_exists("testfile.html")){
            echo "Created";
        }



    ?>

</body>
</html>