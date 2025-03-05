<?php

//funções de manipulação de Array
$cart = ['arroz', 'feijão', 'macarrão', 'açúcar', 'sal'];

var_dump($cart);
//função unset remove um ekemento específico em qualquer posição do array
unset($cart[3]);

//função array_pop remove o último elemento di array
var_dump($cart);

array_pop($cart);

echo '<pre>';
var_dump($cart);
echo '</pre>';

//função array_shift remove o primeiro elemento do array
array_shift($cart);
echo '<pre>';
var_dump($cart);
echo '</pre>';


//função array_unshift insere ekemento específico no primeiro elemento do array
array_unshift($cart, 'azeite');
echo '<pre>';
var_dump($cart);
echo '</pre>';

//função array_push insere ekemento específico no final do array
array_push($cart, 'molho de tomate');
array_push($cart, 'feijão');
echo '<pre>';
var_dump($cart);
echo '</pre>';

// função array_unique remove elementos duplicados
$cart = array_unique($cart);
echo '<pre>';
var_dump($cart);
echo '</pre>';