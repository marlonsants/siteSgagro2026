<?php header ('Content-type: text/html; charset=UTF-8'); ?>

<?php include("../funcoes/funcoesmysql.php"); ?>
<?php

$arquivo = $_FILES['arquivo'];
$arquivoF = $_FILES['arquivo']; 
$arq = $_FILES['arquivo']['name'];
$tipo = $_FILES['arquivo']['type'];
$tamanho = $_FILES['arquivo']['size'];
$nametemp = $_FILES['arquivo']['tmp_name'];
$arqerro = $_FILES['arquivo']['error'];
$tipodef = "application/pdf";
$tamnhodef = 1024*1024*2; 
$idartigo = $_POST['idartigo'];


		
		if(isset($arq)){
					if($tipo != $tipodef){
						echo '<script>location.href="../../view/correcao.php?erro=1";</script>';
						
						
						
			
					}else if ($tamanho > $tamnhodef){
						echo '<script>location.href="../../view/correcao.php?erro=2";</script>';
						
						
			
					}else if ($tamanho <= $tamnhodef && $tipo == $tipodef && $arqerro == 0) {
						

					    $extensao = explode(".", $arq);
					     
					    $id = $idartigo.'.'.$extensao[1];

						$pasta = '../../trabalhoscorrigidos/'.$id;

						if($arqerro == 0){
							session_start();
							    $upload = move_uploaded_file($nametemp,$pasta);
							    insert("sl_trabcorrigido",'id_arquivo,enviado',' '.$idartigo.',1');
							   
							    echo '<script>location.href="../../view/correcao.php?msg=1";</script>';

						}else{
							echo '<script>location.href="../../view/correcao.php?erro=1";</script>';
						}
					    
					    	
					    
					   
					}
					
		}
		?>