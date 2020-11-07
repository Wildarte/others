<?php
    session_start();
    include 'conexao.php';

    if(empty($_POST['email']) || empty($_POST['password'])){
        header("Location: index.php");
        exit();
    }

$usuario = mysqli_real_escape_string($_POST['email']);
$senha = mysqli_real_escape_string($_POST['password']);

$query = "SELECT * FROM userTest WHERE user='$usuario' AND senha=md5('$senha')";
$result = $conn->query($query);

$row = $result->num_rows;
echo $row;

    if($row == 1){
        $_SESSION['user'] = $usuario;
        header('Location: painel.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('Location:login.php');
        exit();
    }

    
?>


