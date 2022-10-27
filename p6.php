<?php

    $Volantes = $_POST ['Volantes'];
    $Posters = $_POST ['Posters'];
    $Tdepres = $_POST ['Tdepres'];

    $Taller6 = ($Volantes*2000)+($Posters*5000)+($Tdepres*500);

    echo $Taller6;
?>