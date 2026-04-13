<?php include("../controller/funcoes/funcoesmysql.php"); ?>
<?php
session_start();
$arquivo = $_FILES['arquivo'];
$arquivoF = $_FILES['arquivo']; 
$arq = $_FILES['arquivo']['name'];
$tipo = $_FILES['arquivo']['type'];
$tamanho = $_FILES['arquivo']['size'];
$nametemp = $_FILES['arquivo']['tmp_name'];
$arqerro = $_FILES['arquivo']['error'];
$tipodef = "application/pdf";
$tamnhodef = 1024*1024*2; 
$idtbartigo = $_POST['idartigo'];


		
		if(isset($arq)){
					if($tipo != $tipodef){
						echo '<script>location.href="../view/submit.php?erro=1";</script>';
						
						
						
			
					}else if ($tamanho > $tamnhodef){
						echo '<script>location.href="../view/submit.php?erro=2";</script>';
						
						
			
					}else if ($tamanho <= $tamnhodef && $tipo == $tipodef && $arqerro == 0) {
						

					    $extensao = explode(".", $arq);
					     
					    $id = uniqid(rand()) .'.'. $extensao[1];

						$pasta = '../Trabalhos2017/'.$id;

						if($arqerro == 0){
							
							    $upload = move_uploaded_file($nametemp,$pasta);
							    $idart = explode(".", $id);
							    
							    $email = $_SESSION['usuario'];
							   
							    $idartigo = $idart[0];

							    
								
							   
				    			updatemysql("idartigo = '" .$idartigo. "'", 'sl_cadusu', "email = '".$email."'"); 
				    			

				    			
							    $email = $_SESSION['usuario'];
								updatemysql('publicado = 2','sl_cadusu',"email = '".$email."' ");
								updatemysql("idartigo = '".$idartigo."'", "sl_artigo","id_artigo = ".$idtbartigo." ");
								echo '<script>location.href=" ../view/submit.php?msg=1";</script>';
								
							


						}else{
							echo '<script>location.href="../view/submit.php?erro=1";</script>';
						}
					    
					    	
					    
					   
					}
					
		}
		?>
