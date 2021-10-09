<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {color: #000099}
a:link {
	color: #999999;
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
.style2 {font-size: 9px}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P&aacute;gina protegida - Desenvolvido por Viagiz.com</title>
<script language="JavaScript" type="text/javascript">
<!--
function ini(){
document.form.id.focus();
}
function veri(objEvent){
keyascii = objEvent.keyCode;
if (keyascii == 32){
return false;
}else{
return true;
}
}
//-->
</script>
</head>
<body onLoad="ini();">
<form action="lembrar.php" method="post" name="form" id="form">
  <table width="300" border="1" align="center" cellpadding="0" cellspacing="0" style="border: dashed; border-color:#000000">
    <tr>
      <td><table width="319" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="100" colspan="2" align="center" valign="middle" bgcolor="#BBDDFF"><strong> Informe os dados abaixo         </strong>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td width="83" align="right" bgcolor="#BBDDFF">Id</td>
          <td width="230" bgcolor="#BBDDFF"><input name="id" type="text" id="id" size="10" onkeypress="return veri(event);" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#BBDDFF">CPF</td>
          <td bgcolor="#BBDDFF"><input name="cpf" type="text" id="cpf" size="15" />
            (s&oacute; n&uacute;meros) </td>
        </tr>
        <tr>
          <td align="right" bgcolor="#BBDDFF">Nascimento</td>
          <td bgcolor="#BBDDFF"><input name="data" type="text" id="data" size="15" /> 
            (00/00/000) </td>
        </tr>
        <tr>
          <td colspan="2" align="right" bgcolor="#BBDDFF"><input name="entrar" type="submit" id="entrar" value="Lembrar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center"><span class="style2"><a href="http://www.viagiz.com/seguranca" target="_blank">Sistema de seguran&ccedil;a desenvolvido por</a> <a href="http://www.viagiz.com" target="_blank">VIAGIZ.COM </a></span></p>
</form>
</body>
</html>
