
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
//fun��o que ir� imprimir
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
            
              <form name="form1" id="form1" action="envia_fale_conosco_pv.php" method="post" class="formcontato">
						<div >
							<label for="nome">
								Nome completo
								<span class="marcacaoObrigatorio">
									*
									<br>
          							<input type="text" id="nome" name="nome" class="required" title="O campo Nome Completo ? obrigat?rio" style="width:380px;">
							</span>
							</label>
						</div>
						<div class="clear" style="margin:0; padding:0;">
					</div>
					<div class="clear" style="height:20px;"></div>
					<div style="margin:0 15px 0 0;  heigth:20px;">
							<label for="email" style="margin:0 15px 0 0; float:left;">
								E-mail
								<span class="marcacaoObrigatorio">*</span>
								<br>
								<input type="text" id="e_mail" name="email" class="required" title="O campo Email ? obrigat?rio" style="width:195px;
								text-transform: lowercase;">
							</label>
						
						<div style="  margin-left:50px;">
							<label for="foneResidencial">
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
						
						
						
						<div style="margin-right:15px">
							<label for="estado">
								Estado
								<span class="marcacaoObrigatorio">*</span>
								<br>
								<select name="estado" id="estado" style="width:138px;">
																											<option value="AC">
										Acre									</option>
																																				<option value="AL">
										Alagoas									</option>
																																				<option value="AP">
										Amapá									</option>
																																				<option value="AM">
										Amazonas									</option>
																																				<option value="BA">
										Bahia									</option>
																																				<option value="CE">
										Ceará									</option>
																																				<option value="DF">
										Distrito Federal									</option>
																																				<option value="ES">
										Espírito Santo									</option>
																																				<option value="GO">
										Goiás									</option>
																																				<option value="MA">
										Maranhão									</option>
																																				<option value="MT">
										Mato Grosso									</option>
																																				<option value="MS">
										Mato Grosso do Sul									</option>
																																				<option value="MG">
										Minas Gerais									</option>
																																				<option value="PA">
										Pará									</option>
																																				<option value="PB">
										Paraíba									</option>
																																				<option selected="selected" value="PR">
										Paraná									</option>
																																				<option value="PE">
										Pernambuco									</option>
																																				<option value="PI">
										Piauí								</option>
																																				<option value="RJ">
										Rio de Janeiro									</option>
																																				<option value="RN">
										Rio Grande do Norte									</option>
																																				<option value="RS">
										Rio Grande do Sul									</option>
																																				<option value="RO">
										Rondônia									</option>
																																				<option value="RR">
										Roraima									</option>
																																				<option value="SC">
										Santa Catarina									</option>
																																				<option value="SP">
										São Paulo									</option>
																																				<option value="SE">
										Sergipe									</option>
																																				<option value="TO">
										Tocantins									</option>
																										</select>
							</label>
						</div>
						
					</div>
					<div class="clear" style="height:20px;"></div>
					<div style="margin-right:15px">
							<label for="estado">
								Assunto/Departamento
								<span class="marcacaoObrigatorio">*</span>
								<br>
								<select name="assunto" id="assunto" style="width:138px;">
																											<option value="Ensino Médio">
										Ensino Médio									</option>
																																				
																																				<option value="FundamentalII">
										Fundamental II							</option>
																																				<option value="Pre Vestibular">
										Pré Vestibular								</option>
																																				
									
																										</select>
							</label>
						</div>
           <div class="clear" style="height:20px;"></div>
                   <div>
                    	Mensagem:<br>
                        <textarea name="mensagem" id="mensagem" class="required" title="O campo mensagem ? obrigat?rio" style="width: 380px; max-height: 110px; max-width: 404px; margin-top: 3px; margin-bottom: 0px; height: 148px; "></textarea>
                    </div>
                                               
					<div class="clear" style="height:20px;"></div>
               
              
          <div style=" text-align:center; width:400px; padding-bottom:20px; padding-top:20px; ">
                    
                        
						
						<input type="submit" value="ENVIAR" class="topo background">
					</div>
                              
            </form>
            </div>
            <div class="clear">
            </div>
        </div>
    </body>
</html>

