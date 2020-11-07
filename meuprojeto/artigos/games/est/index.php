<?php include '../../../header.html'; ?><?php

        //ESSE ARQUIVO É RESPONSÁVEL POR TRAZER O CABEÇALHO DO ARTIGO COM UM FUNDO PRETO E LETRA BRANCA CENTRALIZADA.

        $dir = basename(__DIR__);
        
        $servername = 'localhost';
        $username = 'root';
        $password = 'Oliver.1992*';
        $myDB = 'myTest';
    
        $conn = new mysqli($servername, $username, $password, $myDB);
    
        if($conn->connect_error){
            die('Erro ao conectar');
        }
    
        $select = "SELECT * FROM artigos WHERE nome_artigo= '$dir'";
        $result = $conn->query($select);
    
        if($result->num_rows > 0){
    
            while($row = $result->fetch_assoc()){
                
        ?>
        
    <div class="jumbotron p-md-5 text-white" style="border-radius: 0px; background-color: #222">
        <div class="col">
            <h1 class="text-center"><?php echo $row['nome_artigo'] ?></h1>
        </div>
    </div>

    <?php

            }
        }
?>
    <section style='margin-top: 80px; margin-bottom: 80px;' class='container'>
    <div class='row'>

        <!-- O word-wrap coloca quebra de linha no texto dentro da div -->

        <div class='col-12 offset-md-2 col-md-8' style='word-wrap: break-word'>
        
    <?php

        
    
        //ESSE ARQUIVO É RESPONSÁVEL POR TRAZER NOME DO AUTOR E DATA DO ARTIGO, PARA CADA PÁGINA DE ARTIGO ATRAVÉS DO 'INCLUDE' COM PHP
        //ESSE ARQUIVO É INCLUÍDO NO ARQUIVO DO ARQUIVO NO MOMENTO EM QUE O USUÁRIO CRIA O ARTIGO
    
        include 'header.html';
    
        $servername = 'localhost';
        $username = 'root';
        $password = 'Oliver.1992*';
        $myDB = 'myTest';
    
        $conn = new mysqli($servername, $username, $password, $myDB);
    
        if($conn->connect_error){
            die('Erro ao conectar');
        }
    
        $select = "SELECT * FROM artigos WHERE nome_artigo= '$dir'";
        $result = $conn->query($select);
    
        if($result->num_rows > 0){
    
            while($row = $result->fetch_assoc()){
                
        ?>
    
        <h4 class="text-secondary"><strong>Autor: <?php echo $row['autor_artigo'] ?></strong></h4>
        <p class="text-black-50">Data: <?php echo $row['data_artigo'] ?></p>
        <hr style="border: 2px solid #006666">
    
        <?php
    
              }
          }
        ?><p>ddededed</p>

      <p>Obrigado por ler nosso artigo</p>
          <hr style='border: 2px solid #006666'>
          </div>
        </div>
      </section>
    <?php include '../../../footer.html'; ?>