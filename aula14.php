<?php

//while, do while

$cont = 1;
while ($cont <= 10) {
    echo "{$cont} <br />";
    $cont++;
}

//no while o bloco entre chaves só executará se a condição for atendida

echo '<br />';

//a diferença entre while e do while é que este último executará  o bloco entre chaves pelo menos uma vez

$i = 10;
do {
    echo "{$i} <br />";
} while ($i < 10);