<?php

//A instrução swich permite escolher uma opção e executar determinado bloco de código

$opcao = 3;

switch($opcao){
    case 1:
        echo 'inserir registro';
        break;
    case 2:
        echo 'listar todos os registros';
        break;
    case 3:
        echo 'pesquisar um registro';
        break;
    case 4:
        echo 'atualizar um registro';
        break;
    case 5: 
        echo 'deletar um registro';
        break;
    default:
    echo 'opção inválida. tente novamente.';

}
echo '<hr>';

//operador ternário

$nota = 7.5;

$resultado = $nota >= 7 ? 'aprovado' : 'reprovado';

echo $resultado;