<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$trabalhos = select('id_artigo,id_avaliador1,id_avaliador2,titulo,area,instituicao,categoria','sl_artigo','idartigo <> "" ');
$avaliadores = select('nome,email,id_usuario,instituicao,status','sl_cadusu',"tipocadastro = 'Avaliador' AND status = 1 OR tipocadastro = 'Autor e Avaliador' AND status = 1 ");
if($trabalhos){
	$dados = array('trabalhos' => $trabalhos , 'avaliadores' => $avaliadores );
 // echo'<pre>';
 // print_r($dados);
 // echo'</pre>';
	
	echo json_encode($dados);
}else{

}
?>