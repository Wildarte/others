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
        ?><h1 style="text-align: center; "><b>Title</b></h1><h1 style="text-align: center; "><b><br></b></h1><h1 style="text-align: justify;"><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus sagittis interdum. Praesent rutrum tincidunt magna, quis euismod lorem congue eget. Etiam malesuada, est ac commodo pharetra, felis felis tristique tellus, ut vestibulum nulla diam in mi. Ut nec aliquam eros. Praesent sit amet malesuada orci. Maecenas ullamcorper libero non enim dapibus, nec imperdiet sapien consectetur. Vestibulum posuere tempor felis, eget egestas mi volutpat a. Nullam eget vehicula ipsum, vestibulum tincidunt elit. Maecenas non pellentesque massa.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Mauris at venenatis odio. Vestibulum vitae nisi accumsan, faucibus purus sed, accumsan sem. Nam auctor enim tellus, vitae laoreet nulla vulputate et. Mauris sit amet erat quam. Sed pretium vitae neque quis vehicula. In molestie rhoncus sapien ac fringilla. Pellentesque feugiat diam eu sem consequat, et feugiat lectus dictum. Mauris ornare ante ac dolor porttitor, ut faucibus mi porta. Morbi purus magna, pretium in risus et, porta vulputate nibh. Integer fermentum fringilla tortor. Curabitur sit amet pretium nisl, quis elementum nisi. Vivamus nec nibh id augue rhoncus tincidunt. Etiam quis nibh vehicula, aliquet est eu, placerat lorem. Morbi tristique, mauris vel ullamcorper tincidunt, orci ligula ultrices nisl, vitae aliquam sem nunc imperdiet nulla.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Maecenas venenatis id nisl eget condimentum. Sed feugiat ex vel arcu porta eleifend. Vivamus iaculis ac lorem sit amet varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pulvinar massa. Aenean auctor sodales neque, nec blandit lorem ornare eget. Nam sit amet sem auctor, porta est vehicula, finibus turpis. Vestibulum iaculis felis nunc, non blandit magna ullamcorper sit amet. Aliquam eu commodo libero. Suspendisse eleifend cursus lorem quis tincidunt. Aenean lobortis felis non odio porttitor convallis. Mauris sed risus accumsan, condimentum lacus sit amet, laoreet turpis. Quisque eleifend euismod metus, quis bibendum ipsum posuere nec. Nulla quis tortor luctus massa luctus condimentum. Mauris rutrum vulputate nunc, vel pulvinar nisl consequat at.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Quisque consequat eu leo in semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ac ex felis. Pellentesque eget mollis lacus, vitae consectetur eros. Duis malesuada purus in purus viverra hendrerit. Aenean eleifend mollis ligula eget sagittis. Duis sem nisl, facilisis sed dolor semper, tempor laoreet libero. Duis at molestie lacus. Donec vitae leo metus. Mauris convallis magna in ligula venenatis, nec ornare sapien ultricies. Nullam sed magna eros. Nullam a magna at dolor mattis vehicula. In hac habitasse platea dictumst. Vestibulum hendrerit lobortis velit, in efficitur tortor scelerisque ac.</p></h1>

          <p>Obrigado por ler nosso artigo</p>
              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>