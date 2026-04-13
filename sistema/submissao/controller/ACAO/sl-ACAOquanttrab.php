<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$email = $_POST['email'];

$rp = select('*','sl_artigo',"email = '".$email."' ");


session_start();

$email = $_SESSION['usuario'];
$id = $_SESSION['idusu'];
$info = array();
$dados = array();

$somauser1 = select("id_artigo","sl_grupo","id_usuario1 =".$id."");
if(empty($somauser1) == false){
 $count = 0;

	foreach ($somauser1 as $key => $value) {
	 	$rp = select('t.titulo,t.idartigo,t.status,t.id_artigo,tc.enviado,co.status as correcao','sl_artigo as t LEFT JOIN  sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo',"t.id_artigo = ".$somauser1[$count]['id_artigo']." ");
	 	$trabcorrigido = select("id_arquivo","sl_trabcorrigido"," id_arquivo = ".$somauser1[$count]['id_artigo']." ");

	 	if(empty($rp) == false){

	 		 array_push($info,$rp);

	 	
	 	}


	$count++;
	}
 	
 } 

$somauser2 = select("id_artigo","sl_grupo","id_usuario2 =".$id."");
if(empty($somauser2) == false){
 $count = 0;

	foreach ($somauser2 as $key => $value) {
	 	$rp = select('t.titulo,t.idartigo,t.status,t.id_artigo,tc.enviado,co.status as correcao','sl_artigo as t LEFT JOIN  sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo',"t.id_artigo = ".$somauser2[$count]['id_artigo']." ");
	 	$trabcorrigido = select("id_arquivo","sl_trabcorrigido"," id_arquivo = ".$somauser2[$count]['id_artigo']." ");

	 	if(empty($rp) == false){

	 		array_push($info,$rp);

	 	
	 	}

	 	
	$count++;
	}
 	
 } 


$somauser3 = select("id_artigo","sl_grupo","id_usuario3 =".$id."");
if(empty($somauser3) == false){
 $count = 0;

	foreach ($somauser3 as $key => $value) {
	 	$rp = select('t.titulo,t.idartigo,t.status,t.id_artigo,tc.enviado,co.status as correcao','sl_artigo as t LEFT JOIN  sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo',"t.id_artigo = ".$somauser3[$count]['id_artigo']." ");
	 	$trabcorrigido = select("id_arquivo","sl_trabcorrigido"," id_arquivo = ".$somauser3[$count]['id_artigo']." ");

	 	if(empty($rp) == false){

	 		array_push($info,$rp);

	 	
	 	}

	 	
	$count++;
	}
 	
 }

$somauser4 = select("id_artigo","sl_grupo","id_usuario4 =".$id."");
if(empty($somauser4) == false){
 $count = 0;

	foreach ($somauser4 as $key => $value) {
	 	$rp = select('t.titulo,t.idartigo,t.status,t.id_artigo,tc.enviado,co.status as correcao','sl_artigo as t LEFT JOIN  sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo',"t.id_artigo = ".$somauser4[$count]['id_artigo']." ");
	 	$trabcorrigido = select("id_arquivo","sl_trabcorrigido"," id_arquivo = ".$somauser4[$count]['id_artigo']." ");

	 	if(empty($rp) == false){

	 		array_push($info,$rp);

	 	
	 	}

	 	
	$count++;
	}
 	
 } 

$somauser5 = select("id_artigo","sl_grupo","id_usuario5 =".$id."");
if(empty($somauser5) == false){
 $count = 0;

	foreach ($somauser5 as $key => $value) {
	 	$rp = select('t.titulo,t.idartigo,t.status,t.id_artigo,tc.enviado,co.status as correcao','sl_artigo as t LEFT JOIN  sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo',"t.id_artigo = ".$somauser5[$count]['id_artigo']." ");
	 	$trabcorrigido = select("id_arquivo","sl_trabcorrigido"," id_arquivo = ".$somauser5[$count]['id_artigo']." ");

	 	if(empty($rp) == false){

	 		array_push($info,$rp);

	 	
	 	}

	 	
	$count++;
	}
 	
 }     
 	
 	
 









	




echo json_encode($info);





 ?>