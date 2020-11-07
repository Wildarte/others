<?php

    echo "Date function() <br>";

    echo "syntaxe <Br> date(format, timestamp) <br>";

    echo "Hoje é " . date("d/m/Y") . "<br>";

    echo "Hoje é " . date("l") . "<br>";

    echo "PHP tip - Automatic Copyright Year";

    echo "<p> &copy; 2010 - " . date("Y") . " </p>";

    echo "Get a time <br>";

    echo "The time is " . date("h:i:sa") . "<br>";

    echo "Get your tieme zone <br>";

    date_default_timezone_set("America/New_York");

    echo "A hora é: " . date("h:i:sa");
?>