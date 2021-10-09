<? 
//Inclui o arquivo de conexão com o banco
include "conecta.php" ;
//Consulta no banco de dados
	$galeria = "SELECT * 
				FROM galeria
				ORDER BY idgaleria DESC
				LIMIT 0,30 "; 
	$galeria = mysql_query($galeria) or die("Erro no SQL: ".mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Álbum de foto</title>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</head>

<body>
<? while ($array_galeria = mysql_fetch_array($galeria)) { ?>
	<div>
		<a href="fotos/<? echo $array_galeria[imagem];?>" rel="lightbox[roadtrip]"><img src="fotos/<? echo $array_galeria[imagem];?>" width="150" /></a>
		<p><? echo $array_galeria[legenda]; ?>
	</div>
<? } ?>
</body>
</html>
