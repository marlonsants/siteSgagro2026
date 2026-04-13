<?php
include ("../funcoes/conexao.php");
include ("../funcoes/funcoesmysql.php");

$trabalhos = select("t.titulo,t.area,t.categoria,c.nome,c.sobrenome,t.email,n.notafinal,n2.notafinal as nota2","sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_notas as n ON t.id_artigo = n.id_artigo INNER JOIN sl_notas2 as n2 ON t.id_artigo = n2.id_artigo","t.status = 2 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.area");
if($trabalhos){
echo json_encode($trabalhos);
}
?>