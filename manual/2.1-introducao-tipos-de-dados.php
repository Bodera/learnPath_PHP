<p>O PHP suporta 8 tipos de dados:</p>
<ul>
    <li>Escalares
        <ul>
            <li>booleano</li>
            <li>inteiro</li>
            <li>float</li>
            <li>string</li>
        </ul>
    </li>
    <li>Compostos
        <ul>
            <li>array</li>
            <li>object</li>
            <li>callable</li>
        </ul>    
    </li>
    <li>Especiais
        <ul>
            <li>resource</li>
            <li>NULL</li>
        </ul>
    </li>
    <li><s>Pseudo-tipos</s>
        <ul>
            <li><s>mixed</s></li>
            <li><s>number</s></li>
            <li><s>callback</s></li>
            <li><s>void</s></li>
            <li><s>Pseudo-variável</s> $...</li>
        </ul>
    </li>
</ul>

<cite><pre>     Para checar o tipo e valor de uma expressão, utilize a função var_dump().

      Para ter uma representação legível de um tipo para depuração, use a função gettype(). 

        Para verificar por um certo tipo, não use gettype(), mas sim as funções is_<em>tipo</em>. Alguns exemplos: </pre></cite>


<?php
$a_bool = TRUE;   // um booleano
$a_str  = "foo";  // uma string
$a_str2 = 'foo';  // uma string
$an_int = 12;     // um inteiro

echo gettype($a_bool); // mostra:  boolean
echo "<br/>"; // break a line
echo gettype($a_str);  // mostra:  string
echo "<br/>"; 

// Se ele é um inteiro, incrementa-o com quatro
if (is_int($an_int)) {
    $an_int += 4;
    var_dump($an_int);
}

// Se $bool é uma string, mostre-a
// (não imprime nada)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>

<p>Para forçar a conversão de uma variável para um certo tipo, converta a variável ou use a função settype() nela.<p>