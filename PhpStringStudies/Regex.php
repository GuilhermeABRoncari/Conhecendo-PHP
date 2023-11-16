<?php

/*
preg_match() - Função que pode retornar um boolean e opicionalmente arrays de strings 
dependendo dos parametros preenchidos na assinatura do metodo.

preg_replace() - Função que manipula uma string usando regex.
*/
$telefones = [
    '123.456.789-00'=> '(37) 99999 - 8888', 
    '123.456.789-01'=> '(21) 78888 - 7777', 
    '123.4J6.789-02'=> '(85) 6666 - 5555', 
    '123.456.789-03'=> '(11) 4444 3333', 
    '123.456.789-04'=> '(17) 92222 1111',
    '123.456.789-05'=> '(17) 9000 l111'];

$dataAtual = new DateTime();
$dataFormatada = $dataAtual->format('Y-m-d');

foreach ($telefones as $cpf => $telefone) { 
    $regexCpf = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
    $regexTelefone = '/^\(\d{2}\) 9?\d{4} -? ?\d{4}$/';
    $regexDataReplace = '/^(\d{4})-(\d{2})-(\d{2})$/';

    if (preg_match($regexTelefone, $telefone) && preg_match($regexCpf, $cpf)) {
        echo "Telefone $telefone é valido para CPF: $cpf" . PHP_EOL;
        echo "Data atual: " . preg_replace($regexDataReplace, '\3/\2/\1', $dataFormatada) . PHP_EOL;
        echo PHP_EOL;
    } else {
        echo "Telefone $telefone é invalido para CPF: $cpf". PHP_EOL;
    }
}