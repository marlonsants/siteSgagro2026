 
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
   <title>Alterar Senha</title>
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
                   
                </div>
            </div>
        </div>
    </div>


    <div class='jumbotron'>
   <div>;
    <div>;
    <center><h4> Ol�!</br></br>
    <p>Foi solicitada uma altera��o na senha de acesso do sistema pelo usuario <u>".$email."</u></p>
    <p>Caso isto seja um erro, sugerimos que entre em contato com o desenvolvedor do sistema em <u>empresajrsaoluis@gmail.com</u></h4></p>
    <p><h3> Clique no link abaixo para criar uma nova senha </h3></br> </p>
    <center><a href='http://sgagro.web1335.kinghost.net/sitesgagro/sistema/submissao/model/confirmaemail.php?email= ".$cod."' target='_blank' style='font-size: 20px;'> Criar nova senha </a></center>
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
    $mail->Subject  = "Alteração de senha - SGAgro"; //Assunto
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
       <title>Confirmação por E-mail</title>
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
                        <center><h1><i style='font-family: Plantagenet Cherokee;'><b>Alterar Senha</b></i></center></h1>
                    </div>
                </div>
            </div>
        </div>";

    $htmlenviado = "
        <div class='jumbotron'>
            <center>Mensagem enviada com sucesso para <u>".$email."</u> </center>
            <center>Acesse seu email para criar uma nova senha.</center>
        </div>
    </body>
    </html>";

    $htmlerro = "
        <div class='jumbotron'>
            <center>Erro ao enviar o e-mail para <u>".$mail->ErrorInfo."</u></center>
            <center>Este endereçoo de e-mail não foi encontrado ou n�o existe.</center>
            <center>Por favor tente novamente.</center>
        </div>
    </body>
    </html>";

     
    if($mail->Send()){ 
      echo $htmlcabecalho . $htmlenviado;
    }
    else{ 
      echo $htmlcabecalho . $htmlerro;
    }

} catch (phpmailerException $e) {
echo '<script> window.location.href="verificaremail.php?erro=3"</script>';
}



?>

