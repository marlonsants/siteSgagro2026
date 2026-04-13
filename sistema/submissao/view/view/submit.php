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
	<title>Envio do trabalho</title>
</head>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>
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
				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<table id="trabalhos" name="trabalhos" class="table table-striped">			
							<th> Título do trabalho </th>
							<th>  </th>
							<th> Status </th>
							<th>  </th>	
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12">
						<input type="button" id="sair" name="sair" value="Sair" class="btn btn-primary" style="width:150px"></input>
						<input type="button" id="cad" name="cad" value="Cadastrar um novo trabalho" class="btn btn-primary"></input>
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
		                	if(data[count][0]['idartigo'] == ''){
		                		var status = '<td>Pendente, arquivo PDF não enviado</td> <td> <form  method="POST" action="upload.php" enctype="multipart/form-data" id="form'+count+'"> <input type="file" class="enviar btn btn-success" id="enviar'+count+'" name="arquivo"></input> <br> <input type="submit" class="enviar btn btn-success" id="enviar'+count+'" value=" Enviar trabalho "> </input> <input type="hidden" name="idartigo" value="'+data[count][0]['id_artigo']+'"</input></form></td>';
		                	}else{
		                		var status = '<td>Arquivo PDF enviado com sucesso. Por favor aguarde o resultado. </td> <td><form method="POST" action="viewartigo.php"> <input type="submit" class="verartigo btn btn-primary" id="veratigo'+count+'" value="Vizualizar trabalho" >  </input> <input type="hidden" name="idartigo" value="'+data[count][0]['id_artigo']+'"</input> </form></td>';
		                	}
		                	
		                	var linha = '<tr id="'+data[count][0]['id_artigo']+'"> <td>'+data[count][0]['titulo']+'</td> <td>'+status+'</td> </tr>';
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

		</div>
		</div>
	</div>
</body>	