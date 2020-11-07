<?php

    session_start();
    session_destroy();
    header('Location: /meuprojeto/admin/');
    exit();
    
?>