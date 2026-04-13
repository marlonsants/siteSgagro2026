<?php  

// require_once('../sistema/submissao/PHPMailer_5.2.1/class.phpmailer.php');
// require_once('../config/funcoesmysql.php');

// $todosEmail = select('email','sl_cadusu','1');

// foreach ($todosEmail as $key => $value) {
// 	$email = $value['email'];

// 	try {
//     $mail = new PHPMailer(true); //New instance, with exceptions enabled
    
//     $body = "
//     <html>
//     <head>
//     	<meta charset='utf-8'>
//     	<link type='text/css' rel='stylesheet' href='../css/bootstrap.min.css' ></link>
//     	<link type='text/css' rel='stylesheet' href='../css/style.css' ></link>
//     	<script src='js/jquery-2.1.1.min.js'></script>
//     	<script src='js/bootstrap.min.js'>
//     		<script src='plugin/jquery-validate/jquery.validate.min.js'></script>
//     		<title>Confirma��o por E-mail</title>
//     		<link rel='shortcut icon' href='../webroot/images/SGAGRO LOGO.ico' type='../image/x-icon'/>
//     	</head>

//     	<body>
//     		<div class='container-fluid'>


//     			<div class='jumbotron' style='background-image: url(../webroot/images/fundo.png); background-size: cover;'>
//     				<div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
//     					<div class='col-md-12 col-xs-12 col-lg-12'>
//     						<div class='col-md-4 col-xs-4 col-lg-4'>
//     							<img src='../webroot/images/SGAGRO LOGO.png' style='width: 15%; height: 15%;'>
//     							<img src='../webroot/images/Logo_UNESP.png' style='width: 15%; height: 15%; margin-left: 5%;'>
//     						</div>
//     						<div class='col-md-6 col-xs-6 col-lg-6'>
//     							<center><h1><i style='font-family: Plantagenet Cherokee;'><b>Resultados publicados</b></i></center></h1>
//     						</div>
//     					</div>
//     				</div>
//     			</div>


//     			<div class='jumbotron'>
//     				<p>Prezados autores informamos que o resultado do fast track do II SGAGRO já estão disponíveis no site.</p>
//     				<p>Para mais informações <a href'www.sgagro.org'>Clique aqui</a> ou acesse www.sgagro.org</p>
    				

//     			</div>

//     		</div>
//     	</body>
//     	</html>
//     	";


//     $mail->IsSMTP(); //tell the class to use SMTP
//     $mail->SMTPAuth = true; // enable SMTP authentication
//     $mail->Port = 587; //SMTP porta (as mais utilizadas s�o '25' e '587'
//     $mail->Host = "smtp.sgagro.org"; // SMTP servidor
//     $mail->Username = "sigmajr@sgagro.org";  // SMTP  usu�rio
//     $mail->Password = "empresajr1";  // SMTP senha

    

//     $mail->AddReplyTo('sgagrofcav@hotmail.com'); //Responder para..
//     $mail->From = 'sigmajr@sgagro.org'; //e-mail fornecido pelo cliente
//     $mail->FromName   = 'SGAgro'; //nome fornecido pelo cliente

//     $to = $email; //Enviar para
//     $mail->AddAddress($to);
//     $mail->Subject  = "Resultados do fast track II SGAGRO"; //Assunto
//     $mail->WordWrap   = 80; // set word wrap

//     $mail->MsgHTML($body);

//     $mail->IsHTML(true); // send as HTML


//     if($mail->Send()){ 
//     	echo 'sucesso ao enviar para o email '.$email;

//     }
//     else{ echo 'Erro ao enviar para o email '.$email;
// }

// } catch (phpmailerException $e) {

//     // echo'<script>location.href=" ../index.php?erro=1&email='.$email.'";</script>';
// 	echo 'erro ao enviar o email';
// }


// }






?>

