<?php 

$num = 17;
$acompanhante = 1;


echo "\tOlá!" . PHP_EOL;
echo "Irei analisar a sua idade... Apenas acima de 18 podem entrar na balada" . PHP_EOL;

if ($num >= 18) {
    echo "Ok. Você pode entrar". PHP_EOL;
}   elseif ($num >16 && $acompanhante == 1){
    echo "Ok, você pode entrar pois tem $acompanhante acompanhante". PHP_EOL;
}   else {
    echo "Cai fora malandro". PHP_EOL;
}



