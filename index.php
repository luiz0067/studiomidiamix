<?php
	include('./adm/conecta.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studio Midia Mix - Comunicação Interativa - Agência Web </title>
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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<center>
<?php include("topo.php");?>
<body onLoad="MM_preloadImages('imagens/destaque-inicio/1.jpg','imagens/destaque-inicio/2a.jpg','imagens/destaque-inicio/3a.jpg','imagens/destaque-inicio/4a.jpg','imagens/destaque-inicio/5a.jpg')">
<!-- inicio da div center, todo o conteudo esta aqui dentro-->
<div class="center" style="height:700px;"> 
  <!-- banner flash que roda do meio-->
<div class="branco" style="width:900px; height:444px; display:block; overflow:hidden;">
 <iframe name="flashmeio" width="900" height="444" frameborder="0" hspace="0" vspace="0" scrolling="no" src="./slide/demo/slide.php"></iframe>

</div>  
<!--fim do banner flash que roda do meio--> 
  <!--inicio da div titulo "projetos recentes"-->
   <?php include("recentes.php");?> 
  <!--fim do conteudo de "projetos recentes"-->
  <div class="center" style="height:47px;"></div>
</div>
<!-- fim da div center, todo o conteudo esta aqui dentro-->
</div>
<!----------------------------------------------------fim da div de conteudo--------------------------------------------------------------------->
</body>
</html>
<?php
include("rodape.php");
?>
</center>
