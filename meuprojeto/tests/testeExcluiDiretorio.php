<?php

    if(rmdir($caminho_artigo)){
        echo "diretório removido com sucesso";
    }else{
        echo "Erro ao ao remover";
    }
    echo "<script>alert('Artigo excluído com sucesso');</script>";

?>