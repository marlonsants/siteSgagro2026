<?php  
include("../controller/funcoes/funcoesmysql.php");
require_once('../PHPMailer_5.2.1/class.phpmailer.php');
// guarda o email do usuario 
$id = $_POST['id'];
$busca = select("email","sl_cadusu","id_usuario = ".$id." ");

$email = $busca[0]['email'];


// concatena uma string com o email
$string = sha1('sigma').$email.sha1('sigma');
// cria uma chave publica criptrografada
$cod = base64_encode($string);
$nome = 'SGAgro';

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled
    
   $body = "
<html>
<head>
   <meta charset='utf-8'>
   <link type='text/css' rel='stylesheet' href='../css/bootstrap.min.css' ></link>
   <link type='text/css' rel='stylesheet' href='../css/style.css' ></link>
   <script src='js/jquery-2.1.1.min.js'></script>
   <script src='js/bootstrap.min.js'>
   <script src='plugin/jquery-validate/jquery.validate.min.js'></script>
   <title>Cadastro como avaliador aprovado</title>
   <link rel='shortcut icon' href='images/SGAGRO LOGO.ico' type='../image/x-icon'/>
</head>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-91044140-1', 'auto');
ga('send', 'pageview');

</script>
<body>
   <div class='container-fluid'>


    <div class='jumbotron' style='background-image: url(../images/fundo.png); background-size: cover;'>
        <div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
            <div class='col-md-12 col-xs-12 col-lg-12'>
                <div class='col-md-4 col-xs-4 col-lg-4'>
                    <img src='../images/SGAGRO LOGO.png' style='width: 15%; height: 15%;'>
                    <img src='../images/unesp.jpg' style='width: 15%; height: 15%; margin-left: 5%;'>
                </div>
                
            </div>
        </div>
    </div>
    <br>

    <div class='jumbotron'>
        <center><h2>Parab�ns seu cadastro como Avaliador foi aprovado</h2><center>
        <p> Prezado(a) avaliador(a),

Antecipadamente agradecemos sua disponibilidade em participar como avaliador de trabalhos do  Simp�sio em Gest�o no Agroneg�cio.<br>

No interesse de entregar melhores condi��es para sua avalia��o, a Comiss�o encaminhar� um m�ximo de 5 artigos por avaliador.<br>
Os crit�rios estabelecidos pelo Comit� Cient�fico est�o dispon�veis no nosso site.<br>
Como reciprocidade � sua parceria, oferecemos um desconto na sua inscri��o, caso tenha condi��es de participar do evento nos dias 08 a 10 de junho.<br>
<br>
Pedimos a gentileza que as avalia��es ocorram dentro do prazo indicado.<br>
<br>
Cordialmente,<br>
<br>
Comiss�o Organizadora<br></p>
        <center><h3>Qualquer duvida sobre o sistema entre em contato atraves do seguinte e-mail: <b>empresajrsaoluis@gmail.com<b> </h3></center>
        </br>
        <center></center>
        <center><h3> Caso a duvida seja em rela��o ao evento entre em contato atraves do e-mail:: <b>sgagrofcav@hotmail.com</b>  </h3></center>
        </br>

    </div>

    </div>
</body>
</html>
    ";

    $mensagem = 'teste';
     
    $mail->IsSMTP(); //tell the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Port = 587; //SMTP porta (as mais utilizadas s�o '25' e '587'
    $mail->Host = "smtp.sgagro.org"; // SMTP servidor
    $mail->Username = "sigmajr@sgagro.org";  // SMTP  usu�rio
    $mail->Password = "empresajr1";  // SMTP senha
     
    
     
    $mail->AddReplyTo($email); //Responder para..
    $mail->From = 'sigmajr@sgagro.org'; //e-mail fornecido pelo cliente
    $mail->FromName   = $nome; //nome fornecido pelo cliente
     
    $to = $email; //Enviar para
    $mail->AddAddress($to);
    $mail->Subject  = "Cadastro como Avaliador aprovado"; //Assunto
    $mail->WordWrap   = 80; // set word wrap
     
    $mail->MsgHTML($body);
     
    $mail->IsHTML(true); // send as HTML

    $htmlcabecalho = "
    <html>
    <head>
       <meta charset='utf-8'>
       <link type='text/css' rel='stylesheet' href='../css/bootstrap.min.css' ></link>
       <link type='text/css' rel='stylesheet' href='../css/style.css' ></link>
       <script src='js/jquery-2.1.1.min.js'></script>
       <script src='js/bootstrap.min.js'>
       <script src='plugin/jquery-validate/jquery.validate.min.js'></script>
       <title>Cadastro como avaliador aprovado</title>
       <link rel='shortcut icon' href='images/SGAGRO LOGO.ico' type='../image/x-icon'/>
    </head>
    <body>
       <div class='container-fluid'>

        <div class='jumbotron' style='background-image: url(../images/fundo.png); background-size: cover;'>
            <div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
                <div class='col-md-12 col-xs-12 col-lg-12'>
                    <div class='col-md-4 col-xs-4 col-lg-4'>
                        <img src='../images/SGAGRO LOGO.png' style='width: 40%; height: 15%;'>
                        <img src='../images/unesp.jpg' style='width: 40%; height: 15%; margin-left: 5%;'>
                    </div>
                    <div class='col-md-6 col-xs-6 col-lg-6'>
                        <center><h1><i style='font-family: Plantagenet Cherokee;'><b>Fim do cadastro</b></i></center></h1>
                    </div>
                </div>
            </div>
        </div>";

    $htmlenviado = "
        <div class='jumbotron'>
            <center>Mensagem enviada com sucesso para <u>".$email."</u> </center>
            <center>Clique no link enviado neste E-mail para confirmar seu email e concluir o cadastro.</center>
        </div>
    </body>
    </html>";

    $htmlerro = "
        <div class='jumbotron'>
            <center>Erro ao enviar o email para <u>".$mail->ErrorInfo."</u></center>
            <center>Este endere�o de E-mail n�o foi encontardo ou n�o existe.</center>
            <center>Por favor tente novamente.</center>
        </div>
    </body>
    </html>";

     
    if($mail->Send()){ echo json_encode("funcionou");
    }
    else{ echo $htmlcabecalho . $htmlerro;
    }

} catch (phpmailerException $e) {


}



?>

