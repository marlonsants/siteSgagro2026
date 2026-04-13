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
	<title>Avaliadores Cadastrados</title>
	
</head>
<body>
	<div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div><br><br><br>
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="jumbotron" style="overflow:hidden">
				<div class="row" id="divavaliadores">
				<div style="background-color:white" id="legenda"><br>
				
							<h3>Clique em  <botton class="glyphicon glyphicon-ok btn btn-info" style="background-color: #5cb85c; border-color: #4cae4c;"></botton> para Aprovar o cadastro do avaliador ou <botton class=" btn btn-info glyphicon glyphicon-remove" style="background-color: #d9534f; border-color: #d43f3a;" ></botton> para Reprovar.<h3>
							
						<br></div
					<div class="col-md-12"style="overflow: scroll; height: 65%">								   					
		    			<table class="tabela1 table table-striped table-condensed table-bordered" id="avaliadorescad">
			    			<tr>
			    				<th> Nome </th>
			    				<th> Cidade </th>
			    				<th> Endereco </th>
			    				<th> Cargo </th>
			    				<th> Area temática </th>
			    				<th> Instituição </th>
			    				<th> Celular </th>
			    				<th> telefone </th>
			    				<th> E-mail </th>
			    				<th> Status </th>
			    				<th>A</th>
			    				<th>R</th>
			    			</tr>	
		    			</table>
			    	</div>	
	    		</div>
			</div>


		<?php include("testeavaliadores.php"); ?>	    	
		</div>
		
	</div><!--fim container-->

	<style type="text/css">
	/*body{text-align: center;}*/
		th{font-size:1em; text-align: center;}
		table.tabela1 td{font-size: 0.9em; color: #696969; font-weight: bold}
		table{margin: 5px;}
		td{padding: 0px;}
		#divavaliadores{}
		h3{
			margin-left: 8px;
		}
	</style>


	<script type="text/javascript">
		$(document).ready(function(){ 
				var env = {};
					
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/avaliadorescad.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                
		                var count = 0;
		                $.each(data,function(key,val){
		                	
		                		console.log(data);
		                		if(data[count]['status'] == 0){
		                			var status = '<span><b>Não verificado<b></span>';
		                		}else if(data[count]['status'] == 1){
		                			var status = '<span style="color:blue"><b>Aprovado</b></span>';
		                		}else if(data[count]['status'] == 2){
		                			var status = '<span style="color:red"><b>Reprovado</b></span>';
		                		}
		                	
		                	var linha = '<tr id="'+data[count]['id_usuario']+'"> <td>'+data[count]['nome']+'</td> <td>'+data[count]['cidade']+'</td> <td>'+data[count]['endereco']+'</td> <td>'+data[count]['cargo']+'</td> <td>'+data[count]['arearesp']+'</td> <td>'+data[count]['instituicao']+'</td> <td>'+data[count]['telefone']+'</td> <td>'+data[count]['contato']+'</td> <td>'+data[count]['email']+'</td> <td class="status" id="'+data[count]['id_usuario']+'" > <b>'+status+'<b> </td> <td> <button id="'+data[count]['id_usuario']+'" class="btn btn-success glyphicon glyphicon-ok"> </button> </td> <td> <button id="'+data[count]['id_usuario']+'"  class="btn btn-danger glyphicon glyphicon-remove" > </button> </td> </tr>';
		                	$('#avaliadorescad').append(linha);
		                	count++;
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#avaliadorescad').append('<b>Nenhum avaliador cadastrado até o momento</b>');
		            	}
		    		});
				});
	</script>

	<script type="text/javascript">
	$(document).on('click','.btn-success',function(){
		var resposta = confirm('Tem certeza que deseja aprovar o cadastro deste avaliador ?, clicando em Ok será enviado um email de aprovação ao mesmo.');
		if(resposta == false){
			return;
		}
		var env = {};
		env.id = $(this).attr('id');
		 			console.log(env.id);
		 			$.ajax({
	                    type: 'POST',
	                    url: '../controller/ACAO/aprovar.php',
	                    data: env,
	                    dataType: 'json',

	                    success: function(data){
	                        console.log(data);
	                       $('.status').each(function(){
	                       	if( $(this).attr('id')  == env.id ){
	                       		$(this).html('');
	                       		$(this).append('<span style="color:blue"><b>Aprovado</b></span>');
	                       	}
	                       });

	                $.ajax({

	                	type: 'POST',
	                    url: 'emailavaliador.php',
	                    data: env,
	                    dataType: 'json',

	                    success: function(data){
	                    	alert("Email de aprovação enviado com sucesso !!!");

	                    },
	                    error: function(data){
	                    	alert("Falha ao Enviar o e-mail, clique em aprovar novamente para fazer uma nova tentativa.");
	                    },
	                    cache: false	

	                });        
	                                       
	                
	                    },
	                    error: function(data){
	                        console.log(data);
	                    },
	                    cache: false
                	});
	});
	</script>

	<script type="text/javascript">
	$(document).on('click','.btn-danger',function(){
		var resposta = confirm('Tem certeza que deseja reprovar o cadastro deste avaliador ?, clicando em Ok será enviado um email de reprovação ao mesmo.');
		if(resposta == false){
			return;
		}
		var env = {};
		env.id = $(this).attr('id');
		 			console.log(env.id);
		 			$.ajax({
	                    type: 'POST',
	                    url: '../controller/ACAO/reprovar.php',
	                    data: env,
	                    dataType: 'json',

	                    success: function(data){
	                        console.log(data);
	                       $('.status').each(function(){
	                       	if( $(this).attr('id')  == env.id ){
	                       		$(this).html('');
	                       		$(this).append('<span style="color:red"><b>Reprovado</b></span>');
	                       	}
	                       }); 
	                                       
	                		$.ajax({

			                	type: 'POST',
			                    url: 'emailavaliadorrep.php',
			                    data: env,
			                    dataType: 'json',

			                    success: function(data){
			                    	alert("Email de reprovação enviado com sucesso !!!");

			                    },
			                    error: function(data){
			                    	alert("Falha ao Enviar o e-mail, clique em reprovar novamente para fazer uma nova tentativa.");
			                    },
			                    cache: false	

	                		});
	                    },
	                    error: function(data){
	                        console.log(data);
	                    },
	                    cache: false
                	});
	});
	</script>

</body>
</html>

