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
		
		updatemysql("id_avaliador1 = ".$id." ",'sl_artigo'," id_artigo = ".$idtrab." ");
		
		$trabalho = select("nome","sl_cadusu","id_usuario = ".$id." ") + $avaliador1 ;
	}else{
		
		updatemysql("id_avaliador2 = ".$id." ",'sl_artigo'," id_artigo = ".$idtrab." ");
		
		$trabalho = select("nome","sl_cadusu","id_usuario = ".$id." ") + $avaliador2 ;	
	}

echo json_encode($trabalho);
}
?>