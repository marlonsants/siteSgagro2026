<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-91044140-1', 'auto');
 ga('send', 'pageview');

</script>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$assunto = $_POST['assunto'];
$duvidas = $_POST['duvidas'];

if($duvidas == "Simposio"){
$to = "sgagrofcav@hotmail.com";
}
else if($duvidas == "Sistema"){
$to = "system4college@gmail.com";
}

require_once('../sistema/submissao/PHPMailer_5.2.1/class.phpmailer.php');
// guarda o email do usuario 

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
   <title>Contato Usuário</title>
</head>
<body>
     <div><h3><b>Nome do usuário:</b> ".$nome." </h3></div>
     <div><h4><b>E-mail do usuário:</b> ".$email." </h3></div>
     <div><h4><b>Mensagem do usuário:</b> ".$message." </h3></div>
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
     
    
     
    $mail->AddReplyTo($to); //Responder para..
    $mail->From = "sigmajr@sgagro.org"; //e-mail fornecido pelo cliente
    $mail->FromName   = $name; //nome fornecido pelo cliente
     
   
    $mail->AddAddress($to);
    $mail->Subject  = $assunto; //Assunto
    $mail->WordWrap   = 80; // set word wrap
     
    $mail->MsgHTML($body);
     
    $mail->IsHTML(true); // send as HTML

    $htmlcabecalho = "
    <html>
    <head>
       <meta charset='utf-8'>
       <link type='text/css' rel='stylesheet' href='../sistema/submissao/css/bootstrap.min.css' ></link>
       <link type='text/css' rel='stylesheet' href='../sistema/submissao/css/style.css' ></link>
       <script src='../sistema/submissao/js/jquery-2.1.1.min.js'></script>
       <script src='../sistema/submissao/js/bootstrap.min.js'>
       <script src='../sistema/submissao/plugin/jquery-validate/jquery.validate.min.js'></script>
       <title>Confirma��o por E-mail</title>
       <link rel='shortcut icon' href='../sistema/submissao/images/SGAGRO LOGO.ico' type='../image/x-icon'/>
    </head>
    <body>
       <div class='container-fluid'>

        <div class='jumbotron' style='background-image: url(../images/fundo.png); background-size: cover;'>
            <div class='row' style='margin-left: -6.5%; margin-right: 6.5%'>
                <div class='col-md-12 col-xs-12 col-lg-12'>
                    <div class='col-md-4 col-xs-4 col-lg-4'>
                        <img src='../sistema/submissao/images/SGAGRO LOGO.png' style='width: 40%; height: 15%;'>
                        <img src='../sistema/submissao/images/unesp.jpg' style='width: 40%; height: 15%; margin-left: 5%;'>
                    </div>
                    <div class='col-md-6 col-xs-6 col-lg-6'>
                        <center><h1><i style='font-family: Plantagenet Cherokee;'><b>Contato</b></i></center></h1>
                    </div>
                </div>
            </div>
        </div>";

    $htmlenviado = "
        <div class='jumbotron'>
            <center>Mensagem enviada com sucesso para <u>".$to. "</u> </center>
            <center>Muito obrigado, logo sua dúvida será respondida<u> ".$to."</u> </center>
            
        </div>
    </body>
    </html>";

    $htmlerro = "
        <div class='jumbotron'>
            <center>Erro ao enviar o e-mail para <u>".$mail->ErrorInfo."</u></center>
            <center>Este endere�o de e-mail n�o foi encontrado ou n�o existe.</center>
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
echo '<script> window.location.href="index.php?erro=3"</script>';
}



?>
  
