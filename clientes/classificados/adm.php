
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>painel de controle de cadastros</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #999999;
}
a:active {
	text-decoration: none;
}
.style1 {font-size: 9px}
-->
</style></head>

<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td height="50" align="center" bgcolor="#FFFFFF">Configura&ccedil;&otilde;es:</td>
  </tr>

  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="center" bgcolor="#FFFFFF">Lista de Cadastrados </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
			
				  <td width="20">&nbsp;</td>
				  <td><?php
				 if(file_exists("listas/usuarios.txt")){
				 include("listas/usuarios.txt");
				 }
			?></td>
			
        </tr>
      </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p align="center"><span class="style1">
desenvolvido por<br><br><br>
<a href="http://www.studiomidiamix.com.br" target="_blank">
<img src="imagens/midiamix-small.jpg" 
width="120" height="42" border="0" /> </a></span></p>
</body>
</html>
