<?php 
include ('../funcoes/conexaoant.php');
include ('../funcoes/funcoesmysqlant.php');

$id_artigo =  select('idartigo,email','sl_artigo',"status = 1 and idartigo <> '' ");

echo json_encode($id_artigo);
 ?>
