<?php

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$numeronota = $_POST['nota'];
$valornotabruta = $_POST['valor'];
$valornota = number_format($valornotabruta, 2,'.','');
$idtrabalho = $_POST['idtrabalho'];
$email = $_POST['email'];
session_start();
$id_avaliador = $_SESSION['idusu'];

$avaliador1 = select('id_avaliador1','sl_artigo'," id_avaliador1 = ".$id_avaliador." AND id_artigo = ".$idtrabalho." ");
	if($avaliador1){

		$busca = select('id_artigo','sl_notas'," id_artigo = ".$idtrabalho." ");

			if(empty($busca)){
				
				$rp = insert('sl_notas',"nota".$numeronota.",id_artigo,email",' '.$valornota.', '.$idtrabalho.', "'.$email.'" ');

				if ($rp) {
					$buscanotas = select('*','sl_notas','id_artigo = '.$idtrabalho.' ');
					$nota = $buscanotas[0];
					$notafinal = ( ( $nota['nota1'] * 1 ) + ( $nota['nota2'] * 1 ) + ( $nota['nota3'] * 2 ) + ( $nota['nota4'] * 1 ) + ( $nota['nota5'] * 2 ) + ( $nota['nota6'] * 2 ) + ( $nota['nota7'] * 1 ) + ( $nota['nota8'] * 2 ) + ( $nota['nota9'] * 1 ) + ( $nota['nota10'] * 2 ) ) / 15;
					updatemysql("notafinal = ".$notafinal." ",'sl_notas'," id_artigo = ".$idtrabalho." ");
					$result = 'funcionou inserção avaliador1 feita';
					$notafinalformat = number_format($notafinal, 3,'.','');
					$arraynotafinal = array('notafinal' =>$notafinalformat,'result' =>$result);
					echo json_encode($arraynotafinal);
				}
				
			}else{
				
				$rp = updatemysql("nota".$numeronota." = ".$valornota." ",'sl_notas'," id_artigo = ".$idtrabalho." ");

				if ($rp) {
					$buscanotas = select('*','sl_notas','id_artigo = '.$idtrabalho.' ');
					$nota = $buscanotas[0];
					$notafinal = ( ( $nota['nota1'] * 1 ) + ( $nota['nota2'] * 1 ) + ( $nota['nota3'] * 2 ) + ( $nota['nota4'] * 1 ) + ( $nota['nota5'] * 2 ) + ( $nota['nota6'] * 2 ) + ( $nota['nota7'] * 1 ) + ( $nota['nota8'] * 2 ) + ( $nota['nota9'] * 1 ) + ( $nota['nota10'] * 2 ) ) / 15;
					updatemysql("notafinal = ".$notafinal." ",'sl_notas'," id_artigo = ".$idtrabalho." ");
					$result = 'funcionou atualização avaliador1 feita';
					$notafinalformat = number_format($notafinal, 3,'.','');
					$arraynotafinal = array('notafinal' =>$notafinalformat,'result' =>$result);
					echo json_encode($arraynotafinal);

					// soma as duas notas para saber se o trbalho foi aprovado
					$buscanotas2 = select('*','sl_notas2','id_artigo = '.$idtrabalho.' ');
					if($buscanotas2){
					$nota2 = $buscanotas2[0];
					$notafinal2 = ( ( $nota2['nota1'] * 1 ) + ( $nota2['nota2'] * 1 ) + ( $nota2['nota3'] * 2 ) + ( $nota2['nota4'] * 1 ) + ( $nota2['nota5'] * 2 ) + ( $nota2['nota6'] * 2 ) + ( $nota2['nota7'] * 1 ) + ( $nota2['nota8'] * 2 ) + ( $nota2['nota9'] * 1 ) + ( $nota2['nota10'] * 2 ) ) / 15;
					}else{
						$notafinal2 = 0;
					}
					$mediafinal = $notafinal + $notafinal2;
					if($mediafinal >= 5){
					updatemysql("status = 1 ",'sl_artigo'," id_artigo = ".$idtrabalho." ");
					}else{
						updatemysql("status = 2 ",'sl_artigo'," id_artigo = ".$idtrabalho." ");
					}
				}
			}

	}

