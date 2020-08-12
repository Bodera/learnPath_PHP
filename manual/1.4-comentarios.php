<?php
//O PHP suporta comentários no estilo 'C', 'C++' e do Unix shell (estilo Perl). Por exemplo: 
    echo 'Isto é um teste'; // Estilo de comentário de uma linha em  c++
    /* Este é um comentário de múltiplas linhas
       ainda outra linha de comentário */
    echo 'Isto é ainda outro teste';
    echo 'Um teste final'; # Este é um comentário de uma linha no estilo shell.
?>
    <pre> o código HTML após // ... ?> ou # ... ?> SERÁ impresso: ?> interrompe o modo PHP e retorna para o modo HTML, e // ou # não podem influenciar isto.</pre>


<?php
 /*
    echo 'Isto é um teste'; /* Este comentário irá causar um problema */
 */
?>


<h1>Isto é um <?php # echo 'simples';?> exemplo.</h1>
<p>O cabeçalho acima irá dizer 'Isto é um exemplo'.</p>

It is worth mentioning that, HTML comments have no meaning in PHP parser. So,
<!-- comment
<?php echo some_function(); ?>
-->
WILL execute some_function() and echo result inside HTML comment.


This is a documentation reference very clear that I like when reading the PHP documentation for this class. https://www.phpdoc.org/
<?php

//======================================================================
// CATEGORY LARGE FONT
//======================================================================

//-----------------------------------------------------
// Sub-Category Smaller Font
//-----------------------------------------------------

/* Title Here Notice the First Letters are Capitalized */

# Option 1
# Option 2
# Option 3

/*
* This is a detailed explanation
* of something that should require
* several paragraphs of information.
*/

// This is a single line quote.
?>