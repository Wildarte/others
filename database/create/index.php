<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <?php

        $servername = "localhost";
        $username = "root";
        $password = "Oliver.1992*";
        $myDB = "myTest";

        $conn = new mysqli($servername, $username, $password, $myDB);

        if($conn->connect_error){
            die("Sem conexão");
        }
        echo("Conexao bem sucedida!");

        $name_cat = $desc_cat = $imagem = $cat_artigo = $autor_artigo = $caminho_artigo = "";
        $nameErr = $descErr = "";
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            


                //esse trexo de codigo é onde cuida do envio das imagens
                if(isset($_FILES['pic'])){
                
                    $ext = strtolower(substr($_FILES['pic']['name'],-4));
                    $new_name =  $_POST['nome_artigo']. $ext;
                    $dir = './imagens/'; //diretório para upload das imagens
                    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //fazer upload do arquivo
                    
                    echo '<p>Imagem enviada com sucesso</p>';
                }else{
                    echo '<p>Imagem não enviada</p>';
                }

                $article = fopen("index.php", "w+") or die("Não foi possível criar o artigo");
                $header = "<?php include '../../../header.html'; ?>";
                fwrite($article, $header);

                //ness..
                $config_content = "
                    <h1>Artigos sobre</h1>
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
                //*********************cria o arquivo com o conteúdo do artigo*************************

                $dir = "catorias";

                //**************************mkdir cria um diretório*************************
                //Esse trecho de código cria o diretório onde irei armazenar apágina do artigo
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




                $insert_cat = $conn->prepare ("INSERT INTO artigos(nome_artigo, imagem_artigo, descricao_artigo, autor_artigo, cat_artigo, caminho_artigo) VALUES(?,?,?,?,?,?)");
                $stmt->bind_param("ssssss", $nome_artigo, $desc_artigo, $imagem_artigo, $cat_artigo, $autor_artigo, $caminho);

                $nome_artigo = $_POST['nome_artigo'];
                $imagem_artigo = $dir;
                $desc_artigo = $_POST['desc_artigo'];
                $cat_artigo = $_POST['cat_artigo'];
                $autor_artigo = $_POST['autor_artigo'];
                $caminho = $dirDestino;

                $stmt->execute();





                

                echo "<p>Novo artigo criado com sucesso</p>";

                $stmt->close();
                $conn->close();
            
            echo "Método POST";

        }


    ?>

    <div class="container">

        <h2>Adicionar categoria</h2>

        <div class="row">
            <div class="col">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="inputName" class="col form-label">Nome do artigo </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nome_artigo" id="inputName" placeholder="Nome da categoria">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col form-label">Autor do artigo </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="autor_artigo" id="inputName" placeholder="Nome da categoria">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col form-label">Categoria do artigo</label>
                        <div class="col-sm-12">
                            <select name="" id="" class="form-control" name="cat_artigo">
                                <option value="">...</option>
                                <option value="programacao">Programação</option>
                                <option value="informatica">Informática</option>
                                <option value="games">Games</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-12 col-form-label">Descrição da Artigo </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="descricao_artigo" id="inputName" placeholder="Descrição da categoria">
                        </div>
                    </div>

                    <input type="file" name="pic" accept="image/*" class="form-control" src="" alt="" name="imagem"> <span class="text-info">Escolha a melhor imagem que descreva seu artigo</span> </p>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>

        <hr class="border">

        <h2>Todos os Artigos </h2>

        <div class="col-sm-4">

        <?php
            
            $select = "SELECT * FROM artigos";
            $result = $conn-query($select);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  ?>

                    <div class="card">
                        <img class="card-img-top" src="<?php echo $row['imagem_artigo'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row["nome_artigo"] ?></h4>
                            <p class="card-text"><?php echo $row['descricao_artigo'] ?></p>
                        </div>
                        <div class="card-body">
                            <a href="<?php $row['caminho_artigo'] ?>" class="card-link">Ler Artigo</a>
                        </div>
                    </div>

                  <?php  
                }
            }

        ?>
    
        </div>
        
        
        
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>