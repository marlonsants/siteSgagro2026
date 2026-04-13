<?php include("verificasessaoadm.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Cadastro de Administrador</title>
	<style type="text/css">
		.panel-default{
			height: 560px;
		}
		.btn-success{

        	background-color: green;
        	border-color:#4cae4c; 
        	color: white;
        
		}
	</style>
</head>
<body>

	<div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div><br><br><br>

	<div class="Container-fluid">
		<div class="Container-fluid">
	    <div class="jumbotron">
	    	<div class="row panel panel-default" style="border-radius:50px">
	    		<div class="col-md-12 col-xl-12 col-lg-12">
	    			<form action="../controller/ACAO/novoadm.php" method="post">
	    				<br><br><br><br>
	    				<div class="row">
	    					<center><h4> Informe os dados abaixo para realizar o cadastro de um novo administrador</h4></center>
	    					<center><h4> <?php 
	    									if(isset($_GET['msg'])){
											$msg = $_GET['msg'];
											if($msg == 1){
												echo '<div class="alert-success"><center>Cadastro efetuado com sucesso <center></div>';
											}
											
											}
											if(isset($_GET['erro'])){
											$erro = $_GET['erro'];
											if($erro == 1){
												echo '<div class="alert-danger"><center>As senhas informadas não correspondem verifique e tente novamente <center></div>';
											}
											
											}
				?>	</h4></center>
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Nome:</label>
	    						<div class="input-group">
	    							<div class="input-group-btn">
			    						<button type="button" class="btn btn-success glyphicon glyphicon-user"></button>
			    					</div>	
			    						<input type="text" id="nome" name="nome" class="form-control" required>
		    						
	    						</div>
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>E-mail:</label>
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success glyphicon glyphicon-envelope"></button>
				    					</div>	
		    						<input type="email" id="email" name="email" class="form-control" required>
	    						</div>	
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Senha:</label>
	    					
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success">***</button>
				    					</div>	
	    									<input type="password" id="senha" name="senha" class="form-control" required>
	    						</div>
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-lg-6 col-lg-offset-3">
	    						<label>Confirmar Senha:</label>
	    						<div class="input-group">
		    						<div class="input-group-btn">
				    						<button type="button" class="btn btn-success">***</button>
				    					</div>	
	    									<input type="password" id="confsenha" name="confsenha" class="form-control" required>
	    							</div>			
	    					</div>	
	    				</div></br>

	    				<div class="row">
	    					
        					
          
        

	    					<div class="col-md-offset-5 col-md-2 col-xs-2 col-lg-2">
	    						<button type="submit" id="salvar" name="salvar"  class="btn btn-success col-md-12 col-xl-12 col-lg-12 glyphicon glyphicon-floppy-disk" style="border-radius:60px; font-weight: bold"> Salvar</button>
	    						
	    					</div>	
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
		</div>
	</div>
</body>
</html>