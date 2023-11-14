<?php

$numeros = [5,4,8,7,2,1,3,9];
$nomesENumeros = [
    'Ana' => 9,
    'Mendes'=> 9,
    'João' => 10,
    'Guilherme' => 1,
    'Alisson' => 7,
    'Ranny' => 5,
    'Newton' => 8,
    'Paulo'=> null
];

$nomesENotas = [
    [
        'nome'=> 'Guilherme',
        'nota'=> 3
    ],
    [
        'nome'=> 'Alisson',
        'nota'=> 10
    ],
    [
        'nome'=> 'Ranny',
        'nota'=> 8
    ]
];

function ordenarPorNotas(array $nota1, array $nota2) : int 
{
    return $nota1['nota'] <=> $nota2['nota'];
}

echo 'ORDENAÇÕES' . PHP_EOL;

usort($nomesENotas, 'ordenarPorNotas'); // ordenação de arrys/maps customizavel pelo usuario, passando um array/map e uma função na assinatura do metodo.

foreach ($nomesENotas as $nota) {
    echo "Aluno: {$nota['nome']}, com nota: {$nota['nota']}" . PHP_EOL;
}

echo PHP_EOL;

asort($nomesENumeros); // faz a ordenação por ordem decrescente e mantem os indices de cada valor no map.
arsort($nomesENumeros); // faz a ordenação por ordem crescente e mantem os indices de cada valor no map.
rsort($numeros); // faz ordenação por ordem decrescente comparando os valores de cada index.
sort($numeros); // faz ordenação por ordem crescente comparando os valores de cada index.

ksort($nomesENumeros); // faz a ordenação por ordem decrescente baseado no valor alfanumerico da chave do map.
krsort($nomesENumeros); // faz a ordenação por ordem crescente baseado no valor alfanumerico da chave do map.


var_dump($nomesENumeros);
var_dump($numeros);

echo PHP_EOL;

echo 'METODOS BOOLEANOS NATIVOS DE ARRAYS DO PHP' . PHP_EOL;

echo PHP_EOL;

/*var_dump(array_is_list($notas)); 
    Função que retorna um boolean caso a estrutura deste array seja de index numerico e se caracterize como uma lista.
    Essa função está disponivel somente do PHP 8.1, no momento atual do meu estudo estou ultilizando a versão 7.4
*/

// array_key_exists() - função que verifica se a 'chave' está presente no map independete do valor ser nulo ou não.
echo"Aluno 'Guilherme' existe?". PHP_EOL;
var_dump(array_key_exists('Guilherme', $nomesENumeros)); 

// isset() - função que verifica se a 'chave' está presente no map e o 'valor' não é nulo.
echo "Aluno 'Jailson' existe e fez a prova?" . PHP_EOL;
var_dump(isset($nomesENumeros['Jailson'])); 

echo "Aluno 'Mendes' existe e fez a prova?" . PHP_EOL;
var_dump(isset($nomesENumeros['Mendes']));

echo "Aluno 'Paulo' existe e fez a prova?" . PHP_EOL;
var_dump(isset($nomesENumeros['Paulo']));

// in_array() - função que verifica se determinado 'valor' esta presente no array/map.
echo 'Alguem tirou nota 10?'. PHP_EOL;
var_dump(in_array(10, $nomesENumeros));

// array_search() - função que intera retornando a 'chave' de um array/map buscando por 'valor' fornecido na assinatura do metodo.
$chave = array_search(10, $nomesENumeros);
echo 'Quem tirou 10?' . PHP_EOL;
echo $chave . PHP_EOL;

echo PHP_EOL;

echo 'METODOS DE MANIPULAÇÃO DE ARRAYS NATIVOS DO PHP'. PHP_EOL;

echo PHP_EOL;

// array_keys() - Função que retorna todas as 'chaves' de um array/map.
$nomesFinais = array_keys($nomesENumeros);

// array_values() - Função que retorna todas os 'valores' de um array/map.
$notasFinais = array_values($nomesENumeros);

/*
 array_combine() - Função que combina arrays para formar maps, 
 sendo as 'chaves' no primeiro parametro e os 'valores' o segundo parametro da assinatura do metodo.
 !!! Ambos os Arrays devem possuir o mesmo tamanho !!!
 */
var_dump(array_combine($notasFinais, $nomesFinais));

/*
array_flip() - Função que inverte valores e chaves! Onde o 'valor' passa a ser a 'chave'.
!!! Somente pode inverter Integers com Strings !!! 
Valores nullos ou invalidos serão removidos do array/map.
*/
var_dump(array_flip($nomesENumeros));

echo PHP_EOL;

$alunos2023 = [
    'Ana',
    'Mendes',
    'João',
    'Guilherme',
    'Alisson',
    'Ranny',
    'Newton',
    'Paulo'
];

$novosAlunos = [
    'Kilder',
    'Marcio',
    'Carlotta'
];

/*
 array_merge() - Função que une um ou varios arrays do tipo list com outros arrays de tipo list realocando seus index.
 Em caso de ser um array de tipo map com 'chaves' do tipo String, suas 'chaves' seram sobrescritas em caso de semelhança.
 */
$alunos2024 = array_merge($alunos2023, $novosAlunos);