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
echo 2**8; // 256

//Operadores de comparação
var_dump(35 < 9); echo "</br>";

//minuto 11:11


?>
