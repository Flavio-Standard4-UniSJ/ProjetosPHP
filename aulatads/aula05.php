<?php
//Arrays no PHP

$carros = ['fusca', 'fiat', 'opala', 'gol'];

echo '<pre>';
var_dump($carros);
echo '</pre>';

echo $carros[2];

$lista = [
    'produto'    => 'arroz',
    'peso'       => '5kg',
    'preco'      => 34.99,
    'quantidade' => 2,
];

echo  '<pre>';
var_dump($lista);
echo '</pre>';

$produtos = [
    [
        'descricao'  => 'feijão',
        'peso'       => '1kg',
        'preco'      => 7.99,
        'quantidade' => 5,
    ],
    [
        'descricao'  => 'sal',
        'peso'       => '1kg',
        'preco'      => 2.99,
        'quantidade' => 2,
    ],
    [
        'descicao'   => 'macarrão',
        'peso'       => '1kg',
        'preco'      => 7.99,
        'quantidade' => 4,
    ],
];
echo  '<pre>';
var_dump($produtos);
echo '</pre>';

echo $produtos[2]['descicao'];