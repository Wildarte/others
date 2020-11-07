<?php

    include '../header.html';

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar");
    }

?>
<header class="jumbotron" style="">
    <h1 class=" text-center ">Aqui você encontra artigos de seu interesse</h1>
    
</header>

<section class="container">
    <hr style="border: 2px solid #006666">
<?php

    //Aqui seleciona todos os artigos
    $select = "SELECT * FROM artigos ORDER BY id DESC";
    $result = $conn->query($select);

    if($result->num_rows > 0){
?>

        <div class="row">
            

<?php
    while($row = $result->fetch_assoc()){
            
?>       
    <div class="col-12 col-md-6 mb-5">
        <div class="card">
            <img class="card-img-top img-response" style="max-height: 15em" src="<?php echo $row['imagem_artigo'] ?>" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title" style="color: #003300"><strong><?php echo $row['nome_artigo']; ?></strong></h3>
                <p class="text-body card-text"><strong><?php echo $row['descricao_artigo'] ?></strong></p>
            <hr>
                <a href="<?php echo $row['caminho_artigo'] ?>" class="btn btn-success btn-block card-link"><strong>Ler Artigo</strong></a>
            </div>
        </div> 
    </div>
<?php

        }
?>

        
    </div>

<?php
    }

?>

            
    </section>

<?php

    $conn->close();

    include '../footer.html';

?>