<?php

    include 'connect.php';

    $stmt = $conn->prepare("INSERT INTO tableTest (firstname, lastname, email) VALUES(?,?,?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    $firstname = "https://google.com";
    $lastname = "Zuck";
    $email = "czuck@email.com";
    $stmt->execute();

    $firstname = "https://facebook.com";
    $lastname = "roedor";
    $email = "rr@email.com";
    $stmt->execute();

    $firstname = "Ricardo";
    $lastname = "Soares";
    $email = "rs@email.com";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();

?>