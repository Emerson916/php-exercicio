<?php

/*
const constante = "Isso é uma constante"; 

echo constante;
*/
$nome = "Emerson";
$idade = 17;
$ano = date("Y");




/* Exibir na página o nome do úsuario e o seu ano de nascimento 

Exemplo: Olá, Emerson, você nasceu em 1988
*/

$anoDeNascimento = $ano - $idade;

echo "O ano que vc nasceu é :" . $anoDeNascimento;
?>