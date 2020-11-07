<?php
//ESSA É A TELA DE LOGIN CASO O USUÁRIO E SENHA ESTEJA CERTO O USUÁRIO É DIRECIONADO PARA A DASHBARD, CASO CONTRÁRIO APARECE UMA MENSAGEM DE ERRO


session_start();
include('../header.html');
?>

<div class="container text-center">
    <div class="row">
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <span type="text" style="border: 2px solid red; color: red" class="form-control">
            <strong>Usuário ou senha inválido</strong>
        </span>
        <!-- TODO: This is for server side, there is another version for browser defaults -->
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
    </div>

</div>


<link rel="stylesheet" href="../css/login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <img src="https://img.icons8.com/cotton/128/000000/user-male--v1.png"/>
    </div>

    <!-- Login Form -->
    <form action="logar.php" method="post">
        
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="btn" value="Acessar">

    </form>

    

    <!-- Remind Passowrd -->
    

  </div>
</div>

<?php include('../footer.html') ?>