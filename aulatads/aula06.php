<?php
//funções de manipulação de Array

//$nomes = array('Jesus'. 'Maria', 'José');
$nomes = ['Jesus'. 'Maria', 'José'];

$value1 = 'Jesus';
$value2 = 'Maria';
$value3 = 'José';
$value4 = 'João';

/*
$info = [
    $value1,
    $value2,
    $value3,
];
*/

$info = compact('value1', 'value2', 'value3', 'value4');

echo '<pre>';
var_dump($info);
echo '</pre>';

echo '<hr>';

// função is_array verifica se uma variável é um array
print_r(is_array($nomes));
echo '<hr>';

// função in_array verifica se existe um valor dentro de um array
var_dump(in_array('João', $nomes));
echo '<hr>';

print_r(in_array('João', $info));
echo '<hr>';

var_dump(in_array('joão', $info));