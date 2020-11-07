<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The complete form</title>

    <style>
        .error{
            color: #ff0000;
        }
    </style>
    
</head>
<body>
    
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
            }
                
            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
                }    
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

        <h2>Formulário em PHP</h2>
        <p><span class="error">* requerid field</span></p>
        <p> Nome: <input type="text" name="name"></p> 
        <p> E-mail: <input type="email" name="email" id=""></p>
        <p> Website: <input type="url" name="website" id=""></p>
        <p> Your opinion: <br>
        <textarea name="" id="" cols="30" rows="10" name="opinion"></textarea>
        </p>
        <p> Gender:
            <input type="radio" name="gender" id="" value="female">Female
            <input type="radio" name="gender" id="" value="male">Male
            <input type="radio" name="gender" id="" value="other">Other
        </p>
        <p> <input type="submit" value="Enviar"> </p>
    </form>

</body>
</html>