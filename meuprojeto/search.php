<?php

    include 'header.html';

    $servername = "localhost";
    $username = "root";
    $password = "Oliver.1992*";
    $myBD = "myTest";

    $conn = new mysqli($servername, $username, $password, $myBD);

    if($conn->connect_error){
    die("Erro ao conectar");
    }

    ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <hr style="border: 2px solid #006666">
    <?php

            $search = $_POST['busca'];
           
            //Aqui seleciona todos os artigos
            $select = "SELECT * FROM artigos WHERE nome_artigo like '%$search%'";
            $result = $conn->query($select);

            if($result->num_rows > 0){
            
            ?>   <div class="row"> <?php
    
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
            
            }else{
                echo "<h1 class='text-center'>Não foi encontrado nenhum resultado</h1>";
                
            }
      
?> 
                    
                </div>
                <hr style="border: 2px solid #006666">
            </div>
        </div>
    </div>

<?php include 'footer.html'; ?>