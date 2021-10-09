<BR><BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR><BR><BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


<?php 

// Recebendo os dados passados pela p√°gina "orcamento.php"

$recebenome = $_POST["nome"];

$recebedata = $_POST["data"];

$recebesexo = $_POST["sexo"];

$recebecolegio = $_POST["colegio"];

$recebeserie = $_POST["serie"];

$recebeendereco = $_POST["endereco"];

$recebenumero = $_POST["numero"];

$recebebairro = $_POST["bairro"];

$recebecidade = $_POST["cidade"];

$recebeestado = $_POST["estado"];

$recebecep = $_POST["cep"];

$receberg = $_POST["rg"];

$recebetelefone = $_POST["telefone"];

$recebecelular = $_POST["celular"];

$recebemail = $_POST["email"];

$recebeconfirmar = $_POST["confirmar"];

$recebeindicacao = $_POST["indicacao"];

$receberegulamentolido = $_POST["regulamentolido"];


// Definindo os cabe√ßalhos do e-mail

$headers = "Content-type:text/html; charset=UTF-8";




// Vamos definir agora o destinat√°rio do email, ou seja, VOC√ä ou SEU CLIENTE

$para = "concurso@alfatoledo.com.br";



// Definindo o aspecto da mensagem





$mensagem   .= "<h3>NOME:</h3> ";
$mensagem  .= $recebenome ;

$mensagem   .= "<h3>DATA:</h3> ";
$mensagem  .= $recebedata ;

$mensagem   .= "<h3>SEXO:</h3> ";
$mensagem  .= $recebesexo ;

$mensagem   .= "<h3>COLEGIO:</h3> ";
$mensagem  .= $recebecolegio ;

$mensagem   .= "<h3>SERIE:</h3> ";
$mensagem  .= $recebeserie ;

$mensagem   .= "<h3>ENDERECO:</h3> ";
$mensagem  .= $recebeendereco ;

$mensagem   .= "<h3>NUMERO:</h3> ";
$mensagem  .= $recebenumero ;

$mensagem   .= "<h3>BAIRRO:</h3> ";
$mensagem  .= $recebebairro ;

$mensagem   .= "<h3>CIDADE:</h3> ";
$mensagem  .= $recebecidade ;

$mensagem   .= "<h3>ESTADO:</h3> ";
$mensagem  .= $recebeestado ;

$mensagem   .= "<h3>CEP:</h3> ";
$mensagem  .= $recebecep ;

$mensagem   .= "<h3>RG:</h3> ";
$mensagem  .= $receberg ;

$mensagem   .= "<h3>TELEFONE:</h3> ";
$mensagem  .= $recebetelefone ;

$mensagem   .= "<h3>CELULAR:</h3> ";
$mensagem  .= $recebecelular ;

$mensagem   .= "<h3>E-MAIL:</h3> ";
$mensagem  .= $recebemail ;

$mensagem   .= "<h3>CONFIRMAR:</h3> ";
$mensagem  .= $recebeconfirmar ;

$mensagem   .= "<h3>INDICACAO:</h3> ";
$mensagem  .= $recebeindicacao ;

$mensagem   .= "<h3>REGULAMENTO:</h3> ";
$mensagem  .= $receberegulamentolido ;



// Enviando a mensagem para o destinat√°rio



$envia =  mail($para,"P·gina de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail ser√° respondido.



$mensagem2  = "<p>Ol· <strong>" . $recebenome . "</strong>. </p>";

$mensagem2 .= "<p>ObservaÁ„o - N„o È necess·rio responder esta mensagem.</p>";



$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);





// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a p√°gina de contato.

  

echo "Mensagens enviada com Sucesso! Confira seu lixo eletrÙnico";

echo "<meta http-equiv='refresh' content='2;URL=http://www.studiomidiamix.com.br/concurso/concurso_de_bolsa.php'>";

