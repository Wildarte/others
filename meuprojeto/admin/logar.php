<?php

//ESTE ARQUIVO RECEBE OS PARAMETROS DO FORMULÁRIO DE LOGIN PARA CONFERIR SE ESTÃO CORRETOS, CASO POSITIVO, O USUÁRIO É DIRECIONADO PARA A DASHBOARD, CASO ALGUM DADO ESTEJA ERRADO APARECE UMA MENSAGEM DE ERRO PARA O USUÁRIO E ELE NAO SERÁ DIRECIONADO PARA O DASHBOARD


        session_start();
        
        $server = "localhost";
        $user = "root";
        $password = "Oliver.1992*";
        $bd = "myTest";

        $conn = new mysqli($server, $user, $password, $bd);

        if($conn->connect_error){
            die("Erro ao conectar" . $conn->connect_error);
        }
        echo "Conexão bem sucedida";

        if(empty($_POST['login']) || empty($_POST['pass'])){
            header("Location: /meuprojeto/admin/");
            exit();
        }

        $user_account = $_POST['login'];
        $pass = $_POST['pass'];                

        $busca_user = "SELECT * FROM user WHERE usuario='$user_account' AND senha='$pass'";
        $result = $conn->query($busca_user);
        $row_user = $result->num_rows;

        echo "<h2>número: " . $row_user . "</h2>";
        if($row_user == 1){
            echo "<h1>sim ok</h1>";
            $_SESSION['usuario'] = $user_account;
            header('Location: ../dashboard.php');
            
        }else{
            
            echo "<h2> Usuário: " . $user_account . "</h2>";
            echo "<h1>nao ok</h1>";
            $_SESSION['nao_autenticado'] = true;
            header('Location: /meuprojeto/admin');
            
        }

?>