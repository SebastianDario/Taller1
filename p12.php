<?php

$Capital = $_POST ['Capital'];

if($Capital<500){
    $resultado = $Capital + ($Capital*0.2);
    echo 'Total del 2% mensual'.$resultado; 
}elseif($Capital>=500 && $Capital<1500){
    $resultado2 = $Capital + ($Capital*0.45);
    echo 'Total del 4,5% mensual'.$resultado2;
}else{
    $resultado4 = $Capital + ($Capital*0.7);
    echo 'Total del 7% mensual'.$resultado4;
}


?>
