<?php

    $Edad = $_POST ['Edad'];
    $Sexo = $_POST ['Sexo'];

    echo $Edad;
    echo "<br>";
    echo $Sexo;
    echo "<br>";

    if(($Sexo == "hombre")&&($Edad>=63)){
        echo "Se puede jubilar";
    }elseif (($Sexo == "mujer")&&($Edad>=54)){
        echo "Se puede jubilar";
    }else{
        echo "no se puede jubilar"
    }

?>