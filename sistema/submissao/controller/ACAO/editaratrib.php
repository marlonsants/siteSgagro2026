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
		updatemysql("id_avaliador1 = 0 ",'sl_artigo'," id_artigo = ".$idtrab." ");
		$trabalho = select("nome,id_usuario","sl_cadusu","  status = 1 AND tipocadastro = 'Avaliador' OR tipocadastro = 'Autor e Avaliador'   ");
		$dados = array('avaliadores' => $trabalho , 'avaliadorn' => $avaliador1 );
	}else{
		updatemysql("id_avaliador2 = 0 ",'sl_artigo'," id_artigo = ".$idtrab." ");
		$trabalho = select("nome,id_usuario","sl_cadusu"," status = 1 AND tipocadastro = 'Avaliador' OR tipocadastro = 'Autor e Avaliador'   ");
		$dados = array('avaliadores' => $trabalho , 'avaliadorn' => $avaliador2 );	
	}

echo json_encode($dados);
}

?>