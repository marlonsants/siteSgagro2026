<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


session_start();

$email = $_SESSION['usuario'];
$id = $_SESSION['idusu'];


$somauser1 = select("count(*) as qtdd","sl_grupo","id_usuario1 =".$id."");
$somauser2 = select("count(*) as qtdd","sl_grupo","id_usuario2 =".$id."");
$somauser3 = select("count(*) as qtdd","sl_grupo","id_usuario3 =".$id."");
$somauser4 = select("count(*) as qtdd","sl_grupo","id_usuario4 =".$id."");
$somauser5 = select("count(*) as qtdd","sl_grupo","id_usuario5 =".$id."");
$rp = ($somauser1[0]['qtdd'] + $somauser2[0]['qtdd'] + $somauser3[0]['qtdd'] + $somauser4[0]['qtdd'] + $somauser5[0]['qtdd']);

 $dados = $rp;



	




 echo json_encode($dados);






 ?>