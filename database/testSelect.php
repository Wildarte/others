<?php

    include('connectMyBD.php');

    $sql = "select firstname from post where id = 1";

    mysqli_query($conn, $sql);

?>