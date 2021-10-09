<?php
function  contarArquivos($pasta){
	$handle = opendir($pasta);
	$files = 0;
	while (false !== ($file = readdir($handle)))
	{
		if (
			(
				!is_dir($pasta . $file)
			)
		) {
			$files++;
		}
	}
	closedir($handle); 
	return $files;
}
function sonumeros($texto){
	$acc="";
	for($i=0;$i<strlen($texto);$i++){
		if (
			($texto[$i]=="0")
			||($texto[$i]=="1")
			||($texto[$i]=="2")
			||($texto[$i]=="3")
			||($texto[$i]=="4")
			||($texto[$i]=="5")
			||($texto[$i]=="6")
			||($texto[$i]=="7")
			||($texto[$i]=="8")
			||($texto[$i]=="9")
		){
			$acc.=$texto[$i];
		}
	}
	return $acc;
}
function validaCPF($cpf){	 // Verifiva se o n�mero digitado cont�m todos os digitos
    $cpf = sonumeros($cpf);
	// Verifica se nenhuma das sequ�ncias abaixo foi digitada, caso seja, retorna falso
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
	{
		return false;
    }
	else
	{   // Calcula os n�meros para verificar se o CPF � verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
}
if (
		((isset($_POST["cadatrar"]))&&($_POST["cadatrar"]=="Enviar"))
		&&
		((isset($_POST["cpf"]))&&(validaCPF($_POST["cpf"])))
	){
	// Recebendo os dados passados pela p�gina "orcamento.php"
	$recebenome = $_POST["nome"];
	$recebeemail = $_POST["email"];
	$recebecpf = $_POST["cpf"];
	$receberua = $_POST["rua"];
	$recebenumero  = $_POST["numero"];
	$recebebairro  = $_POST["bairro"];
	$recebecidade  = $_POST["cidade"];
	$recebefone  = $_POST["fone"];
	$recebemensagem1  = $_POST["mensagem1"];
	$recebemensagem2  = $_POST["mensagem2"];

	// Definindo os cabe�alhos do e-mail

	$headers = "Content-type:text/html; charset=iso-8859-1";
	// Vamos definir agora o destinat�rio do email, ou seja, VOC� ou SEU CLIENTE
	$para = "patricia_lunkes@hotmail.com";
	// Definindo o aspecto da mensagem
	$mensagem   = "<h3>De:</h3> ";
	$mensagem  .= $recebenome ;
	$mensagem  .= "<h3>E-Mail:</h3>";
	$mensagem  .= $recebeemail ;
	$mensagem  .= "<h3>CPF:</h3>";
	$mensagem  .= $recebecpf ;
	$mensagem  .= "<h3>Rua:</h3>";
	$mensagem  .= $receberua ;
	$mensagem  .= "<h3>N�mero:</h3>";
	$mensagem  .= $recebenumero ;
	$mensagem  .= "<h3>Bairro:</h3>";
	$mensagem  .= $recebebairro ;
	$mensagem  .= "<h3>Cidade:</h3>";
	$mensagem  .= $recebecidade ;
	$mensagem  .= "<h3>fone:</h3>";
	$mensagem  .= $recebefone ;
	
	$mensagem1=		$mensagem."<h3>1� Mensagem:</h3>".$recebemensagem1;
	$mensagem2=		$mensagem."<h3>2� Mensagem:</h3>".$recebemensagem2;
	$mensagem_total=$mensagem."<h3>1� Mensagem:</h3>".$recebemensagem1."<h3>2� Mensagem:</h3>".$recebemensagem2;

	$envia =  mail($para,"P�gina de Contato do Site",$mensagem_total,$headers);
	// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail ser� respondido.
	$mensagem_destinatario  = "<p>Ol� <strong>" . $recebenome . "</strong>. Agrade�emos sua participa��o e a oportunidade de recebermos o seu contato.</p>";
	$mensagem_destinatario .= "<p>Observa��o - N�o � necess�rio responder esta mensagem.</p>";
	$envia =  mail($recebeemail,"Sua mensagem foi recebida!",$mensagem_destinatario,$headers);

	$id=$_POST["id"];
	$senha=$_POST["senha"];
	$nome=$_POST["nome"];
	$cpf=$_POST["cpf"];
	$data=$_POST["data"];
	$fone=$_POST["fone"];
	$letr=$_POST["letra"];
	$cad= date("d/m/Y");


	$letra= strtoupper("$letr"); // transforma a letra da busca alfabetica em maiuscula

	if(file_exists("usuarios/$id.txt")){                         //Se o usuario ja existir n�o cadastra
		echo "<script>location.href='msg.php?msg=existe&volt=cadastro.php'</script>";
	}
	else{
		if($id==""){
			echo "<script>location.href='cadastro.php';alert('Escreva seu nome de usu�rio!');</script>";
		}
		else{
			$salvar= "
			<?php
			\$senha=\"$senha\";
			\$nome=\"$nome\";
			\$cpf=\"$cpf\";
			\$data=\"$data\";
			\$mensagem1=\"$recebemensagem1\";
			\$mensagem2=\"$recebemensagem2\";
			\$fone=\"$fone\";
			\$cad=\"$cad\";
			?>";
			$abreid= fopen("./adm/usuarios/".$id.".txt","w");  //cadastrando o usuario
			fwrite($abreid,"$salvar");
			fclose($abreid);
			if(isset($recebemensagem2)){
				$salvar= "
				<?php
				\$senha=\"$senha\";
				\$nome=\"$nome\";
				\$cpf=\"$cpf\";
				\$data=\"$data\";
				\$mensagem1=\"$recebemensagem1\";
				\$mensagem2=\"$recebemensagem2\";
				\$fone=\"$fone\";
				\$cad=\"$cad\";
				?>";
				$abreid= fopen("./adm/usuarios/".$id." _2.txt","w");  //cadastrando o usuario
				fwrite($abreid,"$salvar");
				fclose($abreid);
			}
			$let="
			<?php
			if(file_exists(\"./adm/usuarios/$id.txt\")){
			echo \"<br> <a href=suaconta.php?id=$id>$id</a>\";
			}
			?>";
			$abrele= fopen("listas/$letra.txt","a+");
			fwrite($abrele,"$let");
			fclose($abrele);

			echo "<script>location.href='msg.php?msg=ok'</script>";
			echo "<meta http-equiv='refresh' content='2;URL=cadastro.php'>";
		}
	}
}
else if (contarArquivos("usuarios/")<=1000){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Toledo Classificados</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 12px}
-->
</style>
<script language="javascript" type="text/javascript">

function alfa(){
	var texto=(document.form.id.value);
	var letra=(document.form.letra.value);
	if(letra==""){
		document.form.letra.value=(texto);
	}
	if(texto==""){
		document.form.letra.value=(texto);
	}
}

function ini(){
	document.form.id.focus();
}
function veri(objEvent){
	keyascii = objEvent.keyCode;
	if (keyascii == 32){
		return false;
	}else{
		return true;
	}
}
function Contar1(Campo){
	document.getElementById("Qtd1").innerHTML = Campo.getAttribute("maxlength")-Campo.value.length;	
}
function Contar2(Campo){
	document.getElementById("Qtd2").innerHTML =Campo.getAttribute("maxlength")-Campo.value.length;
}
//-->
</script>
		</head>


	
	<body onLoad="ini();">

	<div id="tudo">
  <div class="linhas">
    <div class="linhascentro">
      <div id="bannercima">
        <div style="width:418px; height:173px; float:left; display:block;"><img src="img/1.jpg" width="418" height="173" border="0" /></div>
        <div id="logo"><img src="img/logo.jpg" width="360" height="173" border="0" /></div>
      </div>
    </div>
  </div>
  <div id="barra">
    <div class="linhascentro" style="margin-top:30px;">
      <div id="banner"><img src="img/bannerimagem.jpg" width="1000" height="260" border="0" /></div>
    </div>
  </div>
  	<div class="linhas" >
    	<div class="linhascentro">
      <div style="margin-top:50px; margin-bottom:50px;">
        <div id="tiulosformulario"><img src="img/titulo.jpg" width="1000" height="30" border="0" /></div>
		<div id="containercontato">
			<div id="formulario">
			<form id="form" name="form" method="post">
			  <table width="400" border="0" align="center" cellpadding="0" cellspacing="2">
				<tr>
				  <td height="100" colspan="2" align="center" ><strong>Envie sua mensagem!</strong></td>
				</tr>
				<tr>
				  <td width="140" align="right">Usu�rio:</td>
				  <td width="254" align="left" ><input name="id" type="text" id="id" size="10" onkeypress="alfa();return veri(event);" />
					<input name="letra" type="hidden" id="letra" value="" /></td>
				</tr>
				<tr>
				  <td align="right" >Senha:</td>
				  <td align="left" ><input name="senha" type="text" id="senha" size="10" /></td>
				</tr>
				<tr>
				  <td align="right" >Nome Completo:</td>
				  <td align="left"><input name="nome" type="text" id="nome" size="25" /></td>
				</tr>
				 <tr>
				  <td align="right" >E-mail:</td>
				  <td align="left" ><input name="email" type="text" id="email" size="25" /></td>
				</tr>
				<tr>
				  <td align="right">CPF:</td>
				  <td align="left"><input name="cpf" type="text" id="cpf" size="20" onkeypress="alfa();return veri(event);"/>
					<span class="style1">        (s&oacute; n�meros) </span></td>
				</tr>
				<tr>
					<td colspan="2" style="color:red;text-align:center;">
					<?php 
						if(
							((isset($_POST["cadatrar"]))&&($_POST["cadatrar"]=="Enviar"))
							&&
							!(isset($_POST["cpf"])&&(validaCPF($_POST["cpf"])))
						){
					?>
					CPF inv�lido
					<?php
						}
					?>
					</td>
				</tr>
				<tr>
				<tr>
				  <td align="right">Rua:</td>
				  <td align="left"><input name="rua" type="text" id="rua" size="25" /></td>
				</tr>
				  <td align="right">N�mero:</td>
				  <td align="left" ><input name="numero" type="text" id="numero" size="25" /></td>
				</tr>
				
				<tr>
				  <td align="right" >Bairro:</td>
				  <td align="left" ><input name="bairro" type="text" id="bairro" size="25" /></td>
				</tr>
				<tr>
				  <td align="right" >Cidade:</td>
				  <td align="left" ><input name="cidade" type="text" id="cidade" size="25" /></td>
				</tr>
				<tr>
				  <td align="right" >Telefone:</td>
				  <td align="left" ><input name="fone" type="text" id="fone" size="15" /></td>
				</tr>
				<tr>
				<td align="right" >1� Mensagem:</td>
				  <td align="left"><textarea name="mensagem1" onkeyup="Contar1(this)" type="text" class="inputcontato2" id="mensagem1" maxlength="150"></textarea></td>
					  <td id="Qtd1" style="margin-left:100px;">150</td>
				  </tr>
				  <tr>
				 
				  </tr>
				 <tr>
				<td align="right" >2� Mensagem: </td>
				  <td align="left"><textarea name="mensagem2" onkeyup="Contar2(this)" type="text" class="inputcontato2" id="mensagem2" maxlength="150" ></textarea></td>
					  <td id="Qtd2" style="margin-left:100px;">150</td>
				  </tr>
				  
				<tr>
				
				  <td colspan="2" align="left" >
				  <br> <br><br>
					<?php echo contarArquivos("usuarios/")?> mensagem cadastradas
					<input name="cadatrar" type="submit" id="cadatrar"  name="enviar" value="Enviar" id="enviar" value="Cadatrar" />
					</td>
				</tr>
			  </table>
			</form>
			</div>
			<div id="formulario" style=" margin-left:93px; overflow:scroll;"><br>REGULAMENTO<br><br>
			1 - �POR QU� TOLEDO E REGI�O MERECEM UM CLASSIFICADOS ONLINE E GRATUITO?"
					� um Concurso Cultural (ou simplesmente �Concurso�) de Toledo Classificados
					(www.toledoclassificados.com.br), empresa inscrita no CNPJ/MF sob o n� 00.000.000/0000-00.
					O Concurso visa � escolha das duas (2) melhores e mais criativas frases que contenham as
					seguintes palavras: Inclus�o Digital, Toledo, Classificados, sendo que cada ganhador receber�
					de acordo com a classifica��o como pr�mio:<br>
					<br>
					1� lugar � R$ 800,00<br>
					2� lugar � R$ 500,00<br>
					3� lugar � R$ 300,00<br>
					<br>
					2 - Este Concurso tem car�ter exclusivamente cultural e recreativo, sem qualquer modalidade
					de sorte ou pagamento pelas participantes, nem vinculo � aquisi��o ou uso de qualquer bem,
					direito ou servi�o, de acordo o art. 3�, II, da Lei n� 5.768/71, e art. 30 do Decreto n� 70.951/72.<br>
					<br>
					3 - DO CONCURSO, MEC�NICA DO CONCURSO, INSCRI��O E PREMIA��O.<br>
					<br>
					3.1 - Estar�o habilitados a participar do presente Concurso Cultural apenas os residentes em
					Toledo e distridos de Toledo no estado do Paran�, de ambos os sexos, com mais de 16 anos
					que se cadastrarem e enviarem suas respostas � nos termos deste regulamento e que estejam
					devidamente cadastradas no site de relacionamento http://www.facebook.com, desde que
					possuam uma conta v�lida.<br>
					<br>
					3.2 - Para concorrer, os participantes dever�o enviar suas frases atrav�s da p�gina
					www.toledoclassificados.com.br/concursocultural mediante o preenchimento de todos os
					campos e posteriormente divulgar sua frase na p�gina de Toledo Classificados na Rede Social
					Facebook na imagem espec�fica da promo��o, o preenchimento dessas informa��es ter�
					validade apenas para o concurso.<br>
					<br>
					3.3 - Por tratar-se de um Concurso Cultural, n�o ser�o aceitas para participar do Concurso
					frases que contenham nomes empresariais ou marcas, inclusive de Toledo Classificados.
					Tais frases ser�o desclassificadas automaticamente do Concurso, sem pr�vio aviso aos
					participantes.<br>
					<br>
					3.4 - N�o ser� permitido, em qualquer hip�tese, o uso de quaisquer express�es, sinais,
					palavras contr�rias � moral e aos bons costumes, bem como termos que ofendam a honra ou
					imagem de pessoas, produtos, empresas ou natureza, meio ambiente, espa�os f�sicos e afins;
					sinais ou palavras que ofendam a liberdade de consci�ncia, religi�o, ideia ou sentimentos das
					pessoas ou associa��es; sinais p�blicos (bras�es, armas, medalhas, bandeiras, distintivos);
					reprodu��o ou sigla de entidade p�blica; sinais de pessoas/personalidades not�rias; sinais
					de partidos pol�ticos; incentivo a maus costumes, viol�ncia ou drogas; s�mbolos desportivos
					reconhecidos; nomes patron�micos not�rios; obra liter�ria, art�stica ou cient�fica reconhecida;
					apontamentos discriminat�rios, injuriosas, caluniosas ou semelhantes. As respostas que
					contiverem quaisquer destes apelos ser�o imediatamente eliminadas por meio da an�lise de
					um moderador da Organizadora.<br>
					<br>
					3.5 - Ser� aceito apenas o envio de 02 (duas) frase por participante, caso envie mais de duas,
					ter� apenas as duas primeiras publica��o consideradas.<br>
					<br>
					3.6 - Adequa��o � frase ao limite de 140 caracteres.<br>
					<br>
					3.7 - Prazo para Inscri��es: de 04 de junho a 16 de julho/2012<br>
					<br>
					3.8 - O participante possui responsabilidade integral pelas informa��es enviadas. Caso seja
					imposs�vel a localiza��o de um ganhador com base em referidos dados, o ganhador ser�
					automaticamente desclassificado.<br>
					<br>
					3.9 - Os crit�rios usados para avalia��o das frases ser�o: respeito � restri��o regional definida
					no par�grafo 3.1, adequa��o ao tema proposto, originalidade, criatividade, uso correto da
					l�ngua portuguesa e adequa��o ao limite de caracteres conforme par�grafo 3.6, sendo os
					crit�rios originalidade e criatividade subjetivos e inquestion�veis.<br>
					<br>
					3.10 - As frases dever�o ser totalmente originais do participante e n�o dever�o haver sido
					previamente publicadas ou premiadas. Os participantes n�o poder�o copiar no todo ou em
					parte o trabalho de terceiros.<br>
					<br>
					3.11 - Caso mais de um participante cadastre uma frase id�ntica, o desempate entre estes ser�
					feito tomando-se por base a data e hora de participa��o mais antiga.<br>
					<br>
					3.12 - Forma de Escolha: Atrav�s de votos de J�ri composto por um (1) representante da Acit e
					um (1) representante da Unioeste, ap�s uma sele��o pr�via por Toledo Classificados.<br>
					<br>
					3.13 - O Resultado ser� divulgado no prazo de 15 dias uteis ap�s o encerramento das
					incri��es.<br>
					<br>
					3.14 - A decis�o da comiss�o ser� irrecorr�vel e anunciada por ocasi�o da solenidade de
					premia��o.<br>
					<br>
					3.15 - O vencedor dever�, a seu crit�rio, providenciar seu pr�prio transporte de ida e volta �
					ACIT (Associa��o Comercial de Toledo) para retirar o pr�mio.<br>
					<br>
					3.16 - Os ganhadores ou seus acompanhantes respons�veis dever�o apresentar o documento
					original ou c�pia autenticada de RG ou a certid�o de nascimento do ganhador para comprovar
					sua identidade para a efetiva entrega do pr�mio al�m de providenciar a assinatura do Termo
					de Quita��o de Entrega do Pr�mio, logo ap�s a entrega dos pr�mios, que ficar� em posse de
					Toledo Classificados (www.toledoclassificados.com.br), como comprovante de regularidade do
					Concurso Cultural.<br>
					<br>
					3.17 - A aus�ncia de qualquer documento no momento da solenidade resultar� na imediata
					desclassifica��o do autor da resposta vencedora.<br>
					<br>
					3.18 - Em nenhuma hip�tese ser�o Toledo Classificados (www.toledoclassificados.com.br),
					
					Acit, Unioeste e/ou terceiros envolvidos neste Concurso Cultural respons�veis (i) pelos custos
					ou pela obten��o/emiss�o, atualiza��o ou legalidade das informa��es constantes nas fichas e
					documentos apresentados pelo vencedor.<br>
					<br>
					3.19 - Ao concordar em participar do Concurso Cultural, os participantes concordam em ceder,
					a t�tulo gratuito, os direitos patrimoniais de autor sobre suas frases submetidas a Toledo
					Classificados, que poder� ceder referidos direitos patrimoniais de autor a terceiros e/ou
					utiliz�-las como melhor lhe aprouver. Os participantes desde j� e para todos os efeitos legais
					concordam com referida cess�o, na forma do art. 49 da Lei de Direitos Autorais (Lei n. 9.610/
					98). A cess�o prevista nesta cl�usula � total e v�lida mundialmente, para quaisquer tipos de
					m�dia ou suporte, e para um n�mero ilimitado de c�pias. Os participantes do Concurso Cultural
					concordam desde j� a assinar quaisquer documentos necess�rios, conforme solicitado por
					Toledo Classificados (www.toledoclassificados.com.br), para que a cess�o prevista neste item
					tenha plena efic�cia e validade.<br>
					<br>
					3.20 - O acesso e as condi��es de acesso (tipo de hardware, software, provedor, conex�o
					e demais condi��es) ao site deste Concurso Cultural � de inteira responsabilidade do
					participante. Toledo Classificados, Acit e/ou Unioeste n�o se responsabilizam pelo acesso
					e condi��es de acesso ao site e n�o garante que o acesso ao site do Concurso esteja livre
					de interrup��es, interven��es ou suspens�es ocasionadas por casos fortuitos, internos ou
					externos, casos de for�a maior ou por outros casos n�o inteiramente sujeitos ao seu controle,
					eximindo-se, por conseguinte, de qualquer responsabilidade proveniente de tais fatos ou atos.<br>
					<br>
					3.21 - O vencedor autoriza a veicula��o de seu nome, imagem e voz em quaisquer ve�culos
					de comunica��o, incluindo meios de radiodifus�o, meios eletr�nicos e impressos sem
					qualquer �nus aos Organizadores. O vencedor cede, a t�tulo gratuito, � Toledo Classificados
					(www.toledoclassificados.com.br) os direitos patrimoniais de autor sobre sua frase inscrita
					enviada para sua utiliza��o em qualquer tipo de m�dia e materiais promocionais utilizados na
					divulga��o da conquista do pr�mio ou em quaisquer outros suportes e/ou meio de transmiss�o
					digital, com ou sem provedor. A cess�o prevista nesta cl�usula � total e v�lida mundialmente,
					para quaisquer tipos de m�dia ou suporte, e para um n�mero ilimitado de c�pias.<br>
					<br>
					3.22 - Os vencedores do Concurso Cultural ser�o responsabilizados por quaisquer danos
					causados a ACIT e a terceiros decorrentes de suas condutas ou de atos comissivos ou
					omissivos que lhes sejam atribu�veis no per�odo em que estiverem usufruindo da premia��o.<br>
					<br>
					3.23 - Toledo Classificados (www.toledoclassificados.com.br) n�o ser� respons�vel por
					quaisquer despesas de natureza m�dico-hospitalar, ambulatorial ou com medicamentos
					efetuadas pelo vencedor e/ou seu acompanhante no curso ou em decorr�ncia do evento
					organizado sob este Concurso Cultural.<br>
					<br>
					3.24 - N�o podem participar deste Concurso Cultural os funcion�rios, estagi�rios ou
					colaboradores de Toledo Classificados (www.toledoclassificados.com.br), Acit e/ou seus
					c�njuges e parentes at� segundo grau.<br>
					<br>
					3.25 - Toledo Classificados (www.toledoclassificados.com.br) poder�, a seu exclusivo crit�rio,
					a qualquer tempo, se julgar necess�rio, alterar as regras constantes deste Regulamento
					mediante comunica��o p�blica de tais mudan�as no site www.toledoclassificados.com.br ou
					em sua p�gina na Rede Social Facebook.<br>
					<br>
					3.26 - � Toledo Classificados fica assegurado o direito de encerrar e/ou modificar pontos
					espec�ficos do presente Concurso Cultural em caso de fraude, dificuldade operacional ou
					qualquer outro fator que possa comprometer a integridade e licitude deste.<br>
					<br>
					3.27 - Nenhuma mudan�a poder� ser feita por Toledo Classificados para diminuir ou excluir a
					premia��o indicada neste Regulamento; qualquer mudan�a na premia��o somente poder� ser
					feita para oferecer mais ou melhores pr�mios.<br>
					<br>
					3.28 - Quaisquer d�vidas e/ou omiss�es relativas ao presente Concurso Cultural devem ser
					encaminhadas ao Toledo Classificados atrav�s do site www.toledoclassificados.com.br. As
					d�vidas n�o previstas neste Regulamento ser�o julgadas por uma comiss�o composta por
					funcion�rios de Toledo Classificados, cujas decis�es ser�o soberanas e irrecorr�veis.<br>
					<br>
					3.29 - A simples participa��o neste Concurso Cultural implica na total concord�ncia com
					o presente Regulamento, servindo ainda como declara��o de que o vencedor n�o possui
					qualquer embara�o fiscal, legal ou outro que o impe�a de receber e/ou usufruir os pr�mios.<br>
					<br>   
			</div>
		</div>
	</div>
</div>
<div class="clear" style="height:100px;"></div>
 <div id="barra2">
    <div class="linhascentro">
      <div id="flashmix">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="135" height="99" id="FlashID" title="flashmix">
          <param name="movie" value="flashmix.swf" />
          <param name="quality" value="high" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <param name="wmode" value="transparent" />
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="flashmix.swf" width="135" height="99">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <param name="wmode" value="transparent" />
            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
            <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
    </div>
  </div>

</div>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
<?php 
}
else{
?>
promo��o encerada.
<?php } ?>
