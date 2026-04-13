<html lang="en-us" id="lock-page">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
    <title>Tela de Cadastro</title>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Confirmar Cadastro</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div id="formsenha" class="jumbotron">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="row"><center class="col-md-12 col-xs-12 col-lg-12"><h2>Informe seu email</h2></center></div>

				
				
				<!-- inicio do form -->
				<div class="row">
					<form class="col-md-12 col-xs-12 col-lg-12" id="novasenha" method="post" action="../model/validaemail.php">
						<div class="row">
							<div class="col-md-12 col-xs-12 col-lg-12">	
								<div class="col-md-offset-4 col-md-4">
								<!-- verifica se o php retornou mesangem  -->
										<?php  
										// verifica se ocorreu erro
										if(isset($_GET['erro']))
										{ 
										// armazena o valor do erro 	
											$erro = $_GET['erro'];
										// se erro for = 1 email incorreto	
											if($erro == 1)
										{
											echo('<h5 style="color: black; font-size:15px">O e-mail está incorreto verifique e tente novamente !!! </h5>');
										}
										// se não cpf incorreto
										else if($erro == 2)
										{
											echo('<h5 style="color: black; font-size:15px"> Você não está cadastrado ou tem pendencias em seu cadastro !!!</h5>');
										}else if($erro == 3){
                                                                                  echo'<h5 style="color: black; font-size:15px"> Erro ao enviar o email com o link de acesso a alteração de senha, tente novamente!!!</h5>';
                                                                                }
										// fim do isset
										}
										else{
										// verifica se teve sucesso
										if (isset($_GET['msg']))
										{
											$msg = $_GET['msg'];
										if ($msg == 1)
										{
											echo('<h5 style="color: black; font-size:15px"> Atualização da senha feita com sucesso </h5>');
										}
										// fim do isset msg
										}
										// fim do else
										}
										?>
										<!-- fim do php -->
									<label > E-mail </label>
									<input class="form-control"type="input" name="email" id="email" >
								</div>
							</div>
						</div>

						</br>	

						<div class="row">
							<div class="col-md-12 col-xs-12 col-lg-12">
								<div class="col-md-offset-6 col-md-2 col-xs-offset-8 col-xs-4">
									<button  name="submit" id="submit"  class="btn btn-primary col-md-12 col-xs-12"> Confirmar </button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!--FIM DO FORM-->

			</diV>
			</div>
		</div>

	</div>

</body>
</html>		