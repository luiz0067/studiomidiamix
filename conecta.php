	<?php
	$host		=	"mysql.studiomidiamix.com.br";
	$login		=	"studiomidiamix";
	$password	=	"profeta";
	$base_dados	=	"studiomidiamix";

if (!$link = mysql_connect($host, $login, $password)) {
    echo 'N�o foi poss�vel conectar ao mysql';
    exit;
}
if (!mysql_select_db($base_dados, $link)) {
    echo 'N�o foi poss�vel selecionar o banco de dados';
    exit;
}
?>