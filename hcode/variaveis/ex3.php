<?php 
//aula 14 PHP 7.

/*
 A conversão de tipos de dados no PHP é automática.
*/

#Cria a variável que armazena uma string.
$nome = "João";
$sobrenome = "Rangel";
#Concatenando os valores em PHP com '.' .
$nomeCompleto = $nome . " " . $sobrenome;

#Imprime o valor da variável na tela.
echo $nomeCompleto;

#Usa a tag HTML <br> para quebra de linha.
echo "<br>";

#O unset é um método que apaga nossa variável da memória. E pode receber mais de uma variável também.
#Você pode comentar a linha de baixo sem problemas, caso faça irá imprimir João.
unset($nome);

#Validação básica, antes de apresentar uma variável, verifique se ele foi pré-definida.
if (isset($nome)) {
    echo $nome;
}

#Dar um echo nessa variável após uso do unset retornará um alerta. 
# echo $nome; Notice: Undefined variable: nome1.

?>