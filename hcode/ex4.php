<?php

//Aula 14 PHP 7.
//Tipos de dados no PHP: básicos (int, float, string, boolean), compostos (array e objetos) e especiais(resource, null).

/*
    Declarando variáveis básicas.
*/
//Strings.
$nome = "Hcode";                #aspas duplas.
$nome = 'www.hcode.com.br';     #aspas simples.
//Inteiro.
$ano = 1999;
//Float.
$salario = 5500.98;
//Booleano.
$bloqueado = false;

/*
    Declarandos variáveis compostas.
*/
//Array.
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];
echo "<br>";
//Objeto.
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br>";

/*
    Declarando variáveis especiais.
*/
//Resource.
$arquivo = fopen("ex4.php", "r");
var_dump($arquivo);
echo "<br>";
//Nulo.
$nulo = null;   #Ausência de valor.
$vazio = "";    #É iniciada, já reserva espaço na memória mesmo sem informação.
?>