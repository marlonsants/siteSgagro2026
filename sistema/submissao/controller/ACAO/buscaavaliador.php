<?php

include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

if(isset($_POST)){
$id = $_POST['id'];
$avaliador = select('*','sl_cadusu','id_usuario = '.$id.' AND status = 1');
	if($avaliador){
		echo json_encode($avaliador);
	}
}

?>