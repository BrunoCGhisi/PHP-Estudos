<?php 

$listaidades = [22,33,21,13,15,17,18];

//Eu gostaria de adicionar tres pessoas e atribuir idades a elas
//Claramente eu poderia fazer por exemplo:
//$Joao = listaidade[0];
//$Maria = listaidade[1];
//$Bruno = listaidade[2];
//No entanto, a formas melhores...

list($Joao, $Maria, $Bruno) = $listaidades;

foreach ($listaidades as $idades) {
    echo $idades . PHP_EOL;
}