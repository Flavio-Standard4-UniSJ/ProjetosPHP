<?php

$age = 18;

//condicionais 
if($age >= 18){
    echo 'Maior de idade!'; //o comando if testa se uma condição é verdadeira ou não
}

//verificar se a idade é de criança, adolescente, jovem, adulto ou idoso


if($age > 1 and $age <= 10){
    echo 'criança!'; 
}

if($age > 10 and $age <= 18){
    echo 'adolescente!'; 
}

if($age > 18 and $age <= 25){
    echo 'jovem!'; 
}

if($age > 25 and $age <= 60){
    echo 'adulto!'; 
}

if($age > 60){
    echo 'idoso';
}

//o bloco else é executado caso a condição testada falhe

if($age >= 18){
    echo 'pode dirigir.';
}else{
    echo 'não pode dirigir.';
}

//usando a instrução elseif
if($age < 16){
    echo 'não pode votar';
}elseif($age >= 18){
    echo('pode votar');
}else{
    echo 'voto facultativo';
}