<?php 
include ('../funcoes/funcoesmysql.php');
$id = $_GET['id'];
$rp = deletemysql("sl_correcoes","id_trabalho = ".$id." ");

if($rp){
	echo '<script>location.href="../../view/atribcorrecao.php";</script>';
}


?>