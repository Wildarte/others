<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        Nome: <input type="email" name="email" required>

        <input type="submit" value="Envia">

        <?php 

            $email = $_POST['email'];
            $emailErr = "";
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL )){
                $emailErr = "Formato de email inválido";
            }
            
            echo $emailErr;
        ?>


    </form>

</body>
</html>