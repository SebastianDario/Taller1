<?php

    $Valor = $_POST ['Valor'];
    $Diferencia = $Valor= ($Valor*0.2);

    echo $Diferencia;
    echo "<br>";

    if($Valor>20.000){
        echo "Descuento";
    }else{
        echo "No hay descuento";
    }

?>