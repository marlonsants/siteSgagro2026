<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../Chart.js-master/Chart.min.js"> </script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Trabalhos</title>

	<style type="text/css">
     
    </style>
</head>
<body>

	
    
<div class="container-fluid">
	<?php require_once("menuadm.php") ?>
    
   
    <div class="jumbotron">
    	<div class="panel panel-primary">
    		<div class="panel-heading"><h3>Indicar Trabalhos com Correções</h3></div>
    		<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Nome</th><th>E-mail</th><th>Possui Correções?</th><th>Trabalho corrigido</th><th>Trabalho</th>
							</thead>
							<tbody id="trabaprovado">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

			
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var env = {};
			$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/statuscorrecao.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                var linha;
		                var count = 0;
		                $.each(data,function(key,val){
		                	var nota1 = parseFloat(data[key]['notafinal']);
		                	var nota2 = parseFloat(data[key]['nota2']);
		                	var media =  (nota1 + nota2)/2;
		                	media = String(media);
		                	media = media.substring(0, 3);
		                	linha = "<tr>";

		                	$.each(data[key],function(indice,valor){

		                		if(indice == "titulo"){
		                			var titulom = valor.toUpperCase();
		                			linha+="<td>"+titulom+"</td>";
		                			return;
		                		}
		                		if(indice=="nome"){
		                		linha+="<td>"+data[key]['nome']+ " " + data[key]['sobrenome'] + "</td>";
		                		return	
		                		}
		                		if(indice== "sobrenome"){
		                			return;
		                		}

		                		if(indice== "statuscorre"){
		                			if(valor == 1){
		                				linha+= "<td width=160><center style='color:green;font-weight:800'><h3>Sim</h3><button class='editar btn btn-danger glyphicon glyphicon-pencil' id='"+data[key]['id_artigo']+"' ></button></center></td>";
		                				return;
		                			}
		                			if(valor == 2){
		                				linha+= "<td width=160><center style='color:red;font-weight:800'><h3>Não</h3><button class='editar btn btn-danger glyphicon glyphicon-pencil' id='"+data[key]['id_artigo']+"' ></button></center></td>";
		 
		                				return;
		                			}
		                			if(valor == null){
		                				linha+="<td width=160 class='tdcorrecao"+data[key]['id_artigo']+"'>  <input style='margin-left:20px;margin-right:10px' type='button' id='"+data[key]['id_artigo']+"' class='btn btn-success comcorrecao' value='Sim'><input type='button' id='"+data[key]['id_artigo']+"' class='btn btn-danger semcorrecao' value='Não'></td>";
		                				return;
		                			}
		                		}

		                		if(indice == 'enviado'){
		                			if(valor == 1){
		                				linha+="<td colspan='1' ><input type='submit' id='"+data[key]['id_artigo']+"' class='btn btn-primary vercor' value='Abrir'></td>";
		                				return;
	                				}
	                				if(valor == null && data[key]['statuscorre'] == 1){
	                					linha+="<td class='tdtrabc"+data[key]['id_artigo']+"'>Não enviado pelo autor</td>";
	                					return;
	                				}
	                				if(data[key]['statuscorre'] == 2){
	                					linha+="<td class='tdtrabc"+data[key]['id_artigo']+"'>Sem correção</td>";
	                					return;
	                				}
	                				if(valor == null){
	                					linha+="<td class='tdtrabc"+data[key]['id_artigo']+"'>Opção não selecionada</td>";
	                					return;
	                				}
	                				
		                		}
		                	
		                		if(indice == "idartigo"){
		                			return;
		                		}
		                		if(indice == "id_artigo"){
		                			return;
		                		}

		                		if(indice == "notafinal"){
		                			return;
		                		}
		                		if(indice == "nota2"){
		                			return;
		                		}

		                		
		                		linha+="<td>"+valor+"</td>";
		                		
		                	});


		                	
		                	
		                	linha+="<td id='td"+data[key]['id_artigo']+"' colspan='1' ><input type='submit' id='"+data[key]['idartigo']+"' class='btn btn-primary vertrab' value='Abrir'></td></tr>";
		                	$("#trabaprovado").append(linha);

		                		
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabaprovado').append('<b>nenhum trabalho foi aprovado até o momento </b>');
		            	}
		    });
		});
	</script>

	



	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click",".comcorrecao",function(){
				var env ={}
				env.id = $(this).attr("id");
				env.status = "1";
				
				var r = confirm("Confirma correções para o arquivo?");;
								if (r == true) {
									$.ajax({
				            				type: "POST",
				           					url: "../controller/ACAO/correcaoadm.php",
				            				data: env,
				            		success: function(data){
	 									console.log("O artigo com id: "+ env.id + " Necessita de Correções");
	 								}, error: function(data) {
				              		 console.log("error");
				            		}
				    				});
								$(".tdcorrecao"+env.id).html(" ");
								$(".tdcorrecao"+env.id).html("<center style='color:green;font-weight:800'><h3>Sim</h3><button class='editar btn btn-danger glyphicon glyphicon-pencil' id='"+env.id+"' ></button></center>");
								$(".tdtrabc"+env.id).html(" ");
								$(".tdtrabc"+env.id).html("Não enviado pelo autor");
								
								
								} else {
								    return;
								}
				
		    });
		});
	</script>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click",".semcorrecao",function(){
				var env ={}
				env.id = $(this).attr("id");
				env.status = "2";
				
				var r = confirm("Confirma que não há correções para o arquivo?");;
								if (r == true) {
									$.ajax({
				            				type: "POST",
				           					url: "../controller/ACAO/correcaoadm.php",
				            				data: env,
				            		success: function(data){
	 									console.log("O artigo com id: "+ env.id + " Não Necessita de Correções");
	 								}, error: function(data) {
				              		 console.log("error");
				            		}
				    				});
								$(".tdcorrecao"+env.id).html(" ");
								$(".tdcorrecao"+env.id).html("<center style='color:red;font-weight:800'><h3>Não</h3><button class='editar btn btn-danger glyphicon glyphicon-pencil' id='"+env.id+"' ></button></center>");
								$(".tdtrabc"+env.id).html(" ");
								$(".tdtrabc"+env.id).html("Sem correção");
								} else {
								    return;
								}
				
		    });
		});
	</script>

<script type="text/javascript">
		$(document).on("click",".vertrab",function(){
		var id = $(this).attr("id");
			window.open("vertrabalho.php?id="+id);
		});
</script>

<script type="text/javascript">
		$(document).on("click",".vercor",function(){
		var id = $(this).attr("id");
			window.open("vercorrecao.php?id="+id);
		});
</script>

<script type="text/javascript">
	$(document).on("click",".editar",function(){
		var r = confirm("deseja alterar sua opção ?");
			if(r == true){
				var id = $(this).attr('id');
				location.href ="../controller/ACAO/editaropc.php?id="+id;

			}else{
				return;
			}
		});
</script>

</div>
</body>
</html>