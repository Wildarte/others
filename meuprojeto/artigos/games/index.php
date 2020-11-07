<?php

    include '../../header.html';
?>
    <header class="jumbotron" style="border-radius: 0px; background-image: url('/meuprojeto/imagens/resources/game.png');">
    <h1 class="display-4 text-center text-white">Games</h1>
    
    </header>

    <section class="container">
        <hr style="border: 2px solid #006666">
<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar");
    }


    //Aqui seleciona todos os artigos
    $select = "SELECT * FROM artigos WHERE cat_artigo='games'  ORDER BY id DESC ";
    $result = $conn->query($select);

    if($result->num_rows > 0){
      
?>

        <div class="row">
            

<?php
    
    while($row = $result->fetch_assoc()){

        if($row['cat_artigo'] == "games"){
?>       
    <div class="col-12 col-md-6 mb-5">
        <div class="card">
            <img class="card-img-top" style="height: 15em" src="<?php echo $row['imagem_artigo'] ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row['nome_artigo'] ?></h4>
                <p class="card-text"><?php echo $row['descricao_artigo'] ?></p>
            <hr>
                <a href="<?php echo $row['caminho_artigo'] ?>" class="btn btn-primary card-link">Acessar</a>
            </div>
        </div> 
    </div>
<?php
        }
    }
?>

        
    </div>

<?php
    }

?>

         <hr style="border: 2px solid #006666">   
    </section>

<?php

    $conn->close();

    include '../../footer.html';

?>