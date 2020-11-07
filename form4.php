<html>
    <style>
        .error{
            color: #ff0000;
        }

    </style>
<body>


    <?php

        $name = $nameErr = "";
        

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(empty($_POST['name'])){
                $nameErr = "Name is required";
            }else{
                $name = test_input($_POST['name']);
                if(!preg_match("/^[a-zA-Z]*$/", $name)){
                    $nameErr = "Only letters and white space allowed";
                    $name = "";
                }
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        Nome:* <input type="text" name="name">
        <span class="error"> <?php echo $nameErr;?></span><br><br>
  
        <input type="submit" value="Enviar">

    </form>

    <?php

        echo "<h2>Your response</h2>";
        echo "<p> $name </p>";

    ?>

</body>

</html>