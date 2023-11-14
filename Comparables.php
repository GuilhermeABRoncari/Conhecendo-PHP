<?php

$notasBimestre1 = [
    'Guilherme'=> 7,
    'Ranny'=> 9,
    'Ana'=> 10,
    'Alisson'=> 1,
    'Newton'=> 8,
    'Jailson'=> 6,
    'Mendes' => 5
];

$notasBimestre2 = [
    'Ranny'=> 10,
    'Ana'=> 8,
    'Alisson'=> 7,
    'Newton'=> 8,
    'Jailson'=> 6,
    'Mendes' => 10,
    'Roberto' => 1
];

/* 
array_diff() - Função que retorna  todos os itens do primeiro array/map onde os 'valores' 
não estão presentes no segundo array/map da assinatura no metodo.
As 'chaves' são ignoradas neste metodo.
*/
var_dump(array_diff($notasBimestre1, $notasBimestre2));

/*
array_diff_key() - Função que retorna todos os itens do primeiro array/map onde as 'chaves'
não estão presentes no segundo array/map da assinatura no metodo.
Os 'valores' são ignorados neste metodo.
*/
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

/*
array_diff_assoc() - Função que retorna todos os itens do primeiro array/map onde as 'chaves'e os 'valores'
não estão presentes ou os 'valores' não são os mesmos no segundo array/map da assinatura no metodo.
Os 'valores' são ignorados neste metodo.
*/
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));