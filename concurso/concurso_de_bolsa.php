
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
                <h1>Inscrições</h1>
                <div class="clear" style="height:30px;"></div>
                Preencha corretamente os campos abaixo para realizar sua incrição para o concurso de bolsas do <strong>Colégio ALFA</strong> de Toledo.
              <form name="form1" id="form1" action="envia_concurso.php" method="post" class="formcontato">
                <div style="margin:0;">
                <h3 style="margin-top:10px; line-height:150%;" class="cor">Dados Pessoais</h3>
			


				
                <div style="margin:0 15px 0 0; float: left;">
                    <label for="nome">
                        Nome completo
                        <span class="marcacaoObrigatorio">
                            *
                            <br>
                            <input type="text" id="nome"  name="nome"  title="O campo Nome Completo é obrigatório" style="width:313px;">
                        </span>
                    </label>
                </div>
                <div style="margin:0 15px 0 0; float: left;">
                    <label for="dataNascimento">
                    Data de nasc. 
                    <span class="marcacaoObrigatorio">*</span>
                    <br>
                    <input type="text" id="date" name="data" class="required data" title="O campo Data de Nascimento é
                    obrigatório" style="width:65px; text-align:center">
                    </label>
                </div>
                <div style="margin:0; ">
                    <label for="sexo">
                    Sexo
                    <span class="marcacaoObrigatorio">*</span>
                    <br>
                    <select name="sexo" id="sexo" style="width:100px;">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    </label>
                </div>
                <div style="margin-right:15px; margin-top:20px; float: left;">
                    <label for="colegio">
                    Colégio
                    <span class="marcacaoObrigatorio">*</span>
                    <br>
                    <input type="text" id="colegio" class="required" title="O campo colégio é obrigatório" name="colegio" style="width:290px;">
                    </label>
                </div>
                <div style="margin-right:15px; margin-top:20px;">
                    <label for="serie">
                        Série
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <select name="serie" id="serie" style="width:110px;">
                            <option value="9º ano do E. F.">9º ano do E. F.</option>
                            <option value="1º ano do E. M.">1º ano do E. M.</option>
                            <option value="2º ano do E. M.">2º ano do E. M.</option>
                        </select>
                    </label>
                </div>
                    <div class="clear" style="margin:0; padding:0;">
                    </div>
                </div>
            <div class="clear" style="margin:0; padding:0;">
            </div>
                <div style="margin:0">
                <h3 class="cor">Endereço Residencial</h3>
                <div style="margin:0 15px 0 0; float: left;">
                    <label for="endereco">
                        Endereço
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <input type="text" id="endereco" name="endereco" class="required" title="O campo Endereço é obrigatório" style="width:314px;">
                    </label>
                </div>
                <div style="margin:0 15px 0 0; float: left;">
                    <label for="numero">
                        Número
                    <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <input type="text" id="numero" name="numero" class="required" title="O campo Número é obrigatório" style="width:40px;
                    text-align:center;">
                    </label>
                </div>
                <div style="margin:0 15px 0 0; ">
                    <label for="bairro">
                        Bairro
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <input type="text" id="bairro" name="bairro" class="required" title="O campo Bairro é obrigatório" style="width:100px;">
                    </label>
                </div>
                <div class="clear" style="margin:0; padding:0;">
                </div>
                <div style="margin-right:15px; margin-top:20px; float: left;">
                    <label for="cidade">
                        Cidade
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <input type="text" id="cidade" name="cidade" class="required" stitle="O campo Cidade é obrigatório" style="width:150px;">
                    </label>
                </div>
                <div style="margin-right:15px; margin-top:20px; float: left;">
                    <label for="estado">
                        Estado
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <select name="estado" id="estado" style="width:138px;">
                            <option value="AC">
                                 Acre									
                            </option>
                            <option value="AL">
                                Alagoas									
                            </option>
                            <option value="AP">
                                Amapá									
                            </option>
                            <option value="AM">
                                Amazonas									
                            </option>
                            <option value="BA">
                                Bahia									
                            </option>
                            <option value="CE">
                                Ceará									
                            </option>
                            <option value="DF">
                                Distrito Federal									
                            </option>
                            <option value="ES">
                                Espírito Santo									
                            </option>
                            <option value="GO">
                                Goiás									
                            </option>
                            <option value="MA">
                                Maranhão									
                            </option>
                            <option value="MT">
                                Mato Grosso									
                            </option>
                            <option value="MS">
                                Mato Grosso do Sul									
                            </option>
                            <option value="MG">
                                Minas Gerais									
                            </option>
                            <option value="PA">
                                Pará									
                            </option>
                            <option value="PB">
                                Paraíba									
                            </option>
                            <option selected="selected" value="PR">
                                Paraná									
                            </option>
                            <option value="PE">
                                Pernambuco									
                            </option>
                            <option value="PI">
                                Piauí									
                            </option>
                            <option value="RJ">
                                Rio de Janeiro									
                            </option>
                            <option value="RN">
                                Rio Grande do Norte									
                            </option>
                            <option value="RS">
                                Rio Grande do Sul									
                            </option>
                            <option value="RO">
                                Rondônia									
                            </option>
                            <option value="RR">
                                Roraima									
                            </option>
                            <option value="SC">
                                Santa Catarina									
                            </option>
                            <option value="SP">
                                São Paulo									
                            </option>
                            <option value="SE">
                                Sergipe									
                            </option>
                            <option value="TO">
                                 Tocantins									
                            </option>
                        </select>
                    </label>
                </div>
                <div style="margin-top:20px; float: left;">
                        <label for="cep">
                            CEP
                            <br>
                            <input type="text" id="cep" name="cep" class="cep" style="width:65px;">
                        </label>
                    </div>
                </div>
            <div class="clear" style="margin:0; padding:0;">
            </div>
                <div style="margin:0;">
                    <h3 style="line-height:150%;" class="cor">Documento Obrigatório</h3>
                    <div style="margin:0 15px 0 0;">
                        <label for="rg">
                            RG
                                <span class="marcacaoObrigatorio">*</span>
                                <br>
                            <input type="text" id="rg" name="rg" class="required" title="O campo RG é obrigatório" style="width:100px;">
                        </label>
                    </div>
                </div>
            <div class="clear" style="margin:0; padding:0;">
            </div>
                <div style="margin:0;">
                <h3 style=" line-height:150%;" class="cor">Dados para Contato</h3>
                    <div style="margin:0 15px 0 0; float:left;">
                        <label for="foneResidencial">
                            Telefone residencial
                            <br>
                            <input type="text" id="phone" name="telefone" class="fone" style="width:90px;">
                        </label>
                    </div>
                        <div style="margin:0 15px 0 0; margin-top: 20px;">
                            <label for="foneCelular">
                            Telefone celular
                            <span class="marcacaoObrigatorio">*</span>
                            <br>
                            <input type="text" id="cel" name="celular" class="fone required" title="O campo Celular é obrigatório" style="width:90px;">
                            </label>
                        </div>
                    <div class="clear" style="margin:0; padding:0;">
                    </div>
                <div style="margin-top: 20px;">
                    <label for="email">
                        E-mail
                        <span class="marcacaoObrigatorio">*</span>
                        <br>
                        <input type="text" id="email" name="email" class="required" title="O campo Email é obrigatório" style="width:300px;">
                    </label>
                </div>
                <div class="clear" style="margin:0; padding:0;">
				<div style="margin:0 15px 0 0; margin-top: 20px;">
                            <label for="foneCelular">
                            Confirme o E-mail
                            <span class="marcacaoObrigatorio">*</span>
                            <br>
                            <input type="text" id="reemail" name="confirmar" class="required" title="O campo Celular é obrigatório" style="width:300px;">
                            </label>
                        </div>
                
                </div>
                <div class="clear" style="margin:0; padding:0;">
                </div>
                    <div style="margin:0;">
                        <h3 style=" line-height:150%;" class="cor">Informações Adicionais</h3>
                        <p>
                        Caso você tenha sido indicado, preencha os campos abaixo
                        </p>
                        <div style="margin:0 15px 0 0;">
                            <label for="indicacao">
                            Indicado por
                            <br>
                                <select name="indicacao" id="indicacao" style="width:180px;">
									<option value="Indicação (Amigo)">Indicação (Amigo)</option>
									<option value="Rádio">Rádio</option>
									<option value="No meu Colégio">No meu Colégio</option>
									<option value="Internet">Internet</option>
									<option value="No local">No local</option>
									<option value="Jornal">Jornal</option>
									<option value="Empresa">Empresa</option>
									<option value="Outros">Outros</option>								
								</select>
                            </label>
                        </div>
                    </div>
                <div class="clear">
				
                </div>
                <div style="margin:0 0 -20px;">
                    <h3 style=" line-height:150%;" class="cor">Verificação</h3>
                </div>
                <div class="clear">
                </div>
                    <div style="margin-top:15px; margin-bottom:15px;">
                        <input type="checkbox" value="SIM" name="regulamentolido" class="required" title="Você precisa concordar com o regulamento para prosseguir."> Declaro que li e concordo com o 
                        <a onclick="javascript:abrir('./formulario.php');" style="border:none; text-decoration:underline; float:none; cursor:pointer;" class="cor">regulamento</a>.
                    </div>
                    <div class="clear">
                    </div>
                    <div class="clear" style="border-bottom:1px dashed #ccc; width:710px;">
                    </div>
                    <div style=" text-align:center; width:710px; margin-top: 20px;">
                        <input type="submit" name="enviar" value="Enviar" id="enviar" onclick="return validar()" class="topo background">
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </form>
            </div>
            <div class="clear">
            </div>
        </div>
    </body>
</html>

