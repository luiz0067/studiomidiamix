<?php
error_reporting(0);
ini_set(�display_errors�, 0 );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aviso!</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 9px}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p><?php
  $msg=$_GET["msg"];
  $url=$_GET["volt"];
  if($msg=="id"){
  echo"<b>Usu�rio Inexistente!</b> <br><br><a href=$url>Tente novamente, clique aqui</a>";
  }
  if($msg=="senha"){
  echo"<b>Senha Incorreta!</b> <br><br><a href=$url>Tente novamente, clique aqui</a>";
}
if($msg=="existe"){
  echo"<b>Usu�rio j� existe!</b> <br><br><a href=index.php>Tente novamente, clique aqui</a>";
}
if($msg=="existe_cpf"){
  echo"<b>CPF j� cadastrado, s� � valido um cadastro por pessoa!</b> <br><br><a href=index.php>Voltar</a>";
}
if($msg=="mensagem_null"){
  echo"<b>Escreva sua mensagem !</b> <br><br><a href=index.php>Voltar</a>";
}
if($msg=="ok"){
  echo"<b>Mensagem enviada com sucesso!</b>";
  echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
}
if($msg=="alt"){
  echo"<b>Cadastro alterado com sucesso!</b><br><br> Feche este aviso e depois aperte f5 para ver as altera��es";
}
if($msg=="del"){
  echo"<b>Cadastro deletado com sucesso!</b><br><br> N�o � poss�vel reverter o cadastro, da pr�xima vez que entrar seu cadastro n�o ser� mais v�lido, se quiser logar novamente fa�a outro cadastro";
}
if($msg=="dados"){
  echo"<b>Dados errados!</b><br><br>";
}
if($msg=="saiu"){
  echo"<b>Voc� saiu com sucesso do sistema!</b><br><br>";
}
if($msg=="suasenha"){
include("usuarios/$url.txt");
  echo"Sua senha em nosso sistema � <b>$senha</b><br><br>";
}
  
  
  ?>
</div>
</body>



</html>
