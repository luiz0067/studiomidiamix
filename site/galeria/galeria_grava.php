<?
// Incluir o arquivo conecta.php que faz a conexão com o banco de dados
include "conecta.php" ;

//Dou um Extract e jogo o valor dentro da variavel $arq1
  extract($_POST);
  $arq1=$_FILES["imagem"]["name"];
//Seleciona a ultima entrada do banco na tabela galeria
  $s_trab = "SELECT Max(idgaleria) ult_id
                 FROM galeria";
  $t_trab = mysql_query($s_trab) or die(mysql_error());  
  $trab   = mysql_fetch_array($t_trab);
//Dou um nome para a foto que será o ultimo id + 1
  $nome = $trab[ult_id] + 1;
//crio um nome único para a imagem
  $arq1 = $nome.$_FILES['imagem']['name'];
//cria um nome temporário para mover o arquivo
  $arq1_tmp = $_FILES['imagem']['tmp_name'];
//Comando para mover o arquivo para o doretório especificado, aplicando o nome definido anteriormente
  move_uploaded_file($arq1_tmp,"fotos/".$arq1);

//Gravando o nome do arquivo e a legenda na tabela do banco de dados  
	$i_galeria = "INSERT INTO galeria (legenda, imagem) VALUES ('$_POST[legenda]','$arq1')";
    mysql_query($i_galeria) or die (mysql_error());

//Retorno a página de formulário
  header('Location:galeria.php');
?>