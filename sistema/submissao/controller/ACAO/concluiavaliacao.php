<?php 
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');
session_start();
$idtrabalho = $_POST['idtrabalho'];
$id_avaliador = $_SESSION['idusu'];
$avaliador1 = select('id_avaliador1','sl_artigo','id_avaliador1 = '.$id_avaliador.' ');
$avaliador2 = select('id_avaliador2','sl_artigo','id_avaliador2 = '.$id_avaliador.' ');
if($avaliador1){
	$update = updatemysql('avaliacao_concluida1 = 1 ','sl_artigo',"id_artigo = ".$idtrabalho." ");
}
if($avaliador2){
	$update = updatemysql('avaliacao_concluida2 = 1 ','sl_artigo',"id_artigo = ".$idtrabalho." ");
}



if($update){
	$rp = 'funcionou';
	echo json_encode($rp);
}
?>