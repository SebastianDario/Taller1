<?php

    $Nombre = $_POST ['Nombre'];
    $Asignatura = $_POST ['Asignatura'];
    $N1 = $_POST ['N1'];
    $N2 = $_POST ['N2'];
    $N3 = $_POST ['N3'];

    $Multiplicacion = {$N1*0.3}+{$N2*0.3}+{$N3*0.4};
    echo $Nombre;
    echo "<br>";
    echo $Asignatura;

    if($Multiplicacion>=4.0){echo "Aprobado"}
    if($Multiplicacion<=4.0){echo "Reprobado"}

?>