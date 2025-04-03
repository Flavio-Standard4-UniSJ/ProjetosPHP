<?php

//loop for, foreach

$lista = ["arroz", "feijão", "açúcar", "sal", "óleo de soja", "azeite", "macarrão"];

echo '<hr>';

for ($i = 0; $i < count($lista); $i++) {
    echo $lista[$i] . '<br>';
}

echo '<hr>';

foreach ($lista as $item) {
    echo $item . '<br>';
}

echo '<hr>';


foreach ($lista as $key => $value) {
    echo "{$key} => {$value} <br>";
}

echo '<hr>';
