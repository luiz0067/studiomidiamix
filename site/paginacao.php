<style type="text/css">
<!--
.pgoff {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #FF0000; text-decoration: none}
a.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #003366; text-decoration: none}
a:hover.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #0066cc; text-decoration:underline}
-->
</style>
<?php

        $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        
        // Verifica se esta na primeira p�gina, se nao estiver ele libera o link para anterior
        if ( $pg > 0) {
                echo "<a href=".$PHP_SELF."?pg=".($pg-1) ."class=pg><b>&laquo; anterior</b></a>";
        } else {
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
        }
        // Aqui come�a a altera��o
        // faz o controle da quantidade de paginas ir� mostrar em n�meros na pagina��o
        if (($pg - 3) < 1 ){
        $ant = 1;
        } else {
        $ant = $pg - 3;
        }
        if (($pg + 6) > $quant_pg ) {
        $pos = $quant_pg;
        } else {
        $pos = $pg + 6;
        }
        
        // Faz aparecer os numeros das p�gina entre o ANTERIOR e PROXIMO
        for($i_pg=$ant;$i_pg < $pos;$i_pg++) {
        // Aqui termina a altera��o
                // Verifica se a p�gina que o navegante esta e retira o link do n�mero para identificar visualmente
                if ($pg == ($i_pg-1)) {
                        echo "&nbsp;<span class=pgoff>[$i_pg]</span>&nbsp;";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";
                }
        }
        
        // Verifica se esta na ultima p�gina, se nao estiver ele libera o link para pr�xima
        if (($pg+2) < $quant_pg) {
                echo "<a href=".$PHP_SELF."?pg=".($pg+1)." class=pg><b>pr�ximo &raquo;</b></a>";
        } else {
                echo "<font color=#CCCCCC>pr�ximo &raquo;</font>";
        }
?>