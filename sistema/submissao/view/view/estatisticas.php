<?php include("verificasessaoadm.php"); ?>
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
	<title>Painel de Estatisticas</title>
	<style type="text/css">
		#grafico1{height: 350px;}
		#grafico2{height: 350px;}
		#box1{background-color: #990000; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box2{background-color: #009900; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box3{background-color: #000099; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box4{background-color: #999900; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box5{background-color: #990099; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box6{background-color: #009999; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box7{background-color: #999999; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
		#box8{background-color: #000000; color: white; border-radius: 4px; font-size: 14px; font-weight: bold; }
	</style>

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

<div class="col-md-12" style="position: fixed; z-index: 9999;"><?php include("menuadm.php"); ?></div>
<br><br><br>
	<div class="container-fluid">

	<div class="container-fluid">
	
		<!--div class="row">
			<table>
				<tr><th>Total de trabalhos cadastrados por categoria</th>	<th>Total de trabalhos cadastrados por Área temática</th>	<th>Total de trabalhos aprovados por categoria</th></tr>
				<tr><td>Resumo expandido</td></tr>
				<tr><td>Relato técnico</td></tr>
				<tr><td>Artigo completo</td></tr>
			</table>
		</div-->

        <div class="row" >
			
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Autores cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalhos cadastrados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Trabalhos aprovados</b>
					</center>
				</div>

				<div class="col-md-3 col-xs-3 col-lg-3">
					<center class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" 
					style="color: white; background-color: green ; padding:15px; border-radius:30px 30px 0px 0px">
						<b>Inscrições pagas</b>
					</center>
				</div>
			</div>

			<div class ="col-md-12 col-lg-12 col-xs-12"><!--ajuste-->
				<div class="panel panel-default" style="border-radius:30px">
					<div class="panel-heading" style="background-color: green ; padding:15px; border-radius:30px 30px 0px 0px"></div>
					
					<table> 
						<tr>
							<td class="col-md-3 col-xs-3 col-lg-3" >
								<center id="usuarios">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="trabalhos">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="trabaprovado">
								
								</center>
							</td>

							<td class="col-md-3 col-xs-3 col-lg-3">
								<center id="inscricao">
								
								</center>
							</td>
						</tr>
					</table>
				</div>
			</div><!--Ajuste-->
		</div><br>

   	</div>	
		
   	
	    
    	
   	<div class="container-fluid">
		
<!--div class="jumbotron" style="background-color: #fff"-->
	   
	    <div class="row">

	        	<div class="col-md-4 col-xs-4 col-lg-4">
	        		<div class="jumbotron" style="background-color: #fff">
	        			<div class="row">
	        				<center><h4>Total de trabalhos cadastrados por categoria</h4></center></br>
	        				<div class="col-md-5 col-xs-5 col-lg-5" style="margin-left:-40px">
	        					<br>
	        					
	        					<p id="box1">Resumo Expandido</p>
								<p id="box2">Relato Técnico</p>
								<p id="box3">Artigo Completo</p>
	        				</div>
	        				<div class="col-md-7 col-xs-7 col-lg-7"><canvas id="GraficoDonut" width="180" heigth="200"></canvas></div>
	        			</div>
	        		</div>
	        	</div>

	        	<div class="col-md-4 col-xs-4 col-lg-4">
		        	<div class="jumbotron" style="background-color: #fff">
		        		<div class="row">
		        			<center><h4>Total de trabalhos cadastrados por Área temática</h4></center></br>
		        			<div class="col-md-5 col-xs-5 col-lg-5" style="margin-left:-40px">
		        				<spam id="box1">Gestão</spam></br>
								<spam id="box2">Desenvolvimento</spam></br>
								<spam id="box3">Economia</spam></br>
								<spam id="box4">Empreendedorismo</spam></br>
								<spam id="box5">Estratégia</spam></br>
								<spam id="box6">Logísticas</spam></br>
								<spam id="box7">Marketing</spam></br>
								<spam id="box8">Sustentabilidade</spam></br>
		        			</div>
		        			<div class="col-md-7 col-xs-7 col-lg-7"><canvas id="GraficoDonut2" width="180" heigth="200" ></canvas></div>
		        		</div>
	                </div>
	        	</div>

	        	<div class="col-md-4 col-xs-4 col-lg-4">
	        		<div class="jumbotron" style="background-color: #fff">
	        			<div class="row">
	        				<center><h4>Total de trabalhos aprovados por categoria</h4></center></br>
	        				<div class="col-md-5 col-xs-5 col-lg-5" style="margin-left:-40px">
	        					<br>
	        					
	        					<p id="box1">Resumo Expandido</p>
								<p id="box2">Relato Técnico</p>
								<p id="box3">Artigo Completo</p>
	        				</div>
	        				<div class="col-md-7 col-xs-7 col-lg-7"><canvas id="GraficoDonut3" width="180" heigth="200"></canvas></div>
	        			</div>
	        		</div>
	        	</div>
			                
		</div>
<!--/div-->
		<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
		        <div class="jumbotron" style="background-color: #fff">
		           <center>
		           		<h4>Total de cadastro por</h4>
		           		<select class="form-control" id="opcao">
		           			<option id="regiao">Região</option>
		           			<option id="estado">Estado</option>
		           		</select>
		           		<div class="row" id="grafico1">
		           			<canvas id="GraficoBarra" height="80" ></canvas>
		           		</div>
		           		<div class="row" style="display:none" id="grafico2">
		           			<canvas id="GraficoBarra2" height="80" ></canvas>
		           		</div>	

		           </center>
		            	
                </div>
                			
            </div>
        </div>

         

		
			                
    <div><!--fim container-->

    	

    	
    <?php include('../controller/funcoes/funcoesmysql.php');?>
    <?php include('../controller/funcoes/placar.php'); ?>
    <?php include('../controller/funcoes/graficomodular.php'); ?>
    <?php include('../controller/funcoes/graficobarra.php'); ?>

<script type="text/javascript">
		
	$(document).ready(function(){ 
	        var ctx = document.getElementById("GraficoDonut").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data, options);

	        var ctx = document.getElementById("GraficoDonut2").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data2, options);

	        var ctx = document.getElementById("GraficoDonut3").getContext("2d");
	        var PizzaChart = new Chart(ctx).Doughnut(data3, options);

	        var ctx = document.getElementById("GraficoBarra").getContext("2d");
	        var BarChart = new Chart(ctx).Bar(databarra, options);
	});        

    </script>

    <script type="text/javascript">
		$(document).ready(function(){ 
	    	$(document).on('change','#opcao',function(){ 
	    		var opcao = $('#opcao option:selected').val();
	    		console.log(opcao);

	    		if(opcao == 'Região'){
	    			$('#grafico1').fadeIn();
	    			$('#grafico2').fadeOut();
	    			var ctx = document.getElementById("GraficoBarra").getContext("2d");
	        		var BarChart = new Chart(ctx).Bar(databarra, options);
	        		return;
	    		}else{
	    			
	    			$('#grafico2').fadeIn();
	    			$('#grafico1').fadeOut();
	    			var ctx = document.getElementById("GraficoBarra2").getContext("2d");
	       			var BarChart = new Chart(ctx).Bar(databarra2, options);
	       			return;
	    		}
	    	});
	    });	
    </script>


</body>
</html>