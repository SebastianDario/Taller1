<?php

    $NombreA = $_POST ['NombreA'];
    $Asignatura = $_POST ['Asignatura'];
    $CalificaciónF = $_POST ['CalificaciónF'];

    echo $numero;
    echo "<br>";
    echo $NombreA;
    echo "<br>";
    if($CalificaciónF < 7){echo "Reprobado"} 
    if($CalificaciónF > 7){echo "Aprobado"} 
?>