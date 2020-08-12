<p>Tudo o que estiver fora das tags PHP é ignorado pelo interpretador, o que permite arquivos PHP de conteúdo misto.</p>
<?php echo 'Permite que o PHP seja incluído dentro de documentos HTML.'; ?>
<p>Isto também vai ser ignorado pelo PHP em enviado ao navegador.</p>


<?php if ($expression == true): ?>
  Isto irá aparecer se a expressão for verdadeira.
<?php else: ?>
  Pelo visto $expression != true.
<?php endif; ?>
\n
Nesse exemplo o PHP irá escapar os blocos em que a condição não seja satisfeita, mesmo que o trecho de código esteja fora das tags de abertura/fechamento do PHP, pois o interpretador do PHP, irá pular os conteúdos de blocos que não possuem uma condição que não foi satisfeita. 