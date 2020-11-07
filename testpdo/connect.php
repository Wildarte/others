<?php
$servername = "localhost";
$username = "root";
$password = "Oliver.1992*";
$dbname = "projetomvcphp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO posts (usuario_id, titulo, texto)
  VALUES (123, 'post titulo 123', 'post texto 123')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>