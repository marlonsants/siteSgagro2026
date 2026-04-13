<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

if(isset($_POST)){
$id = $_POST['id'];
$idtrab = $_POST['idtrab'];
$avaliador = $_POST['avaliador'];
$avaliador1  = array('avaliador' => 1 , );
$avaliador2 = array('avaliador' => 2 , );

if($avaliador == 1){
	$verifica= select('id_avaliador2','sl_artigo',"id_artigo = ".$idtrab." LIMIT 1 ");
	if($verifica[0]['id_avaliador2'] == $id){
		$verificacao = array('verificacao' => 1);
		echo json_encode($verificacao);
		exit();
	}
}

if($avaliador == 2){
	$verifica= select('id_avaliador1','sl_artigo',"id_artigo = ".$idtrab." LIMIT 1 ");
	if($verifica[0]['id_avaliador1'] == $id){
		$verificacao = array('verificacao' => 1);
		echo json_encode($verificacao);
		exit();
	}
}

$busca = select('email','sl_cadusu',"id_usuario = ".$id." ");
$emailavaliador = $busca[0]['email'];

$busca2 = select('email','sl_artigo',"email = '".$emailavaliador."' and id_artigo = ".$idtrab." ");
$busca3 = select("instituicao","sl_cadusu","id_usuario = ".$id." ");
$busca4 = select('email','sl_artigo',"id_artigo = ".$idtrab." LIMIT 1 ");
$emailusuario = $busca4[0]['email'];

$busca5 = select("instituicao","sl_cadusu","email = '".$emailusuario."' ");

$instituicaoavaliador = strtoupper($busca3[0]['instituicao']);

			$count = 0;
			$inst = $busca5[0]['instituicao'];
			$instautor = strtoupper($inst);
			$instituicaoautor = explode(' ', $instautor);
					

			foreach ($instituicaoautor as $key => $value) {

				$resultado = preg_match("/".$value."/", $instituicaoavaliador, $matches);
						
				
					if($resultado === 1 & $value != 'DE' & $value != 'DO' & $value != 'DA' & $value != ' ' & $value != 'UNIVERSIDADE'   & $value != '-' & $value != 'FACULDADE'  ){
						$count++;
						
					}
				}

				$palavrasiguais = $count;

				if($palavrasiguais > 2){
					$trava2 = array('instituicao' => 'igual' , );
				}else{
					$trava2 = array('instituicao' => 'diferente' , );
				}


	if($busca2){
	$trava1 = array('email' => 'igual' , );
	}else{
		$trava1 = array('email' => 'diferente' , );
	}





	if($avaliador == 1 && $trava1['email'] == 'diferente'){
		if($trava2['instituicao'] == 'diferente'){
		updatemysql("id_avaliador1 = ".$id." ",'sl_artigo'," id_artigo = ".$idtrab." ");
		}
		$trabalho = select("nome","sl_cadusu","id_usuario = ".$id." ") + $avaliador1 + $trava1 + $trava2 ;
	}elseif($trava1['email'] == 'diferente'){
		if($trava2['instituicao'] == 'diferente'){
		updatemysql("id_avaliador2 = ".$id." ",'sl_artigo'," id_artigo = ".$idtrab." ");
		}
		$trabalho = select("nome","sl_cadusu","id_usuario = ".$id." ") + $avaliador2 + $trava1 + $trava2 ;	
	}

echo json_encode($trabalho);
	// echo'<pre>';
 // print_r($trabalho);
 // echo'</pre>';
}

?>