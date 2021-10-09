<?php include("proteger.php"); seguranca();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P&aacute;gina protegida</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	background-color: #999999;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<table width="100%" border="2" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" align="center"><p>&nbsp;</p>
      <p>Esta &eacute; a p&aacute;gina protegida. no topo do c&oacute;digo fonte tem a seguinte linha:</p>
      <p>&lt;?php include(&quot;proteger.php&quot;); seguranca();?&gt;</p>
    <p>O que faz com que sua p&aacute;gina s&oacute; seja vis&iacute;vel se o usu&aacute;rio estiver logado como um usu&aacute;rio j&aacute; cadastrado. </p>
    <p>Veja no topo direito a barra de recursos, onde &eacute; poss&iacute;vel acessar seus dados e sair do sistema. </p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
