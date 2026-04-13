<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");


$instituicao = array();
session_start();
$inst = $_SESSION["instituicao"];
$id_usuario = $_SESSION['idusu'];
$emailusu = $_SESSION['usuario'];
$instituicaoavaliador = strtoupper($inst);
$vez = array('vez' => 2 );

if($id_usuario == 71 || $id_usuario == 128 || $id_usuario == 132){
	$trabalhosava1 = select("DISTINCT t.avaliacao_concluida1, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND (t.id_avaliador1 = '.$id_usuario.') AND (t.idartigo <> "") ') + $vez;	
	$trabalhosava2 = select("DISTINCT t.avaliacao_concluida2, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas2 as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND (t.id_avaliador2 = '.$id_usuario.') AND (t.idartigo <> "")  ') + $vez;

	$trabalhosfiltrado = array();
	$qtdd = count($trabalhosava1) - 1;
	$qtdd2 = count($trabalhosava2) - 1;

	if($trabalhosava1 && $qtdd > 0 && $trabalhosava2 & $qtdd2 > 0 ){
		$todostrab = array_merge($trabalhosava1, $trabalhosava2); 
		array_push($trabalhosfiltrado, $todostrab);
	}

	if($trabalhosava1 && $qtdd2 == 0 && $qtdd > 0  ){
		array_push($trabalhosfiltrado, $trabalhosava1);
	}
	if($trabalhosava2 && $qtdd == 0  && $qtdd2 > 0 ){
		array_push($trabalhosfiltrado, $trabalhosava2);
	}

	echo json_encode($trabalhosfiltrado);
	return;
}

$area  =  select('arearesp','sl_cadusu','id_usuario = '.$id_usuario.' ');
$arearesp = $area[0]['arearesp'];
$atribuicoes = select('count("id_avaliador1") as natrib','sl_artigo','id_avaliador1 = '.$id_usuario.' ');
$atribuicoes2 = select('count("id_avaliador2") as natrib','sl_artigo','id_avaliador2 = '.$id_usuario.' ');
$natribuicao = $atribuicoes[0]['natrib'] + $atribuicoes2[0]['natrib'];
$limiteatrib = 5 - $natribuicao;
$trabalhosava1 = select("DISTINCT t.avaliacao_concluida1, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND (t.id_avaliador1 = '.$id_usuario.') AND (t.idartigo <> "")  LIMIT 5') + $vez;	
$trabalhosava2 = select("DISTINCT t.avaliacao_concluida2, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas2 as n ON t.id_artigo=n.id_artigo",'t.email != "'.$emailusu.'" AND (t.id_avaliador2 = '.$id_usuario.') AND (t.idartigo <> "")  LIMIT 5') + $vez;				 




$trabalhosfiltrado = array();
$qtdd = count($trabalhosava1) - 1;
$qtdd2 = count($trabalhosava2) - 1;
$somaqtdd = $qtdd + $qtdd2;
// echo $qtdd.' '.$qtdd2.'<br>';
// echo $somaqtdd;



if($trabalhosava1 && $qtdd > 0 && $trabalhosava2 & $qtdd2 > 0 ){
	
	$todostrab = array_merge($trabalhosava1, $trabalhosava2); 
	array_push($trabalhosfiltrado, $todostrab);
	

		
}

if($trabalhosava1 && $qtdd2 == 0 && $qtdd > 0  ){
	
	array_push($trabalhosfiltrado, $trabalhosava1);
	
		
}
if($trabalhosava2 && $qtdd == 0  && $qtdd2 > 0 ){
	
	array_push($trabalhosfiltrado, $trabalhosava2);
	
}


if( $somaqtdd < 5  ){
		


$trabalhos = select("DISTINCT id_artigo,instituicao,idartigo,titulo,area,categoria,email,avaliacao_concluida1","sl_artigo ",'email != "'.$emailusu.'" AND id_avaliador1 = 0 AND id_avaliador2 <> '.$id_usuario.' AND area = "'.$arearesp.'" AND idartigo <> "" LIMIT '.$limiteatrib.' ');	

$qtddtrabalho = count($trabalhos);
	
	if($qtddtrabalho > 0){
		
		foreach ($trabalhos as $indice => $valor) {
			$count = 0;
			$inst = $trabalhos[$indice]['instituicao'];
			$instautor = strtoupper($inst);
			$instituicaoautor = explode(' ', $instautor);
					

			foreach ($instituicaoautor as $key => $value) {

				$resultado = preg_match("/".$value."/", $instituicaoavaliador, $matches);
						
				
					if($resultado === 1 & $value != 'DE' & $value != 'DO' & $value != 'DA' & $value != ' ' & $value != 'UNIVERSIDADE'   & $value != '-' & $value != 'FACULDADE'  ){
						$count++;
						
					}
				}

				$palavrasiguais = $count;
			
			

			
				if($palavrasiguais < 1){
				$vez = array('vez' => 1 );

				updatemysql("id_avaliador1 = ".$id_usuario." ",'sl_artigo'," id_artigo = ".$trabalhos[$indice]['id_artigo']." ");

				$trabalho = select("DISTINCT t.avaliacao_concluida1, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas as n ON t.id_artigo=n.id_artigo",'t.id_artigo = "'.$trabalhos[$indice]['id_artigo'].'" AND t.idartigo <> ""   ') + $vez;
					array_push($trabalhosfiltrado, $trabalho);
					
					
				}else{
					
				}


		}

	}else{
		
		$trabalhos = select("DISTINCT avaliacao_concluida2, id_artigo,instituicao,idartigo,titulo,area,categoria,email","sl_artigo ",'email != "'.$emailusu.'" AND id_avaliador2 = 0 AND id_avaliador1 <> '.$id_usuario.' AND area = "'.$arearesp.'" AND idartigo <> "" LIMIT '.$limiteatrib.' ');	

		$qtddtrabalho = count($trabalhos);
	
		if($qtddtrabalho > 0){

			foreach ($trabalhos as $indice => $valor) {
				$count = 0;
				$inst = $trabalhos[$indice]['instituicao'];
				$instautor = strtoupper($inst);
				$instituicaoautor = explode(' ', $instautor);
						

				foreach ($instituicaoautor as $key => $value) {

					$resultado = preg_match("/".$value."/", $instituicaoavaliador, $matches);
							
					
						if($resultado === 1 & $value != 'DE' & $value != 'DO' & $value != 'DA' & $value != ' ' & $value != 'UNIVERSIDADE'   & $value != '-' & $value != 'FACULDADE'  ){
							$count++;
							
						}
					}

					$palavrasiguais = $count;
				
				

				
					if($palavrasiguais < 3){
					$vez = array('vez' => 1 );

					updatemysql("id_avaliador2 = ".$id_usuario." ",'sl_artigo'," id_artigo = ".$trabalhos[$indice]['id_artigo']." ");

					$trabalho = select("DISTINCT t.avaliacao_concluida2, t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,t.email,n.nota1,n.nota2,n.nota3,n.nota4,n.nota5,n.nota6,n.nota7,n.nota8,n.nota9,n.nota10,n.notafinal","sl_artigo as t  LEFT OUTER JOIN sl_notas2 as n ON t.id_artigo=n.id_artigo",'t.id_artigo = "'.$trabalhos[$indice]['id_artigo'].'" AND t.idartigo <> ""   ') + $vez;
						array_push($trabalhosfiltrado, $trabalho);
						
						
					}else{
						
					}


			}

		}else{

			

		}

	}

}
 // echo'<pre>';
 // print_r($trabalhosfiltrado);
 // echo'</pre>';

 


echo json_encode($trabalhosfiltrado);


?>