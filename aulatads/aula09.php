<?php

//funções de manipulação de Array

// funç~es de ordenação de arrays

$cart = ['arroz', 'feijão', 'macarrão', 'açúcar', 'sal', 'batata'];

var_dump($cart);
arsort($cart); //ordenação de z-a

echo '<pre>';
var_dump($cart);
echo '</pre>';

asort($cart); //ordenação de a-z mantém os índices
echo '<pre>';
var_dump($cart);
echo '</pre>';


sort($cart); //ordenação de a-z e ordena os índices
echo '<pre>';
var_dump($cart);
echo '</pre>';