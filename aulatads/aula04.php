<?php

//Arrays no PHP

$frutas = array('maça', 'pera', 'uva', 'laranja');


//Notice: Array to string conversion
#echo $frutas; 

#print $frutas;

// chave => valor
print_r($frutas);

echo '<pre>';
var_dump($frutas);
echo '</pre>';

// saída: 0 => maça 1 => pera 2 => uva 3 => laranja


echo $frutas[3];