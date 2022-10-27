<?php

$Est = $_POST ['Est'];
$Asig = $_POST ['Asig'];
$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];
$num3 = $_POST ['num3'];

$promedio = ($num1+$num2+$num3)/3;

echo "el resultado del promedio".$promedio;
echo $Est;
echo $Asig;
?> 