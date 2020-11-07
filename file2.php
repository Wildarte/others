<?php declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo addNumbers(5, 5);
    // since strict is enabled and "5 days" is not an integer, an error will be thrown

    echo "<br> Ttet <br>";


    //da forma como criamos a função a baixo, caso nao passemos nenhum argumento, ela usará o valor padrão de 50
    function setHeight(int $minheight = 50){
        echo "The height is: $minheight <br>";
    }

    setHeight(10);
    setHeight();

    //functions returning values

    function sum(int $x, int $y){
        $z = $x + $y;
        return $z;
    }

    echo "The sum of 10 and 5 is equal " . sum(5,10) . "<br>";


    //aqui nós pudemos especificar o tipo de retorno
    function addNumbers2(float $x, float $y): float{
        return $x + $y;
    }

    echo addNumbers2(1.2, 1.7);

    echo '<Br>';

    $cars = array("volvo", "Uno", "Fusca", "BMW");

    echo "Meus carro: " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "<br>";

    $age = array("Peter"=>"45", "May"=>"32", "Tony"=>"21", "Jon"=>"11");

    foreach($age as $x => $value){
        echo "Key: " . $x . " / Value: " . $value;
        echo "<br>";
    }

    $carros = array(
        array("volvo", 22, 12),
        array("Fusca", 44, 11),
        array("nada",1,1),
        array("caraca", 2,2,)
    );

    echo $carros[0][0] . ": In stock " . $carros[0][1] . ", sold: " . $carros[0][2] . "<br>";
    echo $carros[1][0] . ": In stock " . $carros[1][1] . ", sold: " . $carros[1][2] . "<br>";
    echo $carros[2][0] . ": In stock " . $carros[2][1] . ", sold: " . $carros[2][2] . "<br>";

    for($i = 0; $i < count($carros); $i++){
        echo "<p><b>Número de linhas</b></p>";
        echo "<ul>";
        for($i2 = 0; $i2 < 3; $i2++){
            echo "<li>" . $carros[$i][$i2] . "</li>";
        }
        echo "</ul>";
    }

    sort($age);
    foreach($age as $x => $val){
        echo "<p>". $x ." => " .$val."</p>";
    }


    //********** $GLOBALS ************/
    $g = 2;
    $g2 = 2;

    function addition(){
        $GLOBALS['g3'] = $GLOBALS['g'] + $GLOBALS['g2'];
    }

    addition();

    echo $g3;

    

?>

