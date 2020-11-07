<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red
        }
    </style>
</head>
<body>
    
    <?php

        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $website = $comment = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST['name'])){
                $nameErr = 'Nome é requisitado';
            }else{
                $name = test_input($_POST['name']);
            }

            if(empty($_POST['email'])){
                $emailErr = '';
            }else{
                $email = test_input($_POST['email']);
            }

            if(empty($_POST['gender'])){
                $genderErr = 'gender é requisitado';
            }else{
                $gender = test_input($_POST['gender']);
            }

            if(empty($_POST['website'])){
                $websiteErr = 'website é requisitado';
            }else{
                $website = test_input($_POST['website']);
            }

            if(empty($_POST['comment'])){
                $comment = "";
            }else{
                $comment = test_input($_POST['comment']);
            }
            
        
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Nome: <input type="text" name="name">
        <span class="error">*<?php echo $nameErr; ?></span><br><br>
        E-mail: <input type="text" name="email">
        <span class="error">*<?php echo $emailErr; ?></span><br><br>
        Website: <input type="text" name="website">
        <span class="error">*<?php echo $websiteErr; ?></span><br><br>
        Comment: <textarea type="text" name="comment" rows="5" cols="4"></textarea>
        <br><br>
        Gender: 
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Oher
        <span class="error">*<?php echo $genderErr; ?></span><br><br>
        <input type="submit" name="submit" value="Submit">
        
    </form>

    <?php
        echo "<h2>Your Input:</h2>";
        echo "Nome: ".$name;
        echo "<br>";
        echo "Email: ".$email;
        echo "<br>";
        echo "website: ".$website;
        echo "<br>";
        echo "Comment: ".$comment;
        echo "<br>";
        echo "Gender: ".$gender;
    ?>


</body>
</html>