<?php
	$host		=	"localhost";
	$login		=	"root";
	$password	=	"";
	$base_dados	=	"midiamix";

if (!$link = mysql_connect($host, $login, $password)) {
    echo 'N�o foi poss�vel conectar ao mysql';
    exit;
}
if (!mysql_select_db($base_dados, $link)) {
    echo 'N�o foi poss�vel selecionar o banco de dados';
    exit;
}
?>