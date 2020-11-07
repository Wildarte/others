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
        <p>Autor: <?php echo $row['autor_artigo'] ?> </p>
        <p>Data: <?php echo $row['data_artigo'] ?></p>
        <hr>
    
        <?php
    
              }
          }
        ?><h1 style="text-align: center; ">Conheça a verdade por trás do grande sucesso!</h1><p style="text-align: center;"><br></p><h3 style="text-align: justify;"><font color="#424242">A</font>&nbsp;<font color="#424242" style="">verdade não dita sobre este game fica escondida por de trás dos panos, muitos pensam que surgiu inspirado num grande sucesso de um filme japonês que conta a história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas e&nbsp;</font><font color="#424242">verdade não dita sobre este game fica escondida por de trás dos panos, muitos pensam que surgiu inspirado num grande sucesso de um filme japonês que conta a história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas e verdade não dita sobre este game fica escondida por de trás dos panos, muitos pensam que surgiu inspirado num grande sucesso de um filme japonês que conta a história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas.</font></h3><h3 style="text-align: justify;"><font color="#424242"><br></font></h3><h3 style="text-align: justify;"><img src="https://thesquad.com.br/wp-content/uploads/2019/10/PUBG.jpg" style="width: 100%;"><font color="#424242"><br></font>&nbsp;</h3><p style="text-align: justify;"><br></p><h3 style="text-align: justify;"><font color="#424242">história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas e&nbsp;</font><font color="#424242">verdade não dita sobre este game fica escondida por de trás dos panos, muitos pensam que surgiu inspirado num grande sucesso de um filme japonês que conta a história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas e verdade não dita sobre este game fica escondida por de trás dos panos, muitos pensam que surgiu inspirado num grande sucesso de um filme japonês que conta a história de um grupo de jovens de uma escola que são deixados numa ilha para que possam sobreviver e isso pode custar suas vidas.</font></h3><div><font color="#424242"><br></font></div>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>