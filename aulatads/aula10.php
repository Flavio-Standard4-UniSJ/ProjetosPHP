<?php

//funções de manipulação de Array

// funções end retorna o último elemento de arrays

$cart = ['arroz', 'feijão', 'macarrão', 'açúcar', 'sal', 'batata'];

var_dump($cart);
echo '<br>';

echo end($cart);
echo '<br>';

//retornar o último elemento usando a função count
echo $cart[count($cart) - 1];

//função array_filter usado para filtrar valores de um array
$ages = [1, 13, 11, 47, 50, 20, 18];
//retornar as idades superiores a 18 nos
$agesFilter = array_filter($ages, function($age){
    return $age > 18;
});

echo '<hr>';
var_dump($agesFilter);

//função array_map percorre o array e retorna as idades pares
$ages = array_map(function($age){
    return $age % 2 == 0;
}, $ages);

echo '<hr>';
var_dump($ages);

//função array_map percorre o array e retorna as itens em maiúsculo
$cart = array_map(function($item){
    return strtoupper($item);
}, $cart);

echo '<hr>';
var_dump($cart);
echo '<hr>';


//concatenação
$name = 'Flavio';
$blog = 'Minuto Economia';

echo 'O ' . $name . ' é o criador do blog ' . $blog;
echo '<hr>';

//boas práticas
echo "O {$name} é o criador do blog {$blog}";