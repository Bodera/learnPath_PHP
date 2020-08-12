<?php
//Aula 17 PHP 7. Operadores do PHP.

//Operador de atribuição '='. A sentença À direita será resolvida primeiro e atribuída a variável à esquerda.
$nome = "Rafael";
$numero = 4;

//Operador de concatenação '.'
echo $nome . " Nunes de Brito.". "</br>";

//Operador de atribuição compostos  
echo $numero += 4; echo "</br>"; // $numero = $numero + 4;  // 8
echo $numero -= 2; echo "</br>"; // $numero = $numero - 2;  // 6
echo $numero *= 3; echo "</br>"; // $numero = $numero * 3;  // 18
echo $numero /= 1; echo "</br>"; // $numero = $numero / 1;  // 18
echo $numero %= 1; echo "</br>"; // $numero = $numero % 1;  // Module is 0.
echo $nome .= " está aprendendo PHP 7."; echo "</br>"; //$nome = "Rafael está aprendendo PHP 7".

//Operador de exponenciação '**'
echo 2**11; echo "</br>";// 2048

//Operadores de comparação
var_dump(35 > 9); echo "</br>"; //true

//Operadores de atribuição e operadores de igualdade
$numero33 = 33; var_dump($numero33); echo "</br>"; //Atribuindo 33 à variável $numero33
$numero27 = 27; var_dump($numero27); echo "</br>"; //Atribuindo 27 à variável $numero27
var_dump($numero27 == $numero33); echo "</br>"; //Perguntando se os valores das variáveis são idênticos.
var_dump($numero33 === $numero27); echo "</br>"; //Perguntando se os tipos de dados das variáveis são idênticos. int 36 != int 27

//Operador de negação
var_dump($numero27 != $numero33); echo "</br>"; //Valores são diferentes? true
var_dump($numero27 !== $numero33); echo "</br>"; //Tipo de dados são diferentes? true

//Operador Spaceship compara 2 variáveis. 
var_dump($numero27 <=> $numero33); echo "</br>"; //Se lado esquerdo maio retor 1, se igual retorna 0 e quando menor retorna -1.

//Operador null coalescing
$ncoalx = NULL;
$ncoaly = NULL;
$ncoalz = 19;
echo $ncoalx ?? $ncoaly ?? $ncoalz; echo "</br>";//Retorna o primeiro valor não nulo especificado na sequência.

//Incremento e decremento
echo $numero27++; echo "</br>";//pós-incremento //27
$numero27 = 27;
echo ++$numero27; echo "</br>";//pré-incremento //28
$numero27 = 27;
echo $numero27--; echo "</br>";//pós-decremento //27
$numero27 = 27;
echo --$numero27; echo "</br>";//pré-decremento //26
$numero27 = 27;

//Precedência de operadores
$result = 10 + 3 / 2; //11.5
echo $result; echo "</br>";
$result = (10 + 3) / 2; //6.5
echo $result; echo "</br>";

$result = (10 + 3) / 2 > 5 && 10 + 5 < 3; //Both comparisons need to be true, otherwise returns false
var_dump($result); echo "</br>"; //false
$result = (10 + 3) / 2 > 5 && 10 + 5 > 3; //Both comparisons need to be true, otherwise returns false
var_dump($result); echo "</br>"; //true

$result = (10 + 3) / 2 > 5 || 10 + 5 < 3; //Only one comparison needs to be true, only return false when all is false.
var_dump($result); echo "</br>"; //true
?>
