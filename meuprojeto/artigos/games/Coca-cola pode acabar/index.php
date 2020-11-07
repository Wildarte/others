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
        ?><h1 style="text-align: center; ">Title</h1><p style="text-align: center;"><br></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, neque at condimentum luctus, orci nisl feugiat enim, et venenatis nunc leo scelerisque velit. Nam dictum turpis non lacus auctor, non rhoncus ligula feugiat. Sed nisl odio, volutpat non libero in, convallis luctus sapien. Aenean placerat elit in leo bibendum ornare. Duis congue tempor purus sit amet auctor. Sed auctor efficitur nulla, in viverra mauris venenatis a. Nunc ultricies dolor vitae commodo dapibus. Donec risus erat, luctus nec nibh eu, accumsan laoreet nibh. Maecenas fringilla laoreet mattis. Ut scelerisque pharetra lacus vel pellentesque. Aliquam pulvinar urna libero, ac ullamcorper enim placerat id. Vestibulum dignissim neque a dolor venenatis, id volutpat ipsum dignissim. Nam ut urna et lorem placerat vulputate.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Praesent placerat porta porta. Proin venenatis vestibulum felis, ut rhoncus neque efficitur efficitur. Quisque dictum semper lectus, blandit euismod ante laoreet ac. Maecenas interdum lectus id rutrum hendrerit. Fusce faucibus, eros vitae sollicitudin cursus, est purus viverra erat, vitae hendrerit ex nulla id nibh. Fusce elit lorem, pellentesque eget metus et, volutpat fringilla nisl. Duis id metus lorem. Proin facilisis cursus tristique. Quisque nunc ipsum, rhoncus at gravida quis, feugiat id nunc. Suspendisse dapibus neque libero, ut vehicula urna porttitor vitae. Duis lorem purus, laoreet at magna eu, aliquam mollis nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque rutrum rutrum ante. Cras non massa maximus, feugiat turpis ac, semper dolor. Nunc volutpat sem at nunc placerat commodo. Vestibulum ac porttitor ipsum, in rhoncus lectus.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Mauris eu metus vitae est tristique aliquam sit amet sit amet enim. Fusce pretium lectus vel turpis pharetra, nec varius lectus congue. Vivamus accumsan urna ullamcorper ante sodales volutpat. Nulla accumsan nulla turpis, ut venenatis metus molestie et. Mauris suscipit molestie tincidunt. Mauris est nisi, rutrum vel neque eget, malesuada fringilla dolor. Vivamus quam turpis, luctus ac ex vitae, posuere varius nulla. Praesent varius mi vel purus maximus, sed pharetra tellus imperdiet. In neque felis, tempor nec ligula eget, eleifend mattis lectus. Phasellus auctor pulvinar ligula congue finibus.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">In ac velit ex. Donec vulputate eu libero sit amet sollicitudin. Suspendisse pellentesque ante a tempus bibendum. Aliquam facilisis convallis eros, quis hendrerit risus faucibus quis. Etiam eu eros dignissim, facilisis purus eu, commodo odio. Nam hendrerit sagittis porttitor. Nam sagittis rhoncus ex, et maximus lorem faucibus sed. Phasellus porta magna eu dolor ullamcorper malesuada. Integer id tortor vulputate, porta diam sed, vestibulum nunc. Nunc malesuada egestas nisl, mattis congue augue hendrerit in. Aliquam quis lectus massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sit amet gravida dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac felis volutpat, aliquam ligula eget, aliquet eros. Nullam ut nisl augue.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">Morbi vitae lorem ac leo faucibus tincidunt. Aliquam erat volutpat. Nulla sit amet venenatis lacus. Sed ut est at eros mattis maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vestibulum, mi vitae convallis sodales, eros nisl tincidunt arcu, eget pharetra tortor est vitae purus. Aenean euismod vel elit vitae consequat. Phasellus pretium dolor ut turpis luctus, non eleifend risus cursus. Nam leo magna, congue pulvin</p>

          <p>Obrigado por ler nosso artigo</p>
              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        <?php include '../../../footer.html'; ?>