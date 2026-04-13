<?php include("verificasessaoadm.php"); ?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
    <style type="text/css">
    	.modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-lg{
  	width: 1350px;
  	margin-top: 100px;
  }
  select{
  	width: 100px;
  }
  td + .avaliador1{
  	width: 210px;
  }
   td + .avaliador2{
  	width: 210px;
  }
  h3{
  	margin-left: 8px;

  }
  #legenda{
  	padding: 2px;
  }

  .panel-heading{
        	background-color: green;
        	border-color:#4cae4c; 
        	color: white;
        	font-weight: bold;
        }
    </style>
	<title>Envio do trabalho</title>
</head>
<body>

	<div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div>
	<br><br><br>

	<div class="container-fluid">
	<div class="container-fluid">
		

	    <div class="jumbotron">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">

				<div class="row" >
					<div class="col-md-12 col-xs-12 col-lg-12">
						<div style="background-color:white" id="legenda">
							<h3>Clique em  <button type="button" class="btn btn-success glyphicon glyphicon-ok-sign"></button> para atribuir o trabalho ao avaliador selecionado.<h3>
							<h3>Clique em  <button type="button" class="btn btn-danger glyphicon glyphicon-pencil"></button> para desfazer a atribuição.<h3>
							<h3>Clique em  <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign"></button> visualizar informaçãoes sobre o avaliador selecionado.<h3>	
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12 col-lg-12" id="trabalhos" name="trabalhos">
						
					</div>
				</div>
			</div>

	<div class="container-fluid">
	  

	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" >
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 style="color:with;"><span class="glyphicon glyphicon-info-sign"></span>Informações sobre o avaliador</h3>
	        </div>
	        <div class="modal-body">
	          <div class="row" id="infoavaliador">

	          </div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Fechar</button>
	          
	        </div>
	      </div>
	    </div>
	  </div> 
	</div>		

			
			<script type="text/javascript">
				$(document).ready(function(){ 
						var env = {}					
						$.ajax({
				            type: "POST",
				            url: "../controller/ACAO/buscatrabalhos.php",
				            data: env,
				            dataType : 'json',
				            success: function(data){
				                console.log(data);
				                $.each(data['trabalhos'],function(key,val){
				                var n = key + 1;	
				                var linha =     	'<div class="panel panel-succsess" style="margin-top:50px">';
										    linha += 					'<div class="panel-heading">Trabalho '+n+' </div>';
											linha +=	     				'<div class="row" >';
											linha +=	     					'<div class="col-md-12">';
											linha +=	     						'<table class="table" id="'+data['trabalhos'][key]['id_artigo']+'">';
											linha +=	     						'<th>Título</th><th>Área</th><th>Categoria</th><th>Instituição</th><th>Avalidor 1</th><th>Avalidor 2</th>';
											linha +=	     						'<tr><td> '+data['trabalhos'][key]['titulo']+' </td><td> '+data['trabalhos'][key]['area'] +' </td><td> '+data['trabalhos'][key]['categoria'] +' </td><td> '+data['trabalhos'][key]['instituicao'] +' </td><td class="avaliador1"> </td><td class="avaliador2">  </td></tr>';
											linha +=	     						'</table>';
											linha +=	     					'</div>';	
											linha +=	     				'</div>';
											linha +=     				'</div>';
										    linha += 				'</div>';
				                			
				                			$('#trabalhos').append(linha);
				                			if(data['trabalhos'][key]['id_avaliador1'] == 0){

				                				var select = '<select  class="selectavaliador1">';
						                				$.each(data['avaliadores'],function(indice,valor) { 
						                					select+= '<option idava='+data['avaliadores'][indice]['id_usuario']+'>'+data['avaliadores'][indice]['nome']+'</option>';
						                				});
				                					select+='</select>';
				                					$('#'+data['trabalhos'][key]['id_artigo']+' .avaliador1').append(select+' <button type="button" class="btn btn-success glyphicon glyphicon-ok-sign confirma" avaliador="1" idtrab='+data['trabalhos'][key]['id_artigo']+'></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="1" ok="nao" idtrab='+data['trabalhos'][key]['id_artigo']+'></button>');

						                	}else{
						                		var nome = 'teste';
						                		var id = 0;
						                			$.each(data['avaliadores'],function(indice,valor) { 
					                					if(data['avaliadores'][indice]['id_usuario'] == data['trabalhos'][key]['id_avaliador1']){
					                						 nome = data['avaliadores'][indice]['nome'];
					                						 id = data['avaliadores'][indice]['id_usuario'];
					                					}
					                				});
						                			$('#'+data['trabalhos'][key]['id_artigo']+' .avaliador1').append(nome+' <button class="btn btn-danger glyphicon glyphicon-pencil editar " idavaliador='+id+' idtrab='+data['trabalhos'][key]['id_artigo']+' avaliador="1"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="1" ok="sim"  idavaliador='+id+'></button>');
						                	}
						                	if(data['trabalhos'][key]['id_avaliador2'] == 0){

						                		var select = '<select  class="selectavaliador2">';
						                				$.each(data['avaliadores'],function(indice,valor) { 
						                					select+= '<option idava='+data['avaliadores'][indice]['id_usuario']+'>'+data['avaliadores'][indice]['nome']+'</option>';
						                				});
				                					select+='</select>';
				                					$('#'+data['trabalhos'][key]['id_artigo']+' .avaliador2').append(select+' <button type="button" class="btn btn-success glyphicon glyphicon-ok-sign confirma" avaliador="2" idtrab='+data['trabalhos'][key]['id_artigo']+'></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="2" ok="nao" idtrab='+data['trabalhos'][key]['id_artigo']+'></button>');

						                	}else{
						                			var nome = 'teste';
						                			var id = 0;
						                			$.each(data['avaliadores'],function(indice,valor) { 
					                					if(data['avaliadores'][indice]['id_usuario'] == data['trabalhos'][key]['id_avaliador2']){
					                						 nome = data['avaliadores'][indice]['nome'];
					                						 id = data['avaliadores'][indice]['id_usuario'];
					                					}
					                				});
						                			$('#'+data['trabalhos'][key]['id_artigo']+' .avaliador2').append(nome+' <button class="btn btn-danger glyphicon glyphicon-pencil editar" idavaliador='+id+' idtrab='+data['trabalhos'][key]['id_artigo']+' avaliador="2"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" ok="sim" avaliador="2"  idavaliador='+id+'></button>');
						                	}
				                			
				                });
				             
											
				            }, error: function(data) {
				                	console.log(data);
				               		$('#trabalhos').append('Nenhum trabalho cadastrado até o momento');
				            	}
				    });        	
				});    		
						
					
			</script>

			<script type="text/javascript">
				$(document).ready(function(){ 
					$(document).on('click','.info',function(){
						var avaliador = $(this).attr('avaliador');
						if(($(this).attr('ok') == 'sim')){
						var id_avaliador = $(this).attr('idavaliador');
						var env ={};
						env.id = id_avaliador;
						}else{
								var id_trab = $(this).attr('idtrab');
							if(avaliador == 1){
								var id_avaliador = $('#'+id_trab+' .selectavaliador1 option:selected').attr('idava');
							}else{
								var id_avaliador = $('#'+id_trab+' .selectavaliador2 option:selected').attr('idava');	
							}
								var env ={};
								env.id = id_avaliador;
						}

						
						$.ajax({
							type: "POST",
				            url: "../controller/ACAO/buscaavaliador.php",
				            data: env,
				            dataType : 'json',

				            success: function(data){

								var	linha  = '<div class="col-md-12">';
									linha += 	'<table class="table">';
									linha += 	'<th>Nome</th><th>Cidade</th><th>Endereço</th><th>Cargo</th><th>Area temática</th><th>Instituição</th><th>Celular</th><th>Tel</th><th>E-mail</th>';
									linha += 	'<tr><td> '+data[0]['nome'] +' </td><td> '+data[0]['cidade'] +' </td><td> '+data[0]['endereco']+'</td><td> '+data[0]['cargo']+'</td> <td> '+data[0]['arearesp']+'</td> <td> '+data[0]['instituicao']+'</td><td> '+data[0]['telefone']+'</td><td> '+data[0]['contato']+'</td><td> '+data[0]['email']+'</td>';
									linha += 	'</table>';
									linha += '</div>';	
									  
				            		  $('#infoavaliador').html('');	
				            		  $('#infoavaliador').append(linha);
				            		  $("#myModal").modal();	
				            		

				            },error: function(data){
				            	console.log(data);
				            }


						});

					});


				});
			</script>

			

			<script type="text/javascript">
				$(document).on('click','.confirma',function(){

					var env ={};
					var id_trab = $(this).attr('idtrab');
					var avaliador = $(this).attr('avaliador');

						if(avaliador == 1){
							var id_avaliador = $('#'+id_trab+' .selectavaliador1 option:selected').attr('idava');
							
							env.id = id_avaliador;
							env.idtrab = id_trab;
							env.avaliador = 1;
							console.log(env);
						}else{
							var id_avaliador = $('#'+id_trab+' .selectavaliador2 option:selected').attr('idava');
							
							env.id = id_avaliador;
							env.idtrab = id_trab;
							env.avaliador = 2;
							console.log(env);
						}
							$.ajax({
							type: "POST",
				            url: "../controller/ACAO/atribuirtrab.php",
				            data: env,
				            dataType : 'json',

				            success: function(data){
				            	console.log(data);
				            	if(data['verificacao'] == 1){
				            		alert('Os avaliadores 1 e 2 não podem ser os mesmos !!!');
				            		return;
				            	}
				            	if(data['instituicao'] == 'igual'){
				            		var resposta = confirm('O avaliador selecionado faz parte da mesma instituição do autor deste trabalho, deseja confirmar esta atribuição ?');
				            		if (resposta == true){

					            			$.ajax({
							                    type: 'POST',
							                    url: '../controller/ACAO/forcaratribuicao.php',
							                    data: env,
							                    dataType: 'json',

							                    success: function(data){
							                        console.log('atribuição feita com sucesso');
							                        if(data['avaliador'] == 1){
									            		$('#'+env.idtrab+' .avaliador1').html('');
									            		$('#'+env.idtrab+' .avaliador1').append(data[0]['nome']+' <button class="btn btn-danger glyphicon glyphicon-pencil editar" idavaliador='+env.id+' idtrab='+env.idtrab+' avaliador="1"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="1" ok="sim"  idavaliador='+env.id+'></button>');
									            	}else{
									            		$('#'+env.idtrab+' .avaliador2').html('');
									            		$('#'+env.idtrab+' .avaliador2').append(data[0]['nome']+' <button class="btn btn-danger glyphicon glyphicon-pencil editar" idavaliador='+env.id+' idtrab='+env.idtrab+' avaliador="2"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="2" ok="sim"  idavaliador='+env.id+'></button>');
									            	}
							                                      
							                
							                    },
							                    error: function(data){
							                        console.log(data);
							                        console.log('erro');
							                    },
							                    cache: false
							                });				            			
				            		}else{
				            			return;
				            		}
				            	}

				            	if(data['avaliador'] == 1){
				            		$('#'+env.idtrab+' .avaliador1').html('');
				            		$('#'+env.idtrab+' .avaliador1').append(data[0]['nome']+' <button class="btn btn-danger glyphicon glyphicon-pencil editar" idavaliador='+env.id+' idtrab='+env.idtrab+' avaliador="1"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="1" ok="sim"  idavaliador='+env.id+'></button>');
				            	}else{
				            		$('#'+env.idtrab+' .avaliador2').html('');
				            		$('#'+env.idtrab+' .avaliador2').append(data[0]['nome']+' <button class="btn btn-danger glyphicon glyphicon-pencil editar" idavaliador='+env.id+' idtrab='+env.idtrab+' avaliador="2"></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="2" ok="sim"  idavaliador='+env.id+'></button>');
				            	}
								
				            		

				            },error: function(data){
				            	console.log(data);
				            	alert('Este avaliador não pode avaliar este trbalho pois é de sua autoria.');
				            }


						});
						
				});
			</script>

			<script type="text/javascript">
				$(document).on('click','.editar',function(){
					var env = {};
					env.idtrab = $(this).attr('idtrab');
					env.id = $(this).attr('idavaliador');
					env.avaliador = $(this).attr('avaliador');
					console.log(env);

						$.ajax({
							type: "POST",
				            url: "../controller/ACAO/editaratrib.php",
				            data: env,
				            dataType : 'json',

				            success: function(data){
				            	console.log(data);
				            	if(data['avaliadorn']['avaliador'] == 1){
					            	$('#'+env.idtrab+' .avaliador1').html('');
					            	var select = '<select  class="selectavaliador1">';
							               				$.each(data['avaliadores'],function(indice,valor) { 
							               					select+= '<option idava='+data['avaliadores'][indice]['id_usuario']+'>'+data['avaliadores'][indice]['nome']+'</option>';
							               				});
					                				select+='</select>';
					                				$('#'+env.idtrab+' .avaliador1').append(select+' <button type="button" class="btn btn-success glyphicon glyphicon-ok-sign confirma" avaliador="1" idtrab='+env.idtrab+'></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="1" ok="nao" idtrab='+env.idtrab+'></button>');
				            	}else{
					            		$('#'+env.idtrab+' .avaliador2').html('');
					            		var select = '<select  class="selectavaliador2">';
							               				$.each(data['avaliadores'],function(indice,valor) { 
							               					select+= '<option idava='+data['avaliadores'][indice]['id_usuario']+'>'+data['avaliadores'][indice]['nome']+'</option>';
							               				});
					                				select+='</select>';
					                				$('#'+env.idtrab+' .avaliador2').append(select+' <button type="button" class="btn btn-success glyphicon glyphicon-ok-sign confirma" avaliador="2" idtrab='+env.idtrab+'></button> <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign info" avaliador="2" ok="nao" idtrab='+env.idtrab+'></button>');
				            	}
								
				            		

				            },error: function(data){
				            	console.log(data);
				            }


						});

				});
			</script>
		</div>
		</div>
	</div>
	</div>
</body>