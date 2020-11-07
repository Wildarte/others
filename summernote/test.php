<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  </head>
  <body>
    
    <?php include 'header.html'; ?>

    
    <div class="container-fluid border ">
      <div class="row">
          <div class="col-md-3 border">
            
          </div>
          <div class="col-md-9 border">
            
              <form method="post" style="padding-top: 60px;" enctype="multipart/form-data">
                <p>Nome do artigo: <input type="text" name="nome_artigo" id=""></p>
                <p>Imagem de descrição do artigo: <input type="file" name="pic" accept="image/*" class="form-control" src="" alt="" name="imagem"> ... </p>
                <p>Categoria de artigo
                    <select name="categoria">
                      <option value="">...</option>
                      <option value="games">Games</option>
                      <option value="programa">Programação</option>
                      <option value="artes">Artes</option>
                      <option value="internet">Internet</option>
                      <option value="design">Design</option>
                      <option value="redes">Redes</option>
                    </select>
                </p>
                <textarea id="summernote" name="editordata" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"></textarea>
                <input type="text" name="autor" id="">
                
                <input class="btn btn-primary" type="submit" value="Terminar">
              </form>

            

          </div>
      </div>  
    </div>


    <script>
      $('#summernote').summernote({
        placeholder: 'Inicie um novo artigo',
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

    <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        //Aqui recebe o conteudo dos campos através do POST
          //aqui recebe o conteúdo do artigo
          $text = $_POST['editordata'];
          //aqui recebe a categoria do artigo
          $categoria = $_POST['categoria'];
          //aqui recebe o nome do arigo
          $nome_artigo = $_POST['nome_artigo'];
        //********************************************** */
        

        //*******************cria o arquivo com o conteúdo do artigo**************************
        $article = fopen("index.php", "w+") or die("Não foi possível criar o artigo");
        $header = "<?php include '../../../header.html'; ?>";
        fwrite($article, $header);

        //ness..
        $config_content = "
        <section style='margin-top: 80px; margin-bottom: 80px;' class='container'>
        <div class='row'>

            <!-- O word-wrap coloca quebra de linha no texto dentro da div -->

            <div class='col-12 offset-md-2 col-md-8' style='word-wrap: break-word'>
        ";
        fwrite($article, $config_content);
        
        
        $content = $text;
        fwrite($article, $content);

        
        $config_content_footer = "
              </div>
            </div>
          </section>
        ";
        fwrite($article, $config_content_footer);

        $footer = "<?php include '../../../footer.html'; ?>";
        fwrite($article, $footer);
        //*********************cria o arquivo com o conteúdo d artigo*************************

        
        $dir = "artigos/" . $categoria . "/" . $nome_artigo . "/";


        
        //**************************mkdir cria um diretório*************************
        //Esse trecho de código cria o diretório onde irei armazenar o artigo em sim
        if(mkdir($dir, 0777)){
          echo "sucesso ao criar o diretório";
        }else{
          echo "Erro ao criar o diretório";
        }
        //*********************************************************************** */        


        //Esse trecho de código atribui permissões ao arquivo criado do artigo em questão
        chmod("index.php", 0666);

        //Aqui foi só um teste para ver como estava saindo o caminho do diretório
        echo "<br> Teste de caminho: " . $dir . "<br>";

        //Aqui eu contateno o nome do arquivo do artigo à variável que contém o caminho onde o arquivo será armazenado
        $dirDestino = $dir . "index.php";

        //Aqui novamente foi apenas um teste para ver se estava imprimindo o caminho do arquivo
        echo "Teste de caminho" . $dirDestino . "<br>";
        
        //a função rename move o arquivo para outro diretório
        //no trecho de código a baixo eu uso a função rename para mover o arquivo do artigo que foi acabado de ser criado para seu respectivo diretório
        if(rename("index.php", "$dirDestino")){
          echo "Arquivo movido com sucesso";
        }else{
          echo "Falha ao mover arquivo";
        }

        if(isset($_FILES['pic'])){

          $ext = strtolower(substr($_FILES['pic']['name'],-4));
          $new_name = date("Y.m.d-H.i.s") . $ext;
          $dir = './imagens/'; //diretório para uploads
          move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //fazer upload do arquivo
          
          echo ('Imagem enviada com sucesso');
        }
        
        echo "<p>Artigo criado acesse através do link: <a href='artigos/'>artigo</a></p>";
        
      }

    ?>

    <?php include 'footer.html' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>