<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$campos = "t.titulo,t.area,t.categoria,g.id_usuario1, g.id_usuario2, g.id_usuario3, g.id_usuario4,g.id_usuario5,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario1) as nome1,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario2) as nome2, (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario3) as nome3, (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario4) as nome4,(SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario5) as nome5  ";
$tabela = "sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_grupo as g ON g.id_artigo = t.id_artigo";
$condicao = "t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.titulo";
$trabalhos = select($campos,$tabela,$condicao);

if($trabalhos){
echo json_encode($trabalhos);

	// echo "<pre>";
 //   	print_r($trabalhos);
	// echo "</pre>";

}	
?>