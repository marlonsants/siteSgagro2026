	<?php 
		require_once('../config/funcoesmysql.php');
		$id = $_GET['id'];
		// busca o tabalho usando como condição o id do arquivo 
		$trabalho = select('id_artigo,titulo,resumo,abstract,palavras_chaves,key_words','sl_artigo',"idartigo = '".$id."' ");
		$trabalho = $trabalho[0];
		$id_trabalho = $trabalho['id_artigo'];
		$titulo = $trabalho['titulo'];
		$div_titulo = str_replace(' ', ',', $titulo);
		$resumo = $trabalho['resumo'];
		$palavras_chaves = $trabalho['palavras_chaves'];
		$abstract = $trabalho['abstract'];
		$key_words = $trabalho['key_words'];

		$metas = "<meta name='keywords' content='".$palavras_chaves.", ".$key_words.",".$div_titulo.", SGAgro, Simpósio em Gestão do Agronegócio, ".$titulo.", pdf'>
				<meta name='description' content='pdf do artigo/trabalho: ".$titulo."'>
				<title> ".$titulo." </title>";
	?>
	<head>
	<link rel="stylesheet" type="text/css" href="../webroot/css/bootstrap.min.css">
	<?php echo $metas; ?>
	
	</head>
		<div class="jumbotron" style="background-color: white">
			<div class="row">
				<h3 class="col-md-12 col-xs-12 col-lg-12">
					<center>Para realizar o download do arquivo, clique sobre o icone disquete localizado na parte superior do documento (Mozilla Firefox e Google Chrome) ou inferior (Opera).</center>
				</h3>
			</div>

			<div class="row"><br>
				<center class="col-md-12 col-xs-12 col-lg-12">
					<button type="button" id="voltar" name="voltar" class="col-md-4 col-md-offset-4 btn btn-danger glyphicon glyphicon-off" onclick="window.close()"> Fechar</button>
				</center>
			</div>   

			<div class="row"><br>	    
				<?php
					
					if(isset($_GET['id'])){

						$id = $_GET['id'];
						if(!empty($id)){
						echo '
							<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="http://sgagro.web1335.kinghost.net/sitesgagro/sistema/submissao/Trabalhos2016/'.$id.'.pdf" height="1200"> </iframe>
				 			</div><br/><br/>'; 
				 		}else{
				 			echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor ! </h2>
				 				</div>
				 			<br/><br/>';
				 		}			
					}
					elseif(isset($_GET['ver']) == false){		
						 	echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor </h2>
				 				</div>
				 			<br/><br/>';
				 		}else{

				 			echo'
			 				<div class="row">
				 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../SGAgro Avaliacao de trabalhos.pdf" height="1500"> </iframe>
				 				</div>
				 			<br/><br/>'; 
				 		}			
				?>
			</div>

			
		</div>

	</div><!-- fecha container-fluid-->

</body>
</html>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-91044140-1', 'auto');
		ga('send', 'pageview');

	</script>