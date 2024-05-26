<?php

//Funcao para PHP_EOL
function exibemensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}
//Funcao depostiar
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta["saldo"] += $valorADepositar;
    } else {
        exibemensagem("Depositos precisam ser positivos"); //Explicando aqui a função exibre mensagem, dentro da funcao EXIBREMENSAGEM tem um parametro $mensagem, onde eu pego o $mensagem e quebro a linha. Aqui o $mensagem se torna o texto que coloquei
    }
    return $conta;
}
//Funcao sacar
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibemensagem("Você não tem saldo suficiente");
    } else {
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function delete(array &$contas, string $cpf): void
{
    if (isset($contas[$cpf])) {
        unset($contas[$cpf]);
        exibemensagem("Conta excluída com sucesso.");
    } else {
        exibemensagem("Conta não encontrada.");
    }
}