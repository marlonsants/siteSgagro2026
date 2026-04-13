<?php 
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

session_start();
$idtrabalho = $_POST['idtrabalho'];
$id_avaliador = $_SESSION['idusu'];

$avaliador1 = select('id_avaliador1','sl_artigo',' id_avaliador1 = '.$id_avaliador.' AND id_artigo = '.$idtrabalho.' ');
$avaliador2 = select('id_avaliador2','sl_artigo','id_avaliador2 = '.$id_avaliador.' AND id_artigo = '.$idtrabalho.' ');
if($avaliador1){
	$update = updatemysql('avaliacao_concluida1 = 0 ','sl_artigo',"id_artigo = ".$idtrabalho." ");
	$notas = select('*','sl_notas','id_artigo = '.$idtrabalho.' ');
}
if($avaliador2){
	$update = updatemysql('avaliacao_concluida2 = 0 ','sl_artigo',"id_artigo = ".$idtrabalho." ");
	$notas = select('*','sl_notas2','id_artigo = '.$idtrabalho.' ');
}

echo json_encode($notas[0]);
?>