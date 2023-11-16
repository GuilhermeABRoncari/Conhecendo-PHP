<?php

// Funções disponiveis somente na versão 8.1 do PHP
$nome = 'Guilherme Roncari';
str_contains($nome,'Roncari');

$url = "https://alura.com.br";
var_dump(str_starts_with($url,"https"));
var_dump(str_ends_with($url,".br"));