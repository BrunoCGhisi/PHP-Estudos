<?php 

#Aqui eu estou declarando dentro do próprio for que contador é = 1.
#Em seguida eu botei uma condição "Contador é menor ou igual a 15??"
#Se sim, contador = contador + 1
#Por fim, vai fazer a função de { Echo contador }

#Nesta chamada, a gente nunca mais contará o 13, então quero pular ele, e continuar contando sem afetar o código.
#E como bugs podem ocorrer, eu também quero que se caso o contador de alguma forma passar do valor 14, pare imediatamente de contar.
#É proposital, ele contar até 15 dentro do for, apenas para a didática, eu sei que não faz sentido.

for ($contador=1; $contador <=15; $contador++){
    if ($contador == 13){
        continue;
    } else {
        echo "#$contador". PHP_EOL;
    }
    if ($contador >=14 ){
        break;
    }
}