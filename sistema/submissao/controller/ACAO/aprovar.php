<?php 
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$id = $_POST['id'];

$update = updatemysql('status = 1 ','sl_cadusu',"id_usuario = ".$id." ");
$update2 = updatemysql('status = 1 ','sl_avaliador',"id_avaliador= ".$id." ");

if($update){
	$rp = 'funcionou';
	echo json_encode($rp);
}
?>