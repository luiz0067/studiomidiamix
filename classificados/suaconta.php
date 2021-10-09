<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ver Dados</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-size: 9px}
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
</style>
<script language="javascript">
function WinOpen(pagina,janela,opcoes){
	window.open(pagina,janela,opcoes);
}
  </script>
</head>

<body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td height="100" colspan="2" align="center" bgcolor="#FFFFFF"><strong>Informa&ccedil;&otilde;es de 
      <?php
	$id=$_GET["id"];
	@include("usuarios/$id.txt");
echo "$id";
	?>
    </strong></td>
  </tr>
  <tr>
    <td width="140" align="left" bgcolor="#FFFFFF">Id</td>
    <td width="254" align="left" bgcolor="#FFFFFF">
	<?php
echo "$id";
	?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Senha</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$senha";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Nome Completo </td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$nome";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">CPF</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$cpf";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Data Nascimento </td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$data";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Telefone</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$fone";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Rua</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$rua";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Número</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$numero";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Bairro</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$bairro";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Cidade</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$cidade";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Cadastro</td>
    <td align="left" bgcolor="#FFFFFF"><?php echo"$cad";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Mensagem1: </td><br><br>
    <td align="left" WIDTH="50px" HEIGHT="150"  bgcolor="#FFFFFF"><?php echo"$mensagem1";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">Mensagem2: </td><br><br>
    <td align="left" WIDTH="50px" HEIGHT="150" bgcolor="#FFFFFF"><?php echo"$mensagem2";  ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right" bgcolor="#FFFFFF"><a href="javascript:WinOpen('alterar.php?id=<?php echo"$id"; ?>','Popup','width=500,height=400,top=100,left=250');">Alterar dados</a> </td>
  </tr>
</table>
<p align="center"><span class="style1">
desenvolvido por<br><br><br>
<a href="http://www.studiomidiamix.com.br" target="_blank">
<img src="imagens/midiamix-small.jpg" 
width="120" height="42" border="0" /> </a></span></p>
</body>

</html>
