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
    
        <h1 class="h1 text-center">Titulo: <?php echo $row['nome_artigo'] ?></h1>
        <p>Autor: <?php echo $row['autor_artigo'] ?> </p>
        <p>Data: <?php echo $row['data_artigo'] ?></p>
        <hr>
    
        <?php
    
              }
          }
        ?><p>acacac</p>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>