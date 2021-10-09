
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/base.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./css/geral.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./css/pre_vestibular.css" type="text/css" media="screen" />

<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.printElement.js" type="text/javascript"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="./js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="./js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script src="./js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<title>Concurso de Bolsa</title>
<script language="JavaScript" type="text/javascript">
jQuery(function($){
$("#date").mask("99/99/9999");
$("#phone").mask("(99) 9999-9999");
$("#cel").mask("(99) 9999-9999");
$("#tin").mask("99-9999999");
$("#cep").mask("99999-999");
$("#ssn").mask("999-99-9999");
});
</script>
<script>
//função que irá imprimir
function PrintDiv(div)
{
    $('#'+div).printElement();
}
</script>
<script language="javascript" type="text/javascript">
    function validar() {
    var nome = form1.nome.value;
    var email = form1.email.value;
    var senha = form1.senha.value;
    var rep_senha = form1.rep_senha.value;

        if (nome == "") {
        alert('Preencha o campo com seu nome');
        form1.nome.focus();
        return false;
        }

        if (email == "") {
        alert('Preencha o campo com seu email');
        form1.email.focus();
        return false;
        }

        if (senha == "") {
        alert('Preencha o campo com sua senha');
        form1.senha.focus();
        return false;
        }

        if (rep_senha == "") {
        alert('Repita sua senha');
        form1.rep_senha.focus();
        return false;
        }

        if (nome.length < 5) {
        alert('Digite seu nome completo');
        form1.nome.focus();
        return false;
        }

        if (senha != rep_senha) {
        alert('Senhas diferentes');
        form1.senha.focus();
        return false;
        }
}
</script>
</head>
    <body>
        <script>
            function abrir(URL) {
            var width = 650;
            var height = 545;
            var left = 150;
            var top = 100;
            window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
            }

        </script>
		
		<div style="float:left;">
			<!-- INICIO BOX NOTICIAS -->
            <div id='imprimir'>
                <h1>Fale Conosco</h1>
                <div class="clear" style="height:30px;"></div>
            
              <form name="form1" id="form1" action="envia_contato.php" method="post" class="formcontato">
						<form id="form" name="form" method="post" >
							<div  style=" padding-top:15px; margin-left:15px; margin-bottom:15px;">
								<div >
									<label for="nome">
										Nome completo
										<span class="marcacaoObrigatorio">
											*
											<br>
											<input type="text" id="nome" name="nome" class="required" title="O campo Nome Completo Ã© obrigatÃ³rio" style="width:380px;">
										</span>
									</label>
								</div>
								<div class="clear" style="margin:0; padding:0;"></div>
								<div class="clear" style="height:20px;"></div>
								<div style="  heigth:20px;">
									<label for="e-mail" style="margin:0 15px 0 0; float:left;">
										E-mail
										<span class="marcacaoObrigatorio">*</span>
										<br>
										<input type="text" id="email" name="email" class="required" title="O campo Email ? obrigat?rio" style="width:195px;text-transform: lowercase;">
									</label>

									<div style="  margin-left:50px;">
										<label for="fone">
											Telefone
											<br>
											<input type="text" id="phone" name="telefone" class="fone" style="width:150px;">
										</label>
									</div>
								</div >
								<div class="clear" style="height:20px;"></div>
								<div  style="margin:0">
									<label for="cidade" style="margin:0 15px 0 0; float:left;">
										Cidade
										<span class="marcacaoObrigatorio">*</span>
										<br>
										<input type="text" id="cidade" name="cidade" class="required" stitle="O campo Cidade ? obrigat?rio" style="width:195px;">
									</label>
								</div>
							</div>
							<div class="clear" style="height:20px;"></div>
							<div class="clear" style="height:20px;"></div>
							<div style="margin-left:15px;">
								Mensagem:<br>
								<textarea name="assunto" id="mensagem" class="required" title="O campo mensagem ? obrigat?rio" style="width: 380px; max-height: 110px; max-width: 404px; margin-top: 3px; margin-bottom: 0px; height: 148px; "></textarea>
							</div>
							<div class="clear" style="height:20px;"></div>
							<div style=" text-align:center; width:400px; padding-bottom:20px; padding-top:20px; ">
							 <input  name="acao" type="submit" id="ENVIAR" value="Enviar" class="topo background" style="background:#999999;">
                               
							</div>
                                                      
							<div class="clear"></div>
						</form>
            </form>
            </div>
            <div class="clear">
            </div>
        </div>
    </body>
</html>

