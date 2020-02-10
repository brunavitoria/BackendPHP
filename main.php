<?php

require_once __DIR__ . '/vendor/autoload.php';

use Reweb\Job\Backend\Conta;

$contas[0] = new Conta("Poupanca", 3000);
$contas[1] = new Conta("Poupanca", 200);
$contas[2] = new Conta("Poupanca", 800);
$contas[3] = new Conta("Corrente", 1200);
$contas[4] = new Conta("Corrente", 150);
$contas[5] = new Conta("Corrente", 20);

//Saque
$contas[0]->saqueP(200);
$contas[3]->saqueC(500);

//Depósito
$contas[1]->deposito(1000);
$contas[4]->deposito(1500);

//Transferência
$contas[2]->transferencia($contas[1], 20);
$contas[5]->transferencia($contas[4], 10);