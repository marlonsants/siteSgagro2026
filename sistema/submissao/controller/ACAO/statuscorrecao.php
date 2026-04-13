<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$info = array();
$dados = array();

$trabalhos = select("t.id_artigo,t.idartigo,t.titulo,t.area,t.categoria,c.nome,c.sobrenome,t.email,n.notafinal,n2.notafinal as nota2,co.status as statuscorre,tc.enviado","sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_notas as n ON t.id_artigo = n.id_artigo INNER JOIN sl_notas2 as n2 ON t.id_artigo = n2.id_artigo LEFT JOIN sl_correcoes as co ON t.id_artigo = co.id_trabalho LEFT JOIN sl_trabcorrigido as tc ON t.id_artigo = tc.id_arquivo ","t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.titulo");


if($trabalhos){
	echo json_encode($trabalhos);
}

?>