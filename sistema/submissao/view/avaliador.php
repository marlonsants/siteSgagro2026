<?php include("verificasessao.php"); ?>

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
	<title>Avaliadores</title>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Trabalho a Avaliar</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->

	<div class="jumbotron">
	    	
		    	<div class="row">
		    		<div class="col-md-12 col-xs-12 col-lg-12">
		    			<center>
			    			<table id="trabalhoscadastrados" style="margin-left:-50px; overflow: auto;" class="table table-hover table-condensed">
			    			<tr> 
			    				<th> Id </th>
			    				<th> Título </th>
			    				<th> Area </th>
			    				<th> Categoría </th>
			    				<th> Resumo </th>
			    			</tr>	

			    			</table>
			    		</center>
		    		</div>
		    	</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){ 
				var env = {};
					
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/atribuirtrab.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                
		                console.log(data);
		                
		                var count = 0;
		              if( count < 8){
		                $.each(data,function(key,val){
		                	
		                		console.log(data);
		                	
		                	var linha = '<tr> <td>'+data[count]['id_artigo']+'</td> <td>'+data[count]['titulo']+'</td> <td>'+data[count]['area']+'</td> <td>'+data[count]['categoria']+'</td> <td>'+data[count]['resumo']+' <td> <form method="post" action="avaliar.php"> <input id="'+data[count]['id_artigo']+'" class="btn btn-success" name="trab" type="submit" value="Avaliar">  </input> <input type="hidden" name="idartigo" value="'+data[count]['id_artigo']+'"</input> </form></td></tr>';
		                	$('#trabalhoscadastrados').append(linha);
		                	count++;
		                
		                });
		             }

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabalhoscadastrados').append('<b>Nenhum trabalho cadastrado até o momento</b>');
		            	}
		    		});
				});
	</script>

	
	

</body>
</html>