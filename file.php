<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Any Document</title>
</head>
<body>

    <h1>Page with php</h1>

    <?php

        $color = "red";
        $text = "w3school";
        $num1 = 1;
        $num2 = 2;

        echo "Hello World PHP <br />";
        ECHo "ECHo <br />";
        //for to concat on php, you use . (point)
        echo $color . "<br>";
        echo "I love $text <br>";
        echo $num1+$num2;

        $x = 5;
        $y = 10;

        function myTest(){
           global $x, $y;
            echo $x + $y;
        }

        $a = 6;
        $b = 7;

        echo "<br>";

        function myTest2(){
            $GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['a'];
        }
        
        myTest2();
        echo $a;

        function myTest3(){
            static $d = 0;
            echo $d;
            $d++;
        }
        echo "<br>";
        myTest3(); echo "<br>";
        myTest3(); echo "<br>";
        myTest3(); echo "<br>";

        echo "<h1 class='alert alert-primary'>Title em echo</h1>";

        echo "<h2>PHP is Fun!</h2>";
        echo "This  ","string ","was ","made ","with multiple parameters";

        echo "<br>";

        class Car{
            function Car(){
                $this->model = "VW";
            }
        }

        $her = new Car();


        echo $her->model;
        echo "<br>";
        $nu = NULL;

        var_dump($nu);

        echo "<br>";

        echo strlen("Hello World!");

        echo "<br>";

        echo str_word_count("Hello World");

        echo "<br>";

        echo strrev("Hello World");

        echo "<br>";
        //strpos() - Search For a text Within a String

        echo strpos("Hello World!", "World");

        echo "<br>";

        $val = 5985;
        var_dump(is_int($val));
        
        echo "<br>";
        define("const1", "São Paulo");

        echo const1;

        echo "<br>";

        //case-sensitive const

        define("const2", "values of the const", true);

        echo const2;

        echo "<br>";
        
        //const arrays

        define("cars", ["Alfa Rome", "BMW", "Toyota"]);

        echo cars[0];

        echo "<p>Voltando a aula</p>";

        $color = "yel";

        echo $color = $color ?? "red";
        echo "<br>";
        echo $user = $_GET["user"] ?? "Anonymous";
        echo '<br>';

        $val8 = 2;
        echo $val7 = $val8 ?? "Nada";
        echo "<br>";

        $dt = date("H");

        if($dt < "15"){
            echo "Have you good day";
        }else{
            echo "Hve you a good night";
        }

        $colors = array("red", "yellow", "blue", "silver", "gold", "black");

        foreach($colors as $value){
            echo "$value <br>";
        }

        $age = array("Eddy"=>"43", "Clair"=>"12", "Carol"=>"32", "Tony"=>"29");

        foreach($age as $x => $val){
            echo "$x = $val<br>";
        }


        //Functions

        function writeMsg(){
            echo "Message write from a function";
        }

        writeMsg();

        function familyName($name){
            echo "$name Refsnes.<br>";
        }

        familyName("Edward");
        familyName("Carol");
        familyName("Edy");
        familyName("Robert");


        function familyNameAge($name, $age){
            echo "$name, age: $age. <br>";
        }

        familyNameAge("Carol", 12);
        familyNameAge("Anny", 15);
        familyNameAge("Amanda", 20);

        function addNumber(int $a, int $b){
            return $a + $b;
        }

        echo addNumber(5, "5 day");

        
    ?>

    
    
</body>
</html>