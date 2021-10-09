<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato</title>
<meta name="description" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações."/>
<meta name="classification" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações."/>
<meta name="keywords" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações. Sites em toledo, empresa de sites toledo, Jhonathan Kern, Wilson Nunes />
Patricia Lunkes, maquete em toledo, design em toledo, 3d em toledo, w10 comunicacao, sites bons "/>
<meta name="author" content="Studio Midia Mix - http://www.studiomidiamix.com.br" />
<meta name="title" content="Studio Midia Mix Comunicação Interativa" />
<meta name="resource-type" content="document" />
<meta name="robots" content="all" />
<meta name="language" content="pt-br" />
<meta name="doc-class" content="completed" />
<meta name="doc-rights" content="Public" />
<meta name="geo.placename" content="Toledo, Parana, Brazil" />
<meta name="geo.region" content="br-pr" />
<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico" />
<link rel="icon" type="image/png" href="imagens/favicon.png" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
<style type="text/css">
body {
	margin-top:0px;
	margin-left:0px;
	margin-bottom:0px;
	margin-right:0px;
	width:100%;
	height:100%;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<center>
<?php
include("topo.php");?>
<body>
<div class="center">
  <div class="titulopagina" style="text-indent:15px;">Contato</div>
  <div id="containerpage">
    <div class="branco" style="height:450px; width:560px; float:left; display:block; overflow:hidden;">
      <div id="containerformulario">
        <form action="formulario.php" method="post">
          Nome:<br>
          <input name="Nome" type="text" class="campocontato" id="nome"  size="20" ><br>
          E-mail:<br>
          <input name="Email" type="text" class="campocontato" id="email"  size="20" ><br>
          Assunto:<br>
          <input name="Assunto" type="text" class="campocontato" id="assunto"  size="20" ><br>
          Mensagem<br>
          <textarea name="Mensagem" rows="8" class="campocontato1" id="mensagem"  style="height:120px;"></textarea><br>
          <input type="submit" name="enviar" value="Enviar" id="Enviar" style="float:left; margin-left:10px;">
          <input type="reset" name="reset" value="Limpar" id="Limpar" style="float:left; margin-left:10px;">
        </form>
      </div>
    </div>
    <div class="branco" style="height:450px; width:300px; float:left; display:block; overflow:hidden;"> 
      <!-- aqui vai o video da animação-->
      <div class="branco" style="height:227px; width:300px; float:left; display:block; overflow:hidden;"> <img src="imagens/zoodycontato.gif" width="300" height="227" border="0" /> </div>
      <!-- fim do video e inicio das informacoes-->
      <div id="informacoes"> <a class="tituloinformacoes">STUDIO MIDIAMIX LTDA</a><br>
        Comunicação Interativa<br>
        <br>
        Largo São Vicente de Paula, 1150<br>
        Sl. 105 - Ed. Atlas<br>
        CEP:85900-215 | Toledo - Pr<br>
        <br>
        <a class="tituloinformacoes">Atendimento:</a><br>
        (45) 3055.4563 | (45) 9801.7557 </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
include("rodape.php");
?>
</center>