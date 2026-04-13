<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$avaliadores = array();
$avaliadores = select("*","sl_cadusu","status = 1");
$teste = array();
//echo json_encode($avaliadores);



foreach($avaliadores as $avaliador){
$where = "id_avaliador1 ='".$avaliador['id_usuario']."' or id_avaliador2 = '".$avaliador['id_usuario']. "' ";

$where2 = "id_avaliador1 ='".$avaliador['id_usuario']."' and avaliacao_concluida1 = 1  or id_avaliador2 = '".$avaliador['id_usuario']. "' and avaliacao_concluida2 = 1";

 $buscas = select("count(*) as qttdtrabatr","sl_artigo",$where); //Quantidade de trabalho atribuido por avaliador
 $buscas2 = select("count(*) as qttdtrabatr","sl_artigo",$where2); //Quantidade de trabalho avaliado

	foreach($buscas as $busca){
	 array_push($avaliador, $busca['qttdtrabatr']);
		 
		 foreach($buscas2 as $busca2){
		 array_push($avaliador, $busca2['qttdtrabatr']); 
		 }
	}


	array_push($teste, $avaliador);
}


echo json_encode($teste);
?>