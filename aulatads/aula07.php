<?php

//funções de manipulação de Array

$empresa = [
    'nome'     => 'Minuto Economia',
    'fundador' => 'Flavio',
    'ano'      => 2023,
    'url'      => 'https://www.minutoeconomia.blogspot.com'
];

echo '<pre>';
var_dump($empresa);
echo '</pre>';

// função array_keys retorna os índices do array
echo '<pre>';
var_dump(array_keys($empresa));
echo '</pre>';

// função array_values retorna os valores do array
echo '<pre>';
var_dump(array_values($empresa));
echo '</pre>';

$tamanhoArray = count($empresa);

echo 'array de ' . $tamanhoArray . ' posição (ões)!';

// função array_merge junta dois arrays
$company = [
    'ramo'      => 'Finanças',
    'estrutura' => 'blog',
    'categoria' => ['educação financeira', 'planejamento', 'matemática financeira'],
];

$empresa = array_merge($empresa, $company);

echo '<pre>';
var_dump($empresa);
echo '</pre>';
