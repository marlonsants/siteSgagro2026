<?php
	require_once('../config/funcoesmysql.php');
	require_once('../sistema/submissao/MPDF60/mpdf.php');	// mPDF 6.0

					if(isset($_GET['id'])){
						
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
						// busca o grupo do trabalho usando como condição o id do trabalho 
						$grupo = select('*','sl_grupo','id_artigo = '.$id_trabalho.' ');
						// echo '<pre>';
						// echo print_r($trabalho);
						// echo '</pre>';
						// busca o nome dos autores do trabalho
						foreach ($grupo as $key => $value) {
								foreach ($value as $indice => $valor) {
									
									if($valor != 0 ){
										if($indice == 'id_usuario1' || $indice == 'id_usuario2' || $indice == 'id_usuario3' || $indice == 'id_usuario3' || $indice == 'id_usuario4' || $indice == 'id_usuario5'   ){
											$autor = select('*','sl_cadusu','id_usuario = '.$valor.' ');
											/*$body .= '<center><p><b>'.$autor[0]['nome'].' '.$autor[0]['sobrenome'].'</b></p></center>';
											$body .= '<center><p>'.$autor[0]['instituicao'].'</p></center>';
											$body .= '<center>('.$autor[0]['email'].')</center><br>';*/

											$body .= "<p class='autores'>
														<div id='p1' class='p1' align='center'><b>".$autor[0]['nome']." ".$autor[0]['sobrenome']."</b></div>
														<div id='p2' class='p2' align='center'>(".$autor[0]['email'].")</div>
														<div id='p3' class='p3' align='center'>".$autor[0]['instituicao']."</div>
													</p>
													";

										}
										
									}
									
								}
							}	

						
						if(!empty($id)){
								ob_clean();//Limpa o buffer de saída

								$mpdf = new mPDF();

								$html = "
									<head>
										<meta charset='utf-8'>
										<meta name='keywords' content='".$palavras_chaves.", ".$key_words.",".$div_titulo.", SGAgro, Simpósio em Gestão do Agronegócio, ".$titulo.", pdf'>
										<meta name='description' content='pdf do artigo/trabalho: ".$titulo."'>
										<title> ".$titulo." </title>
										

									</head>

									<body>
									<div align='center'>
										<span><img src='../sistema/submissao/images/unesp.jpg' width=10%></span>
										<span><img id='img' src='../sistema/submissao/images/SGAGRO LOGO.png' width=15%></span>
										<span><img src='../sistema/submissao/images/goagro.png' width=15%></span>
									</div>
									<h2 align='center' color='rgb(0,32,96)'>ANAIS</h2>

									<h3 align='center'> ".$titulo." </h3>

									".$body."

									<p align='left'><b>RESUMO:<b></p>
									<p align='left'  class='p4'> ".$resumo."<br><b>Palavras Chaves: </b>".$palavras_chaves." </p>
									<p align='left'><b>ABSTRACT:<b></p>
									<p align='left'  class='p4'> ".$abstract."<br><b>Key Words: </b>".$key_words." </p>
									</body>

									<style type='text/css'>
										#img{margin-left: 20%; margin-right: 20%;}
										/*h2,p,h5,div{font-family: 'Arial';}*/
										.p1{font-size: 12px}
										.p2{font-size: 12px}
										.p3{font-size: 12px}
										.p4{font-size: 14px; font-family:'Times New Roman',Times, serif;}
										.autores{margin-bottom: -1px}
									</style>
									";

								$mpdf->WriteHTML($html);

								$mpdf->SetImportUse();

								$pagecount = $mpdf->SetSourceFile("../sistema/submissao/Trabalhos2017/".$id.".pdf");

								for ($i=1; $i<=($pagecount); $i++) {
								                $mpdf->AddPage();
								                $import_page = $mpdf->ImportPage($i);
								                $mpdf->UseTemplate($import_page);
								            }

								$mpdf->Output($id.'.pdf','i'); //Gera o pdf com o nome em letra maiuscula na hora de baixar o pdf pra deixar minuscula  basta trocar o 'I' por 'i'
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