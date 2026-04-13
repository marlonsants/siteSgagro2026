<?php  

include ('../controller/funcoes/conexao.php');
include ('../controller/funcoes/funcoesmysql.php');


// $email recebe a variavel email do get com criptrografia 
$email = $_GET['email'];
// decodifica a string
$emaildec = base64_decode($email);
// criptrografa a chave privada
$key = sha1('sigma');
// retira a chave privada para comparar no banco 
$emailsub = str_replace($key,'',$emaildec);
$emailsub = trim($emailsub);
$sigla = 'sigmajrsaoluis';
$key = base64_encode($sigla);

// faz a busca no email de acordo com o email cadastrado
$busca = select("email","sl_cadusu","email = '".$emailsub."'","");
// $resultado recebe o que vier da busca 
$resultado = $busca;

// echo json_encode($resultado);

// $emailusu recebe a primeira linha de resultado
$emailusu = $resultado[0];
// verifica se a busca retornou resultado
if( empty($emailusu['email']) )
{

	echo ("Erro, o e-mail informado não está cadastrado");
}

// verifica se o email informado é igual ao retornado pela busca
elseif($emailusu['email'] == $emailsub){

echo '<script>location.href="../view/novasenha.php?key='.$key.'";</script>';	


}

else
{

	echo ("Este email não está cadastrados no banco");
}





 

?>