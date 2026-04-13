<?php 

include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');

$cpf = $_POST['cpf'];

$rp = select('*','sl_cadusu',"cpf = '".$cpf."' ");

if(empty($rp) == false){
$dados = $rp;
echo json_encode($dados[0]);
}






 ?>