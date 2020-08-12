<?php
//Aula 16 PHP 7.
//(pode ser uma variável local ou uma variável de sessão).
//Arrays super globais são idependentes de escopo.

//Aqui é um escopo.
$nome = "Rafael";

function teste() {
    #Escopo de variável é definido por {}
    // $nome; //vai retornar um erro, $nome não foi definida neste escopo.
    global $nome; //vai rodar, instruímos o interpretador com a palavra reservada global que $nome neste escopo é idêntico a variável $nome declarada globalmente.
    echo '$nome = '.$nome.". It's a global variable in the scope of function test().";
    echo "<br>";
}


function teste2() {
    //Aqui é outro escopo.
    $nome = "Mohammed";
    echo '$nome = ' . $nome . ". It's a variable in the scope of function teste2()";
}

teste();
teste2();

//Variáveis super globais terão sem o mesmo valor idependente do escopo em que sejam utilizadas.
?>
