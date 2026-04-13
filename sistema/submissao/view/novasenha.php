<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php 
	
	if(isset($_GET['key'])){
		$sigla =  $_GET['key'];
		$key = base64_decode($sigla);
		if( $key != 'sigmajrsaoluis'){
		echo '<h2> Para que possa alterar sua senha é necessário clicar no link enviado para o seu email1 !!! </h2>';

		return;
		}
	}else{
		echo '<h2> Para que possa alterar sua senha é necessário clicar no link enviado para o seu email2 !!! </h2>';
		return;

	}
?>

<html lang="en-us" id="lock-page">
<head>
<meta charset="utf-8">
<title>SGAGRO</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

 <!-- Bootstrap Core CSS -->
<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
<link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/tooltip.js"></script>
<script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
<script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
<link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>

</head>
	
<body>
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Nova Senha</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <!-- div principal do fomulario -->
	    <div class="jumbotron">
	    	<div class="row">
	    		<div class="col-md-12 col-xs-12 col-lg-12">
					<div class="row">
						<center><h2>Criar nova senha</h2></center>
					</div>

					

					<!--começo form-->
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
						<form class="col-md-12 col-xs-12 col-lg-12" id="novasenha" method="post" action="../controller/ACAO/sl-ACAOcriaNsenha.php">
							<div class="row">
								<div class="col-md-4 col-md-offset-4">
								<?php include('../model/errovalidacao.php') ?>
									<label > E-mail </label>
									<input class="form-control" type="input" name="email" id="email">
								</div>
							</div>

							</br>

							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<label > Senha </label>
									<input class="form-control" type="password" name="senha1" id="senha1">
								</div>
							</div>

							</br>

							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<label>Digite a senha novamente</label>
									<input class="form-control" type="password" name="senha2" id="senha2">
								</div>
							</div>

							</br>

							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<button type="button"  name="salvar" id="salvar"  class="btn btn-primary col-md-12 col-xs-12">Salvar</button>
								</div>
							</div>		 
						</form>
						</div>
					</div>
					<!-- fim form -->
				</div>
			</div>
		</div>

	</div>

	<!-- função para validar a senha -->
	<script type="text/javascript">

	 // ler todo o documento em busca das informações
	 	$( document ).ready(function() {

	// chamar a função quando clica no botão submit 
			$(document).on("click","#salvar",function(){	
	// armazena os valores de senha e senha 2 em variaveis temporarias
				var senha1 = $("#senha1").val();
				var senha2 = $("#senha2").val();
		
	// se as senhas forem identicas
					if( senha1 == senha2)
					{
		
						$('#novasenha').submit();

					}
	// caso as senhas não sejam identicas 
					else{
							alert("Erro as senhas não correspondem !!!");
							 $("#senha1").val('');
							 $("#senha2").val('');

						}

	// fecha funçao on.click
			});
	// fecha o ready	
		});
	</script>
		
</body>
</html>