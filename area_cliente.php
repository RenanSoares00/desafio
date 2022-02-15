<?php
include('verifica_login.php');
include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Kabum</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src="jquery.js"></script>
	<link href="../libs/jquery-ui.css" type="text/css" rel="stylesheet" media="screen"/>
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript" src="jqmk.js"></script>
	<link type="text/css" rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="pagina.css">

<script>
function Salvar(){
	obj = document.form;

	if($("#nome_cli").val() == ''){
		alert("Selecione um nome!");
		return false;
	}
	if($("#data").val() == ''){
		alert("Selecione uma Data de Nascimento!");
		return false;
	}
	if($("#cpf").val() == ''){
		alert("Selecione um cpf!");
		return false;
	}
	if($("#rg").val() == ''){
		alert("Selecione um rg!");
		return false;
	}
	if($("#tel").val() == ''){
		alert("Selecione um Telefone!");
		return false;
	}



	obj.acao.value = '1';

	
	obj.submit();
}

function Alterar(){
	obj = document.form;

	if($("#nome_cli").val() == ''){
		alert("Selecione um nome!");
		return false;
	}
	if($("#data").val() == ''){
		alert("Selecione uma Data de Nascimento!");
		return false;
	}
	if($("#cpf").val() == ''){
		alert("Selecione um cpf!");
		return false;
	}
	if($("#rg").val() == ''){
		alert("Selecione um rg!");
		return false;
	}
	if($("#tel").val() == ''){
		alert("Selecione um Telefone!");
		return false;
	}


	if($("#id_cli_sel").val() != ''){
		obj.acao.value = '2';
		obj.submit();
	}else{
		alert("Selecione um cliente!");
		return false;
	}
}

function Excluir(){
	obj = document.form;
	if($("#id_cli_sel").val() != ''){
		obj.acao.value = '3';
		obj.submit();
	}else{
		alert("Selecione um cliente!");
		return false;
	}
}

function setaCampos(id_cliente){
	$.post(
			"setaCampos.php",
			{
				id_cliente:id_cliente
			},
			function(data){
				criaEndereco('-1',id_cliente);
				$("#id_cli_sel").val(data.id);
				$("#nome_cli").val(data.nome);
				$("#data").val(data.data_nasc);
				$("#cpf").val(data.cpf);
				$("#rg").val(data.rg);
				$("#tel").val(data.telefone);
				

				$("#btnExcluir").attr("disabled",false);
				$("#btnAlterar").attr("disabled",false);
				$("#btnCad").attr("disabled",true);


			},"json"
		);	
}

function criaEndereco(valor,id_cliente = ''){
	if(valor > 0  || valor == '-1'){
		$.post(
			"criaEndereco.php",
			{
				valor:valor,
				id_cliente : id_cliente,
			},
			function(data){
				$("#busca_endereco").html(data);
			}
		);
	}
}

function Busca(nome){

	$.post(
		"busca.php",
		{
			nome : nome,
		},
		function(data){
			$("#div_busca").html(data);
		}
	);
}

function init(){
	$('#data').mask('99/99/9999');
	$('#data').datepicker();

	$('#cpf').mask('999.999.999-99');
	$('#rg').mask('99.999.999-9');
	$('#tel').mask('(99)99999-9999');
}
$(document).ready(init);
</script>

<style>
    .container{
      box-shadow: 1px 1px 10px #ccc;
      background-color: 	#F5F5F5;
      padding: 80px;
      border-radius: 5px;
    }
	.form{

	width: 400px;

	padding-top: 40px;
	}
	fieldset{
		border: 5px solid blue;
	}
	.botao:hover{
      background-image:linear-gradient(to right, #1C1C1C,#4682B4);
      cursor:pointer;
    }

	.botao{
	background-image: linear-gradient(to right, #4682B4,#1C1C1C);
	width: 20%;
	border-radius: 30px;
	padding: 15px;
	color: #F8F8FF;
	border:0px;
	outline: 0;
}
</style>
</head>
<body>
	
<header>
			
		<h1 style="color:white;text-transform:uppercase;">Bem-Vindo <?php echo $_SESSION['usuario'];?></h2><br>
		<a class="link" href="logout.php">Sair</a>


    </header>
	<br>

<div class="container">
<form class="form" id="form" name="form" action="proc_cadastro.php" method="POST">
<table border="0" cellpadding="2" style="width:1000px" cellspacing="2"  >
<tr>
	<td>
	<fieldset>
	<legend><b>Área de Cadastro</b></legend>
<table border="0" cellpadding="2" style="width:1000px" cellspacing="2"  >
	<tr>
		<td>
		
			<label for="nome"><strong>Nome</strong></label>
			<input name="nome_cli" id="nome_cli"   style="padding:5px" class="input" type="text" placeholder="Nome">
		</td>
		<td>
		<label for="data"><strong>Data de Nascimento</strong></label>
		<input name="data" id="data" required style="padding:5px" class="input" type="text" placeholder="Data de Nascimento">

		</td>
		<td>
			<label for="cpf"><strong>CPF</strong></label>
			<input name="cpf" id="cpf" required  style="padding:5px" class="input" type="text" placeholder="CPF">
		</td>
		<td>
		<label for="rg"><strong>RG</strong></label>
		<input name="rg" id="rg" required style="padding:5px" class="input" type="text" placeholder="RG">
		</td>
		<td>
		<label for="tel"><strong>Telefone</strong></label>
		<input name="tel" id="tel" required style="padding:5px" class="input" type="text" placeholder="Telefone">
		</td>
	</tr>
	
</table>
		<label for="end"><strong>Número de Endereços</strong></label><br>
		<input name="enderecos" style="padding:5px" onblur="criaEndereco(this.value);" class="input" type="text">
<div id="busca_endereco"></div>
<div align="center">
		<input type="button" id="btnCad" value="Cadastrar" onclick="Salvar();" class="botao">
		<input type="button" id="btnAlterar" value="Alterar" disabled onclick="Alterar();" class="botao">
		<input type="button" id="btnExcluir" value="Excluir" disabled onclick="Excluir();" class="botao">
</div>
		</fieldset>
		</td>
	</tr>
</table>
<br><br>
<table border="0" cellpadding="2" style="width:1000px" cellspacing="2"  >
<tr>
	<td>
	<fieldset>
	<legend><b>Área de Consulta</b></legend>
<table border="0" cellpadding="2" style="width:1000px" cellspacing="2"  >
	<tr>
		<td>	
			<label for="nome"><strong>Nome:</strong></label>
		<input name="nome" id="nome" style="padding:5px" class="text">
		<input type="button" value="Consultar" class="botao" onclick="Busca($('#nome').val())">
		</td>	
	</tr>
</table>
</fieldset>
		</td>
	</tr>
</table>
<input type="hidden" id="id_cli_sel" name="id_cli_sel">
<input type="hidden" id="acao" name="acao">
</form>

<div id="div_busca"></div>
<div>
</body>
</html>