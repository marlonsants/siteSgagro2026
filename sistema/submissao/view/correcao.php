<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo('
		<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<div class="container">

    <!--Banner-->
    <div class="jumbotron" style="background-image: url("../images/fundo.png"); background-size: cover;">
        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <center><h1><i style="font-family: "Plantagenet Cherokee";"><b>Sessão encerrada, para continuar faça login novamente</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

    <div class="jumbotron">
    	<div class="row">
    		<h2> <a href="../index.php"> <center>Fazer login</center> </a></h2>
    	</div>
    </div>
    </div>');
exit;
}
?>

<?php $email = $_SESSION['usuario']; 
	  $nome = $_SESSION['nome'];	
?>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Area do autor</title>
	<style type="text/css">
		#legenda>h4{
			margin: 10px 10px 10px 10px;
			padding: 4px;
		}
		#legenda{
			padding: 4px;
			margin-bottom: 20px;
		}
	</style>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Envio do Trabalho</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	    <div class="jumbotron">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">

				<div class="row">
					<h2 class="col-md-12 col-xs-12 col-lg-12"><center> <?php echo 'Olá '. $nome.' estes são seus trabalhos cadastrados até o momento'; ?> </center><h2>
					<h3 class="col-md-12 col-xs-12 col-lg-12"><center>
					<?php  
						if(isset($_GET['erro'])){
							$erro = $_GET['erro'];
							if($erro == 1){
								echo ("<div class='alert alert-danger' role='alert'><center>Tipo de Arquivo não suportado! <br/> Certifique se o arquivo está no formato PDF.<center></div>");
							}else{
								echo ("<div class='alert alert-danger' role='alert'><center>O arquivo excede o tamanho limite!<center></div>");
							}
						}
						if(isset($_GET['msg'])){
							$msg = $_GET['msg'];
							if($msg == 1){
								echo ("<div class='alert alert-success' role='alert'><center>Arquivo enviado com sucesso<center></div>");
							}
						}

					?>
					</center><h3>

				</div>
				<div class="row" >
					<div class="col-md-12 col-xs-12 col-lg-12">
						<div style="background-color:white" id="legenda">
							<h4>Clique em  <button type="button" class="btn btn-primary">Clique aqui <i class="glyphicon glyphicon-file"></i></button> para Gerar o PDF do comprovante de aprovação</h4>
							<h4>Caso exista correções para o trabalho:</h4>
							<h4>Clique em <button type="button" style="font-size:14px">Escolher arquivo</button> para selecionar o trabalho corrigido a ser enviado</h4>
							<h4>Clique em  <button type="button" class="btn btn-success">Enivar trabalho corrigido</button> para enviar o trabalho</h4>						
							<h4>O envio do trabalho corrigido só podera ser realizado uma vez, portanto certique se é o arquivo correto antes de enviar</h4>
							<h4>Agradecemos a compreensão</h4>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<table id="trabalhos" name="trabalhos" class="table table-striped">			
							<th> Título do trabalho </th>
							<th>Status </th>
							<th> Comprovante de aprovação </th>
							<th> Correção </th>	
							
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary" style="width:150px"></input>
						<!--<input type="button" id="cad" name="cad" value="Cadastrar um novo trabalho" class="btn btn-primary"></input>-->
					</div>
				</div>
					
			</div>

			<script type="text/javascript">
			 $(document).on('click','#sair',function(){
			 	location.href='../sessao/fecharsessao.php';
			 });
			</script>

			<script type="text/javascript" src="../js/scripts/enviosubmit.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){ 
				var env = {};
					env.email = <?php echo "'$email'"; ?> ;
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/sl-ACAOquanttrab.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                
		                var count = 0;
		                $.each(data,function(key,val){
		                	if(data[count][0]['status'] == 1){
		                		
		                		var status = '<p style="color:blue; font-size:18px"><b>Aprovado</b></p>';

		                		var comprovante = '<button type="button" class="vercomprovante btn btn-primary" id="'+data[count][0]['id_artigo']+'">Clique aqui <i class="glyphicon glyphicon-file"></i></button>';

		                	}else{
		                		var status = '<p style="color:blue; font-size:18px"><b>Reprovado</b></p>';
		                		var comprovante = 'Trabalhos reprovados não tem comprovante';

		                	}
		                	if(data[count][0]['correcao'] == 1){
			                	if(data[count][0]['status'] == 1){
				                	if(data[count][0]['enviado'] != 1){
				                	var correcao = '<form method="POST" action="../controller/ACAO/uptrabcorrigido.php" enctype="multipart/form-data" id="form'+count+'"> <input type="file" class="enviar btn btn-success" id="enviar'+count+'" name="arquivo"></input> <br> <input type="submit" class="enviar btn btn-success" id="enviar'+count+'" value=" Enviar trabalho corrigido "> </input> <input type="hidden" name="idartigo" value="'+data[count][0]['id_artigo']+'"</input></form>'; 
				                	}else{
				                	var correcao = '<p style="color:blue; font-size:18px"><b>Enviada</b></p>';
				                	}
				                }else{
				                	var correcao = 'Válido somente para trabalhos aprovados';
				                }
				            }else{
				            	var correcao = 'Não possui correções';
				            }    	
		                	var linha = '<tr id="'+data[count][0]['id_artigo']+'"> <td>'+data[count][0]['titulo']+'</td> <td>'+status+'</td><td>'+comprovante+'</td><td>'+correcao+'</td> </tr>';
		                	$('#trabalhos').append(linha);
		                	count++;
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabalhos').append('Nenhum trabalho cadastrado até o momento');
		            	}
		    		});
				});
			</script>

			<script type="text/javascript">
				$(document).on("click",".vercomprovante",function(){
					var idartigo = $(this).attr("id");
					window.open("comprovantepdf.php?id="+idartigo);
				});
			</script>
		</div>
		</div>
	</div>
</body>	