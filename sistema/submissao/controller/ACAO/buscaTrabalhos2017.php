<?php 
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$id_artigo =  select('idartigo,email','sl_artigo','1');

echo json_encode($id_artigo);
 ?>
