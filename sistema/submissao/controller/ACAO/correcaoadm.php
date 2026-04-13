<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$tabela = "sl_correcoes";
$campos = "id_trabalho, status";
$id_trabalho = $_POST['id'];
$status = $_POST['status'];
$camposupdate = "status =". $status;

$read = select("id_trabalho", "sl_correcoes", "id_trabalho = ".$id_trabalho);


if(empty($read) ){
$insert = insert($tabela,$campos,"'".$id_trabalho."','".$status."'" );
 }
 else if (!empty($read) and $id_trabalho = $read[0]['id_trabalho']){
$update = updatemysql($camposupdate,$tabela,"id_trabalho = ".$id_trabalho);
	}