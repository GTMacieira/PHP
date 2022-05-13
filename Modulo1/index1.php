<?php
//echo'teste ';
//Variáveis
$idade = 28; //inteiro
$texto = 'acamelCase'; //string
$boolean = True;
$vazia= null;
$nome = 'Guilherme';
$sobrenome = 'Macieira';

$frase = "$nome $sobrenome tem $idade anos";
echo $frase;


$x = 3;
$y = 4;

$w = $x + $y; //php faz mudandaça de tipo de variavel
echo $w;

$nomecompleto = $nome;
$nomecompleto.= $sobrenome; //usa o valor que já esta na variavel com o outro  
echo $nomecompleto;


?>