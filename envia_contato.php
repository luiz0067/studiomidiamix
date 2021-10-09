<?php


// Recebendo os dados passados pela p√°gina "orcamento.php"

$recebenome = $_POST["nome"];

$recebemail = $_POST["email"];

$recebedata = $_POST["data"];

$recebehora = $_POST["hora"];



// Definindo os cabe√ßalhos do e-mail

$headers = "Content-type:text/html; charset=UTF-8";




// Vamos definir agora o destinat√°rio do email, ou seja, VOC√ä ou SEU CLIENTE

$para = "wmidiamix@gmail.com";



// Definindo o aspecto da mensagem



$mensagem   .= '<div style="background-image:url(http://imageshack.us/a/img401/827/teste.png); background-repeat:no-repeat;">';
$mensagem   .= "<h3>NOME:</h3> ";
$mensagem  .= $recebenome ;

$mensagem   .= "<h3>E-MAIL:</h3> ";
$mensagem  .= $recebemail ;

$mensagem   .= "<h3>TELEFONE:</h3> ";
$mensagem  .= $recebedata ;

$mensagem   .= "<h3>CIDADE:</h3> ";
$mensagem  .= $recebehora ;

$mensagem   .= '</div>';



// Enviando a mensagem para o destinat√°rio



$envia =  mail($para,"P·gina de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail ser√° respondido.



$mensagem2  = "<p>Ol· <strong>" . $recebenome . "</strong>. </p>";

$mensagem2 .= "<p>ObservaÁ„o - N„o È necess·rio responder esta mensagem.</p>";



$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);





// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a p√°gina de contato.

  

echo "Mensagens enviada com Sucesso! Confira seu lixo eletrÙnico";

echo "<script>location.href='index.php'</script>";

?>