$avaliador2 = select('id_avaliador2','sl_artigo'," id_avaliador2 = ".$id_avaliador." AND id_artigo = ".$idtrabalho." ");

	if($avaliador2){

		$busca = select('id_artigo','sl_notas2'," id_artigo = ".$idtrabalho." ");

			if(empty($busca)){
				
				$rp = insert('sl_notas2',"nota".$numeronota.",id_artigo,email",' '.$valornota.', '.$idtrabalho.', "'.$email.'" ');

				if ($rp) {
					$buscanotas = select('*','sl_notas2','id_artigo = '.$idtrabalho.' ');
					$nota = $buscanotas[0];
					$notafinal = ( ( $nota['nota1'] * 1 ) + ( $nota['nota2'] * 1 ) + ( $nota['nota3'] * 2 ) + ( $nota['nota4'] * 1 ) + ( $nota['nota5'] * 2 ) + ( $nota['nota6'] * 2 ) + ( $nota['nota7'] * 1 ) + ( $nota['nota8'] * 2 ) + ( $nota['nota9'] * 1 ) + ( $nota['nota10'] * 2 ) ) / 15;
					updatemysql("notafinal = ".$notafinal." ",'sl_notas2'," id_artigo = ".$idtrabalho." ");
					$result = 'funcionou inserção avaliador2 feita feita';
					$notafinalformat = number_format($notafinal, 3,'.','');
					$arraynotafinal = array('notafinal' =>$notafinalformat,'result' =>$result);
					echo json_encode($arraynotafinal);
				}
				
			}else{
				
				$rp = updatemysql("nota".$numeronota." = ".$valornota." ",'sl_notas2'," id_artigo = ".$idtrabalho." ");

				if ($rp) {
					$buscanotas = select('*','sl_notas2','id_artigo = '.$idtrabalho.' ');
					$nota = $buscanotas[0];
					$notafinal = ( ( $nota['nota1'] * 1 ) + ( $nota['nota2'] * 1 ) + ( $nota['nota3'] * 2 ) + ( $nota['nota4'] * 1 ) + ( $nota['nota5'] * 2 ) + ( $nota['nota6'] * 2 ) + ( $nota['nota7'] * 1 ) + ( $nota['nota8'] * 2 ) + ( $nota['nota9'] * 1 ) + ( $nota['nota10'] * 2 ) ) / 15;
					updatemysql("notafinal = ".$notafinal." ",'sl_notas2'," id_artigo = ".$idtrabalho." ");
					$result = 'funcionou atualização avaliador2 feita';
					$notafinalformat = number_format($notafinal, 3,'.','');
					$arraynotafinal = array('notafinal' =>$notafinalformat,'result' =>$result);
					echo json_encode($arraynotafinal);

					// soma as duas notas para saber se o trbalho foi aprovado
					$buscanotas2 = select('*','sl_notas','id_artigo = '.$idtrabalho.' ');
					if($buscanotas2){
					$nota2 = $buscanotas2[0];
					$notafinal2 = ( ( $nota2['nota1'] * 1 ) + ( $nota2['nota2'] * 1 ) + ( $nota2['nota3'] * 2 ) + ( $nota2['nota4'] * 1 ) + ( $nota2['nota5'] * 2 ) + ( $nota2['nota6'] * 2 ) + ( $nota2['nota7'] * 1 ) + ( $nota2['nota8'] * 2 ) + ( $nota2['nota9'] * 1 ) + ( $nota2['nota10'] * 2 ) ) / 15;
					}else{
						$notafinal2 = 0;
					}
					$mediafinal = $notafinal + $notafinal2;
					if($mediafinal >= 5){
					updatemysql("status = 1 ",'sl_artigo'," id_artigo = ".$idtrabalho." ");
					}else{
						updatemysql("status = 2 ",'sl_artigo'," id_artigo = ".$idtrabalho." ");
					}
				}
			}
	}

 



?>