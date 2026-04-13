<?php 
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$avaliadores = select("*","sl_cadusu","tipocadastro ='Avaliador' OR tipocadastro ='Autor e Avaliador'  ");

echo json_encode($avaliadores);


?>