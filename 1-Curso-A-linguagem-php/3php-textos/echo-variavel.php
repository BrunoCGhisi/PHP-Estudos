<?php 
$num = 15;
//echo "Olá, meu numero da sorte é '$num' também é '$num' ";
//entretanto eu posso apenas comandar
//\t é responsavel por fazer a funcao do TAB, dar um espaço adequado 
//\n é responsavel por fazer meu texto quebrar linha
//ENTRETANTO é aconselhavel quebrar linhas utilizando: PHP_EOF (php end of line)
//Sempre utilizado no final, asim como no exemplo
//isso pois, alguns sistemas operacionais utilizam \n outros \r PGP_EOF é universal
echo "\tOlá!" . PHP_EOL;
echo "Meu numero da sorte é $num porque $num é meu dia de meu nascimento";
