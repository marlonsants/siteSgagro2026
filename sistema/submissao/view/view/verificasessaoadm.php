<?php
header ('Content-type: text/html; charset=UTF-8'); 
session_start();
if(isset($_SESSION['admlogado']) == false)
{
    echo('
        <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
    <div class="container">

    <!--Banner-->
    <div class="jumbotron" style="background-image: url("../images/fundo.png"); background-size: cover;">
        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <center><h1><i style="font-family: "Plantagenet Cherokee";"><b>Sessão encerrada, para continuar faça login novamente</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

    <div class="jumbotron">
        <div class="row">
            <h2> <a href="../index.php"> <center>Fazer login</center></a></h2>
        </div>
    </div>
    </div>');
exit;
}

?>