<?php

    $difficolta = $_POST['difficolta'];

    if (!isset($difficolta)) {
       include "index.php";
    } else{
        include "gioco.php";
    }
    
    

?>