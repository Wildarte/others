<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Read</title>
</head>
<body>
    
    <h1>Open Read</h1>

    
    <?php
        $myfile = fopen("test.html", "r") or die("Não foi possivel abrir o arquivo");
        echo fread($myfile, filesize("test.html"));
        fclose($myfile);
    ?>
    
    <p>The fread() function reads from an open file</p>

    <pre>
    The first parameter of fread() contains the name of the file to read ad the second parameter specifies the maximum number of bytes to read.

    The following PHP code reads  the "text.txt" file to the end:

    it is a good programming practice  to close all files after your  have finished with them. You don't  want an open file running around on your server taking up resources!

    </pre>

    <!-- Parei em fgets() -->


   
    

</body>
</html>