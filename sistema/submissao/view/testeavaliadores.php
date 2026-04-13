<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Avaliadores Cadastrados</title>
	<style type="text/css">
		th{font-size: 24px;}
		td{font-size: 20px; color: #696969;}
		table{margin: 5px;}
		td{padding: 3px;}
		#divavaliadores{}
		
	</style>
</head>
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-12">
			<h3 style="text-align:center"> Progresso das avaliações </h3><br>
				<table class="table table-striped table-condensed table-bordered" id="resultadoavaliadores"> 
					<tr>
						<th><center>Nome do avaliador</center></th>
						<th><center>Trabalhos atribuídos</center></th>
						<th><center>Avaliações concluídas</center></th>
					</tr>
				</table>
			</div>
		</div>
	</div>



	<script type="text/javascript">
		$(document).ready(function(){ 
				var env = {};
					
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/testeavaliador.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){

		                console.log(data);
		                
		                var count = 0;
		                $.each(data,function(key,val){
		                	
		                		console.log(data);
		                	
		                	var linha = '<tr id="'+data[count]['id_usuario']+'"> <td><center>'+data[count]['nome']+'</center></td> <td ><center>'+data[count][0]+'</center></td> <td><center>'+data[count][1]+'</center></td> </tr>';
		                	$('#resultadoavaliadores').append(linha);
		                	count++;
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#resultadoavaliadores').append('<b>Nenhum Dado Encontrado</b>');
		            	}
		    		});
				});
	</script>