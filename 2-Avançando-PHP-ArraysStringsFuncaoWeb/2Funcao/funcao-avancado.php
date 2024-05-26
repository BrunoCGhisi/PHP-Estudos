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
        exibemensagem("Depositos precisam ser positivos");
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
//Aqui esta a lista que comtempla todas as contas
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];
//Adicionando uma conta, de forma diferente
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

//Aqui eu vou sacar um valor 
$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);
//Aqui eu vou sacar um valor 
$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);
//Aqui eu vou depositar um valor 
$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
   exibemensagem (mensagem: $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
