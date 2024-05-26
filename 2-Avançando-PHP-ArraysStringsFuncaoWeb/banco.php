<?php

require_once('funcoes.php');

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
//Se caso eu querer, eu posso adicionar uma conta, posteriormente
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

delete($contasCorrentes, '123.258.852-12');

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   exibemensagem (
    mensagem: "$cpf {$conta['titular']} {$conta['saldo']}"
);
}
