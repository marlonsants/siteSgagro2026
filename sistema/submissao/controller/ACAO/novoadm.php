<?php  
include ('../funcoes/conexao.php');
include ('../funcoes/funcoesmysql.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];



$criado = date('Y-m-d H:i'); 

$tabela = 'sl_adm';
$campos = 'criado, nome, email, senha';
$argumentos  = " '".$criado."','".$nome."','".$email."', '".$senha."' ";

if($senha != $confsenha){
	header('location:../../view/cadadm.php?erro=1');
}else{
	$rp = insert($tabela,$campos,$argumentos);

	header('location:../../view/cadadm.php?msg=1');

}



   
	   



?>