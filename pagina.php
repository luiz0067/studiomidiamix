<?php

//######### INICIO Pagina��o
        $numreg = 15; // Quantos registros por p�gina vai ser mostrado
        if (!isset($pg)) {
                $pg = 0;
        }
        $inicial = $pg * $numreg;
        
//######### FIM dados Pagina��o
        
        // Faz o Select pegando o registro inicial at� a quantidade de registros para p�gina
        $sql = mysql_query("SELECT * FROM patrocinio LIMIT $inicial, $numreg");

        // Serve para contar quantos registros voc� tem na seua tabela para fazer a pagina��o
        $sql_conta = mysql_query("SELECT imagem * FROM patrocinio");
        
        $quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra pagina��o
        
        include("paginacao.php"); // Chama o arquivo que monta a pagina��o. ex: << anterior 1 2 3 4 5 pr�ximo >>
        
        echo "<br><br>"; // Vai servir s� para dar uma linha de espa�o entre a pagina��o e o conte�do
        
        while ($aux = mysql_fetch_array($sql)) {
                /* Ai o resto � com voces em montar como deve parecer o conte�do */
        }
?>