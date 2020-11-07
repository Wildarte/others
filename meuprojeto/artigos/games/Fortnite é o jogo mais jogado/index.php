<?php include '../../../header.html'; ?>

<div class="jumbotron p-md-5 text-white" style="border-radius: 0px; background-color: #222">
        <div class="col">
          <h1 class="text-center"> Text</h1>
        </div>
      </div>

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
    
    
    
      
        <h4 class="text-secondary"><strong>Autor: <?php echo $row['autor_artigo'] ?></strong></h4>
        <p class="text-black-50">Data: <?php echo $row['data_artigo'] ?></p>
        <hr style="border: 2px solid #006666">
    
        <?php
    
              }
          }
        ?><h1 style="text-align: center; ">Fortnite</h1><p style="text-align: center;"><br></p><p style="text-align: justify;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;<span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que</span></p><p style="text-align: justify;"><img src="https://static-assets-prod.epicgames.com/fortnite/static/webpack/8f9484f10eb14f85a189fb6117a57026.jpg" style="width: 100%;"><span style="font-size: 1rem;"><br></span></p><p style="text-align: justify;"><span style="font-size: 1rem;"><br></span></p><p style="text-align: justify;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;<span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que&nbsp;</span><span style="font-size: 1rem;">Qual será o futuro desse game que mais parece uma cópia de PUBG, que faz milhões para a Epic Games, que conquistou muitos no mundo todo e que</span></p><p style="text-align: justify;"><span style="font-size: 1rem;"><br></span></p><p style="text-align: justify;"><span style="font-size: 1rem;"><br></span><span style="font-size: 1rem;"><br></span></p>

              <p>Gostou do poste? deixe seu like
                
              <button type="button" class="btn btn-outline-success">
                  <img src="/meuprojeto/imagens/resources/thumb-up-1_icon-icons.com_69846.ico" alt="">
                  <span class="badge badge-success badge-pill">12</span>
              </button>
                
              </p>

              <hr class="" style="border: 2px solid #006666">
        
              </div>

               

            </div>
          </section>
        <?php include '../../../footer.html'; ?>