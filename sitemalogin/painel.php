<?php
session_start();
include('verifica.php');
?>
<h1>Olá, <?php echo $_SESSION['user']; ?></h1>
<h2><a href="logout.php">Sair</a></h2>