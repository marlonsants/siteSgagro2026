<?php
include "config.php";


// Conectamos ao nosso servidor MySQL
$conect = mysqli_connect($myhostname,$myusuario,$mysenha, $mydatabase);
if(!$conect){
echo 'Erro ao conetar no servidor';
}
//conexão multiplos selects
$conectM = mysqli_connect($myhostname,$myusuario,$mysenha, $mydatabase);
if(!$conectM){
echo 'Erro ao conetar ao banco de dados'; 
}
// Selecionamos nossa base de dados MySQL
$con = mysqli_select_db($conect,$mydatabase);
if(!$con){
echo 'Erro ao conectar ao banco de dados';
}
//fim das conexão mysql
mysqli_query($conect,"SET NAMES 'utf8'");
mysqli_query($conect,'SET character_set_connection=utf8');
mysqli_query($conect,'SET character_set_client=utf8');
mysqli_query($conect,'SET character_set_results=utf8');


?>