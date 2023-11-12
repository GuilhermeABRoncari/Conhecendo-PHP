<?php

require_once ("Funcoes.php");

$listaDeContas = [
    '123.456.789.10' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    '987.654.321.01'=> [
        'titular' => 'Newton',
        'saldo' => 5000
    ],
    '654.987.321.00' => [
        'titular' => 'Ranny',
        'saldo' => 2000
    ]
];

titularComLetrasMaiusculas($ListaDeContas['123.456.789.10']);

/*
foreach ($listaDeContas as $cpf => $conta) {
    exibeConta($conta);
}
*/

//sacar($listaDeContas['123.456.789.10'], 500);
//depositar($listaDeContas['654.987.321.00'], 3000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($listaDeContas as $cpf => $conta) { ?>
        <dt>
            <h3><?= "Titular: {$conta['titular']} - $cpf;" ?></h3></dt>
        <dd><?= "Saldo: {$conta['saldo']}" ?></dd>
        <?php } ?>
    </dl>
</body>
</html>

