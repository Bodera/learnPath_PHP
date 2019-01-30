//tag de fechamento isolada = terminar instrução com ;
<?php
    echo 'Isto é um teste';
?>

//quando for apenas 1 linha de código PHP = omite-se o ; ou a tag ?>
<?php echo 'Isto é um teste' ?>

//quando for apenas 1 linha de código PHP = omite-se a tag ?> ou o ; 
<?php echo 'Nós omitimos a última tag de fechamento';

<?php echo 'se você quer servir documentos XHTML ou XML,
                escreva assim'; ?>

2.  Você pode utilizar também a tag curta de echo para <?= 'imprimir isso' ?>.
    Ela sempre está disponível do PHP 5.4.0 em diante, e é equivalente a
    <?php echo 'imprimir isso' ?>.

3.  <? echo 'esse código entre tags curtas só vai funcionar '.
            'se short_open_tag estiver habititado '. 'ou se o PHP foi configurado com a opção --enable-short-tags.' ; ?>


4.  <script language="php">
        echo 'alguns editores (como o FrontPage) não
              suportam processar instruções com tags assim';
    </script>
    Esta sintaxe foi removida no PHP 7.0.0.

5.  <% echo 'Você também pode utilizar tags no estilo ASP'; %>
    <%= $variable; %> é um atalho para <% echo $variable; %>
    Essas duas sintaxes também foram removidas no PHP 7.0.0.