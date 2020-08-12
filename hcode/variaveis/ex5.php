<?php
//Aula 15 PHP 7.
//Variáveis pré-definidas (arrays super globais que começam com _ e escritas em maiúsculo) e variáveis de ambiente (globais).
//Com PHP é muti fácil construir logs eficientes.

//URL parser, separa endereço e os valores das variáveis (chave x valor).
#URL - Uniform Resource Locator.
#Uma URL pode possuir várias URI (uniform resource identifier).
// '?' sinal de query string

//Array super global. Lembrando que GET e POST sempre trazem strings.
//Cast é um método que converte o valor do GET ou POST para inteiro.
$nome = (int)$_GET ["a"];
#localhost/~/ex5.php?a=234.
var_dump($nome);
echo "<br>";
//Recebendo mais de uma informação usando o '&'.
#localhost/~/ex5.php?a=234&b=456.

#Ambiente é a máquina do usuário + servidor.
#Sessão é o acesso do cliente ao servidor. Diferente visão de tela baseado no login é Sessão ;) .

//O código abaixo imprimirá o ip do cliente, rodando em localhost retorna ::1.
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "<br>";

$php_self = $_SERVER['SCRIPT_NAME'];
echo $php_self;
echo "<br>";


?>
