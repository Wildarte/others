<?php 
session_start();
include('admin/verifica.php');

    include 'header.html'; 

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

   

?>

    <div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-window" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
    <path fill-rule="evenodd" d="M15 6H1V5h14v1z"/>
    <path d="M3 3.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
  </svg>  
  DashBoard </div>
  <ul class=" list-group list-group-flush">
        <li>
        <a id="1" href="/meuprojeto/dashboard.php" class="list-group-item list-group-item-action bg-light"><b>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h5v-1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v2h1V6L9 1z"/>
          <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
        </svg>  
        PUBLICAR</b>
        </a>
        </li>
        <li>
        <a id="2" href="/meuprojeto/publish.php" class="list-group-item list-group-item-action bg-light"><b>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
          <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        PUBLICAÇÕES</b></a>
        </li>
        <li>
        <a id="3" href="javascript:void(0)" class="list-group-item list-group-item-action bg-light disabled"><b>OUTROS</b></a>
        </li>
  </ul>

</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
              </svg>    
              Logado</strong>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item disabled" href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                </svg>    
                Minha Conta</a>
                <a class="dropdown-item" href="/meuprojeto/config.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                </svg>
                Configurações</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin/logout.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                  <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
                  <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
                </svg>
                Sair</a>
              </div>
            </li>
          </ul>
        </div>

  </nav>


<div class="container">
        <div class="row" >

            <div class="col-12">

                <h2 class="text-center">Minhas publicações</h2>

                    
                <?php

                    $select = "SELECT * FROM artigos ORDER BY id DESC";
                    $result = $conn->query($select);

                    if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()){
                            

                ?>

                <div class="card mb-3 border">
                    <div class="card-header">
                    
                    <h3 id="nome_artigo<?php echo $row['id']; ?>" value="<?php echo $row['id'] ?>"><?php echo $row['nome_artigo'] ?></h3>
                    </div>
                    <div class="card-body b-3">
                        <h5 class="card-title"><?php echo $row['descricao_artigo'] ?></h5>
                        <p class="card-text"><?php echo $row['data_artigo'] ?></p>
                        <a href="#" class="btn btn-danger">Editar</a>
                        <a id="dir_artigo<?php echo $row['id']; ?>" value="<?php echo $row['caminho_artigo']; ?>" href="<?php echo $row['caminho_artigo'] ?>" class="btn btn-info">Ver Artigo</a>
                        
                        <button onclick="pegaNome<?php echo $row['id']; ?>()" type="button" value="<?php echo $row['id'] ?>" class="btn btn-warning btn-primary" data-toggle="modal" data-target="#modalExemplo">Excluir</button>
                            
                        <script>

                            function pegaNome<?php echo $row['id']; ?>(){
                                var novoNome = document.getElementById('nome_artigo<?php echo $row['id']; ?>').innerHTML;
                                var caminho = document.getElementById('dir_artigo<?php echo $row['id']; ?>');
                                var caminho_para_banco = caminho.getAttribute("href");
                                document.getElementById('recebeNome').innerHTML = "<u>"+novoNome+"</u>";
                                document.getElementById('recebeNome2').value = novoNome;
                                document.getElementById('recebeCaminho').innerHTML = caminho_para_banco;
                            }

                        </script>

                        
                        
                    </div>
                </div>
                
                <?php

                        }
                    }
                
                ?>
                <!-- *************** modal ****************** -->
                <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Artigo:
                                    <span id="recebeNome"></span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            Depois de feita, esta ação não poderá ser desfeita!
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <input id="recebeNome2" name="nome" value="" style="display: none">
                                    <span id="recebeCaminho" nome="caminho_artigo" value=""></span>
                                    <input type="submit" name="btn" value="Excluir" class="btn btn-primary">
                                </form>
                                
                                <?php

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                        if($_POST['btn'] === "Excluir"){

                                            $artigo = $_POST['nome'];
                                            
                                            $deletar = "DELETE FROM artigos WHERE nome_artigo='$artigo'";
                                            $conn->query($deletar);
                                            
                                            header('Location: publish.php');
                                            
                                            $conn->close();
                                                
                                            echo "<script>alert('Artigo excluído com sucesso');</script>";
                                            
                                            //Esse trexo de código era pra deletar o diretório do artigo, mas infelizmente não funcionou, porém ainda vou mante-lo aqui
                                            /*
                                            if(rmdir($caminho_artigo)){
                                                echo "diretório removido com sucesso";
                                            }else{
                                                echo "Erro ao ao remover";
                                            }
                                            echo "<script>alert('Artigo excluído com sucesso');</script>";
                                            */
                                           
                                        }   
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                         <!-- ******************* Fim do Modal ******************************** -->   
            </div>

        </div>
</div>

<?php

    include 'footer.html';

?>