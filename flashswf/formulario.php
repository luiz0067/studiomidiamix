<?php

if (!empty($_GET))

{
/*digite os destinatarios separados por virgula*/
$destinatarios = 'email-de-teste@seu-dominio, email-de-teste-2@outro-dominio';
/*usuario ou nome completo da conta criada em sua hospedagem, como por exemplo teste@seudominio*/
$usuario = 'usuario@seu-dominio';
/*senha da conta de email acima*/
$senha = 'senha-do-usuario';
/*nome do destinatario no qual receberá a mensagem*/
$nomeDestinatario = 'mensagem do site';

$nomeRemetente = $_GET["nome"];
$resposta = $_GET["email"];
$mensagem = nl2br($_GET["mensagem"]);
$assunto = "Formulário de Contato";

/***********************************A PARTIR DAQUI NAO ALTERAR************************************/
foreach ($_GET as $dados['me1'] => $dados['me2'])

{

$dados['me3'][] = '<b>'.$dados['me1'].'</b>: '.$dados['me2'];

}

$dados['me3'] = '<hr><h4>Mensagem do site</h4>'.implode('<br>', $dados['me3']).'<hr>';

$dados['email'] = array('usuario' => $usuario, 'senha' => $senha, 'servidor' => 'smtp.'.substr(strstr($usuario, '@'), 1), 'nomeRemetente' => $nomeRemetente, 'nomeDestinatario' => $nomeDestinatario, 'resposta' => $resposta, 'assunto' => $assunto, 'mensagem' => $dados['me3']);

ini_set('php_flag mail_filter', 0);

$conexao = fsockopen($dados['email']['servidor'], 587, $errno, $errstr, 10);
fgets($conexao, 512);

$dados['destinatarios'] = explode(',', $destinatarios);

foreach ($dados['destinatarios'] as $dados['1'])

{

$dados['destinatarios']['RCPTTO'][] = '< '.$dados['1'].' >';
$dados['destinatarios']['TO'][] = $dados['1'];

}

$dados['cabecalho'] = array('EHLO ' => $dados['email']['servidor'], 'AUTH LOGIN', base64_encode($dados['email']['usuario']), base64_encode($dados['email']['senha']), 'MAIL FROM: ' => '< '.$dados['email']['usuario'].' >', 'RCPT TO:' => $dados['destinatarios']['RCPTTO'], 'DATA', 'MIME-Version: ' => '1.0', 'Content-Type: text/html; charset=iso-8859-1', 'Date: ' => date('r',time()), 'From: ' => array($dados['email']['nomeRemetente'].' ' => '< '.$dados['email']['usuario'].' >'), 'To:' => array($dados['email']['nomeDestinatario'].' ' => $dados['destinatarios']['TO']), 'Reply-To: ' => $dados['email']['resposta'],'Subject: ' => $dados['email']['assunto'], 'mensagem' => $dados['email']['mensagem'], 'QUIT');

foreach ($dados['cabecalho'] as $dados['2'] => $dados['3'])

{

if (is_array($dados['3']))

{

foreach ($dados['3'] as $dados['4'] => $dados['5'])

{

$dados['4'] = empty($dados['4']) ? '' : $dados['4'];
$dados['5'] = empty($dados['5']) ? '' : $dados['5'];

$dados['4'] = is_numeric($dados['4']) ? '' : $dados['4'];

if (is_array($dados['5']))

{

$dados['5'] = "< ".implode(', ', $dados['5'])." >";

}

fwrite($conexao, $dados['2'].$dados['4'].$dados['5']."
", 512).'<br>';
fgets($conexao, 512);

}

}

else

{

$dados['2'] = empty($dados['2']) ? '' : $dados['2'];
$dados['3'] = empty($dados['3']) ? '' : $dados['3'];

$dados['2'] = is_numeric($dados['2']) ? '' : $dados['2'];

if ($dados['2'] == 'Subject: ')

{

fwrite($conexao, $dados['2'].$dados['3']."\r\n", 512).'<br>';
fwrite($conexao, "\r\n", 512).'<br>';
fgets($conexao, 512);

}

elseif ($dados['2'] == 'mensagem')

{

fwrite($conexao, $dados['3']."\r\n.\r\n").'<br>';
fgets($conexao);

}

else

{

fwrite($conexao, $dados['2'].$dados['3']."\r\n", 512).'<br>';
fgets($conexao, 512);

}

}

}

fclose($conexao);

print "&enviado=ok&";

}

?>