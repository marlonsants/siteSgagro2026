<?php  

require_once('../PHPMailer_5.2.1/class.phpmailer.php');
// guarda o email do usuario 
$email = $_GET['email'] ;

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
   <title>Confirma��o por E-mail</title>
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
                <div class='col-md-6 col-xs-6 col-lg-6'>
                    <center><h1><i style='font-family: Plantagenet Cherokee;'><b>Confirma��o por E-mail</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>


    <div class='jumbotron'>
        <center>Seu cadastro est� quase conclu�do, ap�s clicar no link o acesso ao sistema ser� concedido a ".$email." <center>
        <center>Caso ocorra algum erro, sugerimos que entre em contato com os desenvolvedores do sistema em:</center>
        </br>
        <center><b>empresajrsaoluis@gmail.com<b></center>
        <center class='col-md-12 col-xs-12 col-lg-12'><h3>Clique no link abaixo para confirmar seu cadastro.</h3></center>
        </br>

        <center><a href='http://sgagro.web1335.kinghost.net/sitesgagro/sistema/submissao/model/confirmacad.php?email= ".$cod."' target='_blank' style='font-size: 20px;'> Confirmar Cadastro </a></center>
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
    $mail->Subject  = "Confirmar cadastro do SGAgro"; //Assunto
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
       <title>Confirma��o por E-mail</title>
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

     
    if($mail->Send()){ echo $htmlcabecalho . $htmlenviado;
    }
    else{ echo $htmlcabecalho . $htmlerro;
    }

} catch (phpmailerException $e) {

echo'<script>location.href=" ../index.php?erro=1&email='.$email.'";</script>';
}



?>

