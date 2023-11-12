<?php

function showMessage(string $message) : void
{
    echo $message . '<br>';
}

function sacar(array &$conta, float $valorSaque) : void 
{
    if ($valorSaque < $conta['saldo']) {
        $conta['saldo'] -= $valorSaque;
        showMessage('Saque efetuado com sucesso.');
        showMessage("Titular:  {$conta['titular']} agora possui saldo de: {$conta['saldo']}");
    } else {
        showMessage('Saldo insuficiente.');
    }
}

function depositar(array &$conta, float $valorADepositar) : void
{
    if ($valorADepositar < 0) {
        showMessage('Vocẽ não pode depositar valores negativos.');
    } else {
        $conta['saldo'] += $valorADepositar;
        showMessage("Deposito efetuado com sucesso para o titular: {$conta['titular']} que agora possui saldo de: {$conta['saldo']}");
    }
}

function titularComLetrasMaiusculas(&$conta) : void 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta) : void
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titluar: $titular. Saldo: $saldo </li>";
}
