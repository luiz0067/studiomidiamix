<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studio Midia Mix - Mídias interativas</title>
<meta name="description" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações.">
<meta name="classification" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações.">
<meta name="keywords" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações. Sites em toledo, empresa de sites toledo, Jhonathan Kern, Wilson Nunes
Patricia Lunkes, maquete em toledo, design em toledo, 3d em toledo, w10 comunicacao, sites bons ">
<meta name="author" content="Studio Midia Mix - http://www.studiomidiamix.com.br">
<meta name="title" content="Studio Midia Mix Comunicação Interativa">
<meta name="resource-type" content="document">
<meta name="robots" content="all">
<meta name="language" content="pt-br">
<meta name="doc-class" content="completed">
<meta name="doc-rights" content="Public">
<meta name="geo.placename" content="Toledo, Parana, Brazil">
<meta name="geo.region" content="br-pr">
<meta name="viewport" content="width=900,initial-scale=1, minimum-scale=1, maximum-scale=1.5">
<link rel="shortcut icon" href="../imagens/favicon.ico">
<link rel="icon" type="image/png" href="../imagens/favicon.ico">
<style type="text/css">
body {
	margin-top:0px;
	margin-left:0px;
	margin-bottom:0px;
	margin-right:0px;
	width:100%;
	height:100%;
}
.item img {

	 border-color:#CCC;
		border: none;
		-moz-border-radius-topleft:6px;
				-moz-border-radius-topright:6px;
				-moz-border-radius-bottomleft:6px;
				-moz-border-radius-bottomright:6px;
				
				-webkit-border-top-left-radius:6px;
				-webkit-border-top-right-radius:6px;
				-webkit-border-bottom-left-radius:6px;
				-webkit-border-bottom-right-radius:6px;
				
				-khtml-border-top-left-radius:6px;
				-khtml-border-top-right-radius:6px;
				-khtml-border-bottom-left-radius:6px;					
				-khtml-border-bottom-right-radius:6px;					
				
				border-top-left-radius:6px;
				border-top-right-radius:6px;
				border-bottom-left-radius:6px;
				border-bottom-right-radius:6px;
				border-radius: 6px 6px 6px 6px; 
}
	
}
.item.first {
	clear: left;
	margin-left: 0;
}
.item {
	border: none;
	width:160px;
	height:109px;
	float:left;
	display:inline;
	overflow:hidden;
	border-width:1px;
	border-style:solid;
	 border-color:#CCC;
	 margin-left:5px;
	 margin-right:5px;
	 margin-top:9px;
	 margin-bottom:10px; 
-moz-border-radius-topleft:6px;
				-moz-border-radius-topright:6px;
				-moz-border-radius-bottomleft:6px;
				-moz-border-radius-bottomright:6px;
				
				-webkit-border-top-left-radius:6px;
				-webkit-border-top-right-radius:6px;
				-webkit-border-bottom-left-radius:6px;
				-webkit-border-bottom-right-radius:6px;
				
				-khtml-border-top-left-radius:6px;
				-khtml-border-top-right-radius:6px;
				-khtml-border-bottom-left-radius:6px;					
				-khtml-border-bottom-right-radius:6px;					
				
				border-top-left-radius:6px;
				border-top-right-radius:6px;
				border-bottom-left-radius:6px;
				border-bottom-right-radius:6px;
				border-radius: 6px 6px 6px 6px; 
}

.item img {
	border: none;
	 border-color:#CCC;

	width:160px;
	height:109px;
	float:left;
	display:inline;
	overflow:hidden;
	border-width:1px;
	border-style:solid;
	
				

}
</style>
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="lightbox/js/prototype.js" type="text/javascript"></script>
	<script src="lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="lightbox/js/lightbox.js" type="text/javascript"></script>
	<script src="lightbox/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="lightbox/js/lightbox.js" type="text/javascript"></script>
	<script src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="lightbox/js/jquery.smooth-scroll.min.js"></script>
	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	<script src="jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	
	
</script>
</head>

<center>

<?php include("topo.php"); ?>
<?php include("projetospage.php"); ?>
<body>
	<div class="center">
    <div id="containerpage">
    	<!-- primeira linha de fotos -->
        <div class="linhaspage">
        	<div class="linhaspage">
        		<?php
		include("conecta.php");
						//conexao com seu bd
					error_reporting(0);
ini_set(“display_errors”, 0 );
						$pg = $_GET['pg'];
						if (!isset($pg))
						{
						$pg = 1;
						}
						$sql = "SELECT codigo,imagem,comentario FROM maquete"; //altere (maquete) para o nome de sua tabela.
						$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta!!!");
						$lpp = 15; // defina o número de resultados por página.
						$total = mysql_num_rows($resultado);
						if ($total <= $lpp)
						{    
						$total_paginas = 1;
						} else {
						$total_paginas = ceil($total/$lpp);
						}
						$inicio = ($pg - 1) * $lpp;
						$final = $inicio + $lpp - 1;
						$ponteiro = 0;
						$i = "1";
						$colunas="5"; // defina o número de colunas desejado.
						$total="1";
						$sql = "SELECT codigo,imagem,comentario FROM maquete LIMIT $inicio, $lpp"; //altere (maquete) para o nome de sua tabela.
						$result = mysql_query($sql) or die ("Não foi possível realizar a consulta!!!");

						while ($row = mysql_fetch_assoc($result)){	
						?>
						
							<div class="item "  style="display:block; 	width:160px; height:109px; ">
								
								<a href="./imagem/<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]" title="<?php echo $row['comentario']?>" >
								
								<img src="./imagem/<?php echo $row['imagem'];?>"  >
								</a>
								</div>	
						<?php
						}
						?>
						<div class="center" style="height:20px;"></div>
						<div id="paginacao" class="center">
						<?php
						if(!$total==$colunas){
						print"<table>";
						} else {
						print"</table>";
						}
						if ($pg == 1) {    
						echo "<a class='menurodape'>";    
						echo "Anterior |";    
						echo "</a>";
						}
						else
						{    
						echo "<a class='menurodape'>";    
						echo "<a class='menurodape' href=\"maquetepage.php?pg=".($pg - 1)."\" targe=\"_self\">Anterior</a> |"; // troque (pagina) pela link de sua página.    
						echo "</a>";
						}
						$i = 1;
						while ($i <= $total_paginas) {    
						if ($i == $pg)
						{        
						echo "<strong class='menurodape'><a class='menurodape'>";        
						echo " <b>|<u>$i</u>|</b> ";        
						echo "</a></strong>";    
						}
						else
						{
						echo "<strong class='menurodape'><a class='menurodape'>";        
						echo " <a class='menurodape' href=\"maquetepage.php?pg=".$i."\" target=\"_self\">".$i."</a> "; // troque (pagina) pela link de sua página.        
						echo "</a></strong>";    
						}
						$i = $i + 1;
						}
						if ($pg == $total_paginas)
						{    
						echo "<a class='menurodape'>";   
						echo "| Próxima\n";    
						echo "</a>";
						}
						else
						{    
						echo "<a class='menurodape'>";    
						echo "| <a class='menurodape' href=\"maquetepage.php?pg=".($pg + 1)."\" targe=\"_self\">Próxima</a>\n"; // troque (pagina) pela link de sua página.    
						echo "</a>"; }      
						
		?>
		


    </div>
</div>
</div>
</div>
</body>
<div class="center" style="height:47px;"></div>

<?php
include("rodape.php");
?>
</center>
</html>