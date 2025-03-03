<?php

// string  -  inteiro  -  real     -  lógico
// 'algo'  -  10900    -  10900.51 -  true

$name   = 'Flávio da Silva Sales';

$value  = 10900;

$pi     = 3.1415;

$adulto = true;

echo $name;
echo '<br>';
$name   = 'Flávio da Silva Sales Vrinho';
echo $name;
echo '<br>';
$name   = 'UniSãoJosé';
echo $name;
echo '<br>';
echo $value;
echo '<br>';
echo $name;
echo '<br>';
echo $name;
echo '<br>';
echo $adulto;
echo '<br>';
echo $pi;
echo '<br>';
//PHP é fracamente tipado pode mudar de tipo de dados durante a execução
$name = $pi;
echo $name;
echo '<br>';
$name = $adulto;
echo $name;
echo '<br>';
$nulo = null;
echo $nulo;
//PHP é case sensitive a variavel abaixo não funcionará
echo $Name;



?>