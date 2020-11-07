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
        <p>Autor: <?php echo $row['autor_artigo'] ?> </br>
        Data: <small> <?php echo $row['data_artigo'] ?></small></p>
        <hr style="border: 2px solid #006666">
    
        <?php
    
              }
          }
        ?><h1 style="text-align: center; ">O Futuro dos Computadores</h1><p style="text-align: center;"><br></p><p style="text-align: justify;">Vamos descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;<span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica.</span></p><p style="text-align: justify;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;<span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica&nbsp;</span><span style="font-size: 1rem;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica.</span></p><p style="text-align: justify;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantásticadescobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantásticadescobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica.</p><p style="text-align: justify;">descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica descobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantásticadescobrir nessa nova geração o que mais pode ser possível fazer com os computadores a flor da peloe de uma forma fantástica.<span style="font-size: 1rem;"><br></span><span style="font-size: 1rem;"><br></span></p>
        <p>Gostou do poste? deixe seu like
                
              <button type='button' class='btn btn-outline-success'>
                  <img src='thumb-up-1_icon-icons.com_69846.ico' alt=''>
                  <span class='badge badge-success badge-pill'>12</span>
              </button>
                
              </p>

              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>