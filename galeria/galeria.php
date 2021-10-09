
<? 
//Inclui o arquivo de conexão com o banco
include "conecta.php" 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Álbum de foto</title>
</head>

<body>
<form method="post" action="galeria_grava.php" enctype="multipart/form-data">
	Imagem: <input name="imagem" type="file" id="imagem" size="40" /><br />
    Legenda: <input name="legenda" type="text" id="legenda" size="40" /><br />
    <input type="submit" name="ok" value="Confirmar" />
</form>
</body>
</html>
