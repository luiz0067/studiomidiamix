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


<?php 

// Recebendo os dados passados pela página "orcamento.php"

$recebenome = $_POST["nome"];

$recebemail = $_POST["email"];

$recebetelefone = $_POST["telefone"];

$recebecidade = $_POST["cidade"];

$recebemensagem = $_POST["mensagem"];

$recebeeducacao_infantil = $_POST["educacao_infantil"];

$recebeeducacao_fundamentalI = $_POST["educacao_fundamentalI"];

$recebeeducacao_fundamentalII = $_POST["educacao_fundamentalII"];

$recebeensino_medio = $_POST["ensino_medio"];

$recebepre_vestibular = $_POST["pre_vestibular"];

// Definindo os cabeçalhos do e-mail

$headers = "Content-type:text/html; charset=UTF-8";




// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE

$para = "coordenacaopv@alfatoledo.com.br";



// Definindo o aspecto da mensagem





$mensagem   .= "<h3>NOME:</h3> ";
$mensagem  .= $recebenome ;

$mensagem   .= "<h3>E-MAIL:</h3> ";
$mensagem  .= $recebemail ;

$mensagem   .= "<h3>TELEFONE:</h3> ";
$mensagem  .= $recebetelefone ;

$mensagem   .= "<h3>CIDADE:</h3> ";
$mensagem  .= $recebecidade ;

$mensagem   .= "<h3>MENSAGEM:</h3> ";
$mensagem  .= $recebemensagem ;



$mensagem   .= "<h3>DESEJO MAIS INFORMACOES SOBRE:</h3> <BR><BR>";

$mensagem   .= "<h3>EDUCACAO INFANTIL</h3> ";
$mensagem  .= $recebeeducacao_infantil ;

$mensagem   .= "<h3>EDUCACAO FUNDAMENTAL I</h3> ";
$mensagem  .= $recebeeducacao_fundamentalI ;

$mensagem   .= "<h3>EDUCACAO FUNDAMENTAL II</h3> ";
$mensagem  .= $educacao_fundamentalII ;

$mensagem   .= "<h3>ENSINO MEDIO</h3> ";
$mensagem  .= $recebeensino_medio ;

$mensagem   .= "<h3>PRE-VESTIBULAR</h3> ";
$mensagem  .= $recebepre_vestibular ;


// Enviando a mensagem para o destinatário



$envia =  mail($para,"P�gina de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.



$mensagem2  = "<p>Ol� <strong>" . $recebenome . "</strong>. </p>";

$mensagem2 .= "<p>Observa��o - N�o � necess�rio responder esta mensagem.</p>";



$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);





// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.

  

echo "Mensagens enviada com Sucesso! Confira seu lixo eletr�nico";


