<?php



session_start();
include('admin/verifica.php');
include 'header.html'; 
?>

    <div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-window" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
    <path fill-rule="evenodd" d="M15 6H1V5h14v1z"/>
    <path d="M3 3.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
  </svg>  
  DashBoard </div>
  <ul class=" list-group list-group-flush">
        <li>
        <a id="1" href="/meuprojeto/dashboard.php" class="list-group-item list-group-item-action bg-light"><b>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h5v-1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v2h1V6L9 1z"/>
          <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
        </svg>  
        PUBLICAR</b>
        </a>
        </li>
        <li>
        <a id="2" href="/meuprojeto/publish.php" class="list-group-item list-group-item-action bg-light"><b>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
          <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>  
        PUBLICAÇÕES</b></a>
        </li>
        <li>
        <a id="3" href="javascript:void(0)" class="list-group-item list-group-item-action bg-light disabled"><b>OUTROS</b></a>
        </li>
  </ul>

</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Menu</button>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
              </svg>  
              Logado</strong>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item disabled" href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                </svg>  
                Minha Conta</a>
                <a class="dropdown-item" href="/meuprojeto/config.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                </svg>
                Configurações</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin/logout.php" name="">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                  <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
                  <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
                </svg>
                Sair</a>
              </div>
            </li>
          </ul>
        </div>

  </nav>

  <div class="container">
    

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




  
  </div>

<!-- /#page-content-wrapper -->

    <?php include 'footer.html'; ?>

  </div>

  </body>
</html>