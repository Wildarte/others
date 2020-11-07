<?php include '../../../header.html'; ?><?php

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
        ?><h1 style="text-align: center; ">Futuro de Dragon Ball</h1><p style="text-align: center;"><br></p><p style="text-align: justify;">O que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,&nbsp;<span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,&nbsp;</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,&nbsp;</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span></p><p style="text-align: justify;"><span style="font-size: 1rem;"><br></span></p><p style="text-align: justify;"><img src="https://store-images.s-microsoft.com/image/apps.6954.13525800846502309.0bc7eb9b-47cd-4d2e-8abc-93649e60a2a3.f577d127-8876-4285-9559-15bf7c35ca31?mode=scale&amp;q=90&amp;h=720&amp;w=1280&amp;background=%23FFFFFF" style="width: 100%;"></p><p style="text-align: justify;"><br></p><p style="text-align: justify;">N<span style="font-size: 1rem;">o Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span></p><p style="text-align: justify;"><span style="font-size: 1rem;">No Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;">no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo,</span><span style="font-size: 1rem;">que será que nós devemos esperar deste desenho que já fez tanto sucesso nos anos 90 no Brasil e no mundo.</span><span style="font-size: 1rem;"><br></span><span style="font-size: 1rem;"><br></span></p>

          <p>Obrigado por ler nosso artigo</p>
              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>