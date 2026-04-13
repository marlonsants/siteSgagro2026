<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$cpfa = $_POST['cpfa'];
$coautor = $_POST['coautor'];
$info = array();
session_start();
$cpfusulogado = $_SESSION['cpf'];


$rp = select('*','sl_cadusu',"cpf = '".$cpfa."' ");

if(empty($rp) == false){
	array_push($info, $rp);
}




$id = $info[0][0]['id_usuario'];

$somauser1 = select("count(*) as qtdd","sl_grupo","id_usuario1 =".$id."");
$somauser2 = select("count(*) as qtdd","sl_grupo","id_usuario2 =".$id."");
$somauser3 = select("count(*) as qtdd","sl_grupo","id_usuario3 =".$id."");
$somauser4 = select("count(*) as qtdd","sl_grupo","id_usuario4 =".$id."");
$somauser5 = select("count(*) as qtdd","sl_grupo","id_usuario5 =".$id."");
$soma = ($somauser1[0]['qtdd'] + $somauser2[0]['qtdd'] + $somauser3[0]['qtdd'] + $somauser4[0]['qtdd'] + $somauser5[0]['qtdd']);

if(empty($soma) == false){
	array_push($info, $soma);
}else{
	$ntem = 0;
	array_push($info, $ntem);
}



array_push($info, $cpfusulogado);

	




echo json_encode($info);






 ?>