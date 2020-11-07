<?php

    include '../../header.html';
?>
    <h1 class="text-center"> Ler artigos sobre Artes</h1>
    <h3 class="text-center">Escolha um tema de artigo para começar a ler agora</h3>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myDB = "myTest";

    $conn = new mysqli($servername, $username, $password, $myDB);

    if($conn->connect_error){
        die("Erro ao conectar");
    }
    echo "Conexao bem sucedida";
?>

<section class="container">

<?php

    //Aqui seleciona todos os artigos
    $select = "SELECT * FROM artigos ORDER BY id DESC";
    $result = $conn->query($select);

    if($result->num_rows > 0){
?>

        <div class="row">
            

<?php
    
    while($row = $result->fetch_assoc()){

        if($row['cat_artigo'] == "artes"){
            
?>       
    <div class="col-12 col-md-6">
        <div class="card">
            <img class="card-img-top" src="<?php echo $row['imagem_artigo'] ?>" alt="Card image cap">
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

            
    </section>

<?php

    $conn->close();

    include '../../footer.html';

?>