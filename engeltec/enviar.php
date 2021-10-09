<?php 

// Recebendo os dados passados pela página "contato.php"


$recebenome = $_POST["nome"];

$recebemail = $_POST["email"];

$recebecidade  = $_POST["fone"];

$recebeassunto  = $_POST["estado"];

$recebefone  = $_POST["cidade"];

$recebeestado  = $_POST["assunto"];

$recebemsg  = $_POST["mensagem"];

// Definindo os cabeçalhos do e-mail

$headers = "Content-type:text/html; charset=iso-8859-1";




// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE



$para = "maqsoft@maqsoft.com.br";



// Definindo o aspecto da mensagem



$mensagem   = "<h3>De:</h3> ";

$mensagem  .= $recebenome ;

$mensagem  .= "<h3>Assunto:</h3>";

$mensagem  .= $recebeassunto ;

$mensagem  .= "<h3>E-Mail:</h3>";

$mensagem  .= $recebemail ;

$mensagem  .= "<h3>Telefone</h3>";

$mensagem  .= $recebefone ; 

$mensagem  .= "<h3>Cidade</h3>";

$mensagem  .= $recebecidade ; 

$mensagem  .= "<h3>Mensagem</h3>";

$mensagem  .= $recebeestado ;

$mensagem  .= "<h3>Estado</h3>";

$mensagem  .= "<p>";

$mensagem  .= $recebemsg;

$mensagem  .= "</p>";



// Enviando a mensagem para o destinatário



$envia =  mail($para,"Página de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.



$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>. Agradeçemos sua visita e a oportunidade de recebermos o seu contato. Em até 48 horas você receberá no e-mail fornecido a resposta para sua questão.</p>";

$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";



$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);





// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.

  

echo "Mensagens Recebidas com Sucesso!";

echo "<meta http-equiv='refresh' content='2;?pg=contato'>";

