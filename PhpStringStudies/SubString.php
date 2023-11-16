<?php

$nomeCompleto = 'Guilherme A. B. Roncari';
$email = 'Raññy@email.com ';

// strpos() - Função que retorna um inteiro indicando a posição de uma string dentro de outra string.
$posicaoDoArroba = strpos($email,'@');

// substr() - Função que retorna uma sub string apartir de um indice inicial no segundo parametro, e um final no segundo.
echo substr($email,0, $posicaoDoArroba) . PHP_EOL;


// mb_strlen() - Função que retorna um int lidando com caracteres que ocupam multi bites de memoria.
echo 'Nickname sujerido possui este numero de caracteres: ' . PHP_EOL;
echo mb_strlen(substr($email, 0, $posicaoDoArroba)) . PHP_EOL;

echo PHP_EOL;

// explode() - Função que divide todas as palavras em uma string e retorna uma (array)lista de strings.
$nomeDivididoEmArray = explode(' ', $nomeCompleto);

$primeiroNome = $nomeDivididoEmArray[0];
$ultimoNome = $nomeDivididoEmArray[count($nomeDivididoEmArray) -1];
echo "Nome: $primeiroNome, Sobrenome: $ultimoNome" . PHP_EOL;
/*
implode() - Função que concatena strings, 
onde o primeiro paremetro da assinatura do metodo sera usado como referencia de string para a concatenação.
*/
echo 'Nome completo:' . implode(" ", $nomeDivididoEmArray) . PHP_EOL;

/*
trim() - Função que remove espaços, caracteres especias e caracteres especificos 
no segundo argumento da assinatura do metodo.
*/
echo trim($email, ' ') . PHP_EOL;

echo PHP_EOL;

/*
heredoc -Exemplo de como criar uma string complexa usando '<<<EOT EOT;' 
mantendo a indentação e manutenibilidade da propria. 

nowdoc -Exemplo de como criar uma string complexa usando '<<<'EOT' EOT;' 
mantendo a indentação e manutenibilidade da propria. 

heredoc === aspas duplas
nowdoc === aspas simples
*/
function gerarEmail(string $email, string $nomeCompleto) : void 
{
    $nomeDivididoEmArray = explode(' ', $nomeCompleto);

    $conteudo = <<<EOT
    Olá $nomeDivididoEmArray[0]!
    Seu email $email foi confirmado com sucesso!!!
    EOT;

    echo $conteudo . PHP_EOL;
}

gerarEmail($email, $nomeCompleto);

echo PHP_EOL;

// str_replace() - Função que realoca caracteres em uma string, na ordem de 'o quê', 'pelo quê' e 'onde';
$texto = 'Seus olios são verdes!';
echo str_replace('olios', 'olhos', $texto) . PHP_EOL;