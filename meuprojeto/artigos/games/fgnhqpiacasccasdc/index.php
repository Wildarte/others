<?php include '../../../header.html'; ?>
        <section style='margin-top: 80px; margin-bottom: 80px;' class='container'>
        <div class='row'>

            <!-- O word-wrap coloca quebra de linha no texto dentro da div -->

            <div class='col-12 offset-md-2 col-md-8' style='word-wrap: break-word'>
            
        <?php

        $dir = basename(__DIR__);
    
        //SE DER CERTO, ESTE ARQUIVO SERÁ RESPONSÁVEL POR SE CONECTAR AO BANCO DE DADOS E TRAZER AS INFORMAÇÕES DE NOME DO ARTIGO, NOME DO AUTOR E DATA DO ARTIGO, EU INCLUO ESTE ARQUIVO EM CADA PÁGINA DE ARTIGO ATRAVÉS DO 'INCLUDE' COM PHP
    
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
    
        <h1 class="text-center"><?php echo $row['nome_artigo'] ?></h1>
        <h4 class="text-secondary"><strong>Autor: <?php echo $row['autor_artigo'] ?></strong></h4>
        <p class="text-black-50">Data: <?php echo $row['data_artigo'] ?></p>
        <hr style="border: 2px solid #006666">
    
        <?php
    
              }
          }
        ?><p>vcvcv</p><?php
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

    <p> <?php if($row['curtidas'] == 0){
         echo "Seja o primeiro a curtir";
        }else{
            echo "Se gostou, dixe seu like ";
        }
        ?>
                
        <button type='button' class='btn btn-outline-success'>
        <img src='/meuprojeto/imagens/resources/thumb-up-1_icon-icons.com_69846.ico' alt=''>
            <?php
            
            if($row['curtidas'] > 0){ ?>
                <span class='badge badge-success badge-pill'>
                   <?php echo $row['curtidas']; ?>
                </span> <?php
            }
               
            ?>
            
        </button>
        
    </p>

<?php
    
        }
    }

?>

              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>