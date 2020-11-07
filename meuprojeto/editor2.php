
    <?php
    
        //************** conexao com banco *********************/

          $servername = "localhost";
          $username = "root";
          $password = "Oliver.1992*";
          $myBD = "myTest";

          $conn = new mysqli($servername, $username, $password, $myBD);

          if($conn->connect_error){
            die("Erro ao conectar");
          }

          echo "Conexao bem sucessida!";

        //**************************************************** */
    
    ?>

    <!-- Aqui está a parte que cuida de receber o arquivo e criálo (conteúd, título, autor, imagem etc) -->
    <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        //Aqui recebe o conteudo dos campos através do POST
          //aqui recebe o conteúdo do artigo
          $text = $_POST['editordata'];
          //aqui recebe a categoria do artigo
          $categoria = $_POST['categoria_artigo'];
          //aqui recebe o nome do arigo
          $nome_artigo = $_POST['nome_artigo'];
        //********************************************** */
        

        //*******************cria o arquivo com o conteúdo do artigo**************************
        $article = fopen("art.php", "w+") or die("Não foi possível criar o artigo");
        $header = "<?php include '../../../header.html'; ?>";
        fwrite($article, $header);


        $headerArtigo = fopen("headerArtigo.txt", "r") or die("Não foi possível abrir o arquivo");
        $txtHeader = fread($headerArtigo, filesize("headerArtigo.txt"));
        fwrite($article, $txtHeader);
        fclose($headerArtigo);

        //ness..
        $config_content = "
        <section style='margin-top: 80px; margin-bottom: 80px;' class='container'>
        <div class='row'>

            <!-- O word-wrap coloca quebra de linha no texto dentro da div -->

            <div class='col-12 offset-md-2 col-md-8' style='word-wrap: break-word'>
            
        ";
        fwrite($article, $config_content);
        
        $openTxt = fopen("fileofcode.txt", "r") or die("Não foi possível abrir o arquivo");
        $txt = fread($openTxt, filesize("fileofcode.txt"));
        fwrite($article, $txt);
        fclose($openTxt);
        
        $content = $text;
        fwrite($article, $content);

        $config_content_footer = "

          <p>Obrigado por ler nosso artigo</p>
              <hr style='border: 2px solid #006666'>
              </div>
            </div>
          </section>
        ";
        fwrite($article, $config_content_footer);

        $footer = "<?php include '../../../footer.html'; ?>";
        fwrite($article, $footer);
        //*********************cria o arquivo com o conteúdo do artigo*************************

        
        $dir = "artigos/" . $categoria ."/" . $nome_artigo . "/";
        
        echo "artigos/" . $categoria . "/" . $nome_artigo . "/";

        echo "<p>" . $dirParaBank . "</p>";
        
        //**************************mkdir cria um diretório*************************
        //Esse trecho de código cria o diretório onde irei armazenar apágina do artigo
        if(mkdir($dir, 0777)){
          echo "sucesso ao criar o diretório";
        }else{
          echo "Erro ao criar o diretório";
        }
        //*********************************************************************** */        


        //Esse trecho de código atribui permissões ao arquivo criado do artigo em questão
        chmod("index.php", 0777);

        //Aqui foi só um teste para ver como estava saindo o caminho do diretório
        echo "<br> Teste de caminho: " . $dir . "<br>";

        //Aqui eu contateno o nome do arquivo do artigo à variável que contém o caminho onde o arquivo será armazenado
        $dirDestino = $dir . "index.php";

        //Aqui novamente foi apenas um teste para ver se estava imprimindo o caminho do arquivo
        echo "Teste de caminho" . $dirDestino . "<br>";
        
        //a função rename move o arquivo para outro diretório
        //no trecho de código a baixo eu uso a função rename para mover o arquivo do artigo que foi acabado de ser criado para seu respectivo diretório

        if(rename("art.php", "$dirDestino")){
          echo "Arquivo movido com sucesso";
        }else{
          echo "Falha ao mover arquivo";
        }


        //esse trexo de codigo é onde cuida do envio das imagens
        if(isset($_FILES['pic'])){
          
          $ext = strtolower(substr($_FILES['pic']['name'],-4));
          $new_name = date("Y.m.d-H.i.s") . $ext;
          $dir = 'imagens/'; //diretório para upload das imagens
          move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //fazer upload do arquivo
          
          echo '<p>Imagem enviada com sucesso</p>';
        }else{
          echo '<p>Imagem não enviada</p>';
        }
        
        echo "<p>Artigo criado acesse através do link: <a href='artigos/'>artigo</a></p>";
        
        
        echo "<p>" . $dirDestino . "</p>";
        echo "<p>" . $dir . $new_name . "</p>";

        //************     AQUI JÁ COMEÇA A INSERÇÃO NO BANCO DE DADOS ***************** */

        $stmt = $conn->prepare("INSERT INTO artigos (nome_artigo, imagem_artigo, descricao_artigo, cat_artigo, autor_artigo, caminho_artigo, data_artigo) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $nome_art, $imagem_art, $descricao_art, $cat_art, $autor_art, $caminho, $data);


        //a função utf_decode
        $nome_art = ($_POST['nome_artigo']);
        $imagem_art = "/meuprojeto" . "/" . $dir . $new_name;
        $descricao_art = $_POST['desc_art'];
        $autor_art = $_POST['autor_art'];
        $cat_art = $_POST['categoria_artigo'];
        $caminho = ("/meuprojeto" . "/" . "artigos/" . $categoria . "/" . $nome_artigo);
        $data = date('d/m/Y');
        $stmt->execute();

        echo "<p>teste caminho imagem: " . $imagem_art . "</p>";
        echo "teste caminho: " . $caminho . "<Br>";

        echo "test descricao: " . $descricao_art . "<Br>";
        echo "test imagem: " . $autor_art . "<br>";

        $stmt->close();
        $conn->close();

      }

    ?>
    <!-- Aqui é onde eu finalizo o arquivo -->
    
              <h2 class="text-warning">Algumas dicas para melhorar a formatação do seu artigo:</h2>

              <p>Caso a imagem seja muito grande, ela pode ultrapassar o limite da borda do espaço do seu artigo, então recomendados que no caso de imagens muito grande clique em cima da imagem com o botão esquerdo do mouse ai então você poderá escolher o tamanho ideal (entre 100, 50 e 25%) recomendamos usar o padrao de 100%, dessa forma a imagem o ocupará a largura máxima para o espaço do artigo.</p>

              <p>recomendamos também a utilzação dos estilos de cabeçalho HEADER 1 para títulos e HEADER 3 em diante para o conteúdo do texto. Fora isso fique a vontade para editar seu artigo da melhor forma possível. Ótimo artigo.</p>

              <hr>

              <h2>Compartilhe suas idéias com o mundo</h2>
              <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="padding-top: 60px;" enctype="multipart/form-data">
                <p>Nome do artigo: <input type="text" name="nome_artigo" id="" class="col-sm-6 form-control" placeholder="Crie um título bem sugestivo ao seu artigo"></p>
                <p>Descrição do artigo <input type="text" name="desc_art" id="" class="form-control" placeholder="Faça uma descrição do seu artigo que será exibida junto com a Thumbnail"> </p>
                <p>Thumbnail (miniatura) artigo: <input type="file" name="pic" accept="image/*" class="form-control" src="" alt="" name="imagem"> <span class="text-info">Escolha a melhor imagem que descreva seu artigo</span> </p>
                <p>Autor <input type="text" name="autor_art" class="col-sm-6 form-control" id="" placeholder="Quem escreveu o artigo"> </p>
                <p>Categoria do artigo
                    <select name="categoria_artigo" class="form-control">
                      <option value="">...</option>
                      <option value="games">Games</option>
                      <option value="programacao">Programação</option>
                      <option value="artes">Artes</option>
                      <option value="internet">Internet</option>
                      <option value="edicao">Edição e Design</option>
                      
                    </select>
                </p>
                <textarea id="summernote" name="editordata" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></textarea>
                <hr>
                <div class="d-flex justify-content-end bg">
                  <input class="btn btn-primary" type="submit" value="Terminar">
    </div>
                <hr>
              </form>


    <script>
      $('#summernote').summernote({
        placeholder: 'Conteúdo do artigo',
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['codeview', 'help']]
        ]
      });
    </script>
    
 
    
