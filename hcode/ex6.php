<?php
//Aula 16 PHP 7.
//Escopo de variável é definido pelas {}, (variável local, variável de sessão).
//Arrays super globais são idependentes de escopo.

//Aqui é um escopo.
$nome = "Glaucio";

//Aqui também é um escopo. Mas o escopo da variável nome está fora daqui e vai dar erro.
function teste() {
    #
    global $nome;
    echo $nome.",";
    echo "<br>";
}

//Aqui é outro escopo.
function teste2() {
    $nome = "João";
    echo "Vira " . $nome . " agora no teste2.";
}

teste();
teste2();


?>
