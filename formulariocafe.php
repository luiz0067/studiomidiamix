<?php 

// Recebendo os dados passados pela p�gina "orcamento.php"


$recebenome = $_POST["nome"];

$recebeemail = $_POST["email"];

$recebedata  = $_POST["data"];

$recebehora  = $_POST["hora"];




// Definindo os cabe�alhos do e-mail

$headers = "Content-type:text/html; charset=iso-8859-1";




// Vamos definir agora o destinat�rio do email, ou seja, VOC� ou SEU CLIENTE



$para = "wmidiamix@gmail.com";



// Definindo o aspecto da mensagem



$mensagem   .= "<h3>De:</h3> ";

$mensagem  .= $recebenome ;

$mensagem  .= "<h3>E-Mail:</h3>";

$mensagem  .= $recebeemail ;


$mensagem  .= "<h3>Data:</h3>";
$mensagem  .= $recebedata ; 


$mensagem  .= "<h3>Hora:</h3>";

$mensagem  .= $recebehora;





// Enviando a mensagem para o destinat�rio



$envia =  mail($para,"P�gina de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail ser� respondido.



$mensagem2  = "<p>Ol� <strong>" . $recebenome . "</strong>. Agrade�emos sua visita e a oportunidade de recebermos o seu contato. Em at� 48 horas voc� receber� no e-mail fornecido a resposta para sua quest�o.</p>";

$mensagem2 .= "<p>Observa��o - N�o � necess�rio responder esta mensagem.</p>";



$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);





// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a p�gina de contato.

  

echo "Mensagens Recebidas com Sucesso! Confira seu lixo eletr�nico";

echo "<meta http-equiv='refresh' content='2;URL=index.php'>";


