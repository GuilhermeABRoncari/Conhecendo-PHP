<?php
// if else
/*
$idade = 19;

echo "Você só podera entrar se tiver mais de 18 anos.".PHP_EOL;

if ($idade >= 18) {
    echo "Pode entrar. Você possui $idade anos.".PHP_EOL;
} else {
    echo "Você não pode entrar! Sua idade é  $idade , que é inferior a 18 anos.".PHP_EOL;
}
*/

//Operador Ternario

 /*
$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade'.PHP_EOL;
echo $mensagem;
*/
//Numeros impares
/*
for ($i = 0; $i <= 100; $i++) {
    if ($i%2 != 0) {
        echo "$i".PHP_EOL;
    }   
}
*/

//Tabuada

/*
$number = 9;

for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = ". $result = $number * $i .PHP_EOL;
}
*/

//IMC

/*
$peso = 80;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu IMC é: $imc. Você está com IMC ";

if ($imc < 18) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado.".PHP_EOL;
*/

//Arrays
/*
$nomes = ["Guilherme", "Ranny", "Nilton", "Celma"];

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] .PHP_EOL;
}
*/

//Mapping
/*
$conta1 = [
    "titular"=> "Guilherme",
    "saldo"=> 1000
];
$conta2 = [
    "titular"=> "Newton",
    "saldo"=> 10000
];
$conta3 = [
    "titular"=> "Alisson",
    "saldo"=> 5000
];

$contasCorrente = [$conta1, $conta2, $conta3];

foreach ($contasCorrente as $conta) {
    echo  $conta['titular'].PHP_EOL;
}
*/