<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="<?php echo $_SERVER['PhP_SELF']; ?>" method="post">
        Name:<input type="text" name="fname"/>
        <input type="submit">
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //colect value of input field
            $name = $_REQUEST['fname'];
            if(empty($name)){
                echo "Name is empty";
            }else{
                echo $name;
            }
        }

    ?>

</body>
</html>