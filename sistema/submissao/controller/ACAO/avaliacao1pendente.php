<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$tabelas = "sl_artigo as t INNER JOIN sl_cadusu as c ON t.id_avaliador1 = c.id_usuario";
$trabalhos = select("t.titulo,t.area,t.categoria,c.nome,c.email,c.contato,c.telefone",$tabelas,"t.avaliacao_concluida1 = 0 ORDER BY c.email");

if($trabalhos){
echo json_encode($trabalhos);
}
?>