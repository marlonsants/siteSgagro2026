<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<?php
session_start();
if(isset($_SESSION['logado']) == false)
{
	echo('
		<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<div class="container">
    <!--Banner-->
    <div class="jumbotron" style="background: url("../images/SGAGRO LOGO.png");">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/unesp.jpg">
                <h2 class="col-md-8 col-xs-8 col-lg-8"><center>Sessão encerrada, para continuar faça login novamente</center></h2>
                <img class="thumbnail col-md-2 col-xs-2 col-lg-2" src="../images/SGAGRO LOGO.png">
                <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
            </div>
        </div>
    </div>

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
    		<h2> <a href="../index.php"> <center>Fazer login</center> </a></h2>
    	</div>
    </div>
    </div>');
exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Visualizar Trabalho</title>
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
	<div class="container">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Visualizar Trabalho</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
	<div class="row"><br>	    
		<?php
		$email = $_SESSION['usuario'];
		$id_artigo = $_POST['idartigo'];

		$condicao = "`id_artigo` = '". $id_artigo."'";
		$campo = '*';
		$tabela = "`sl_artigo`";
		$arquivos = select($campo, $tabela, $condicao);
		$arquivo = $arquivos[0];

			echo'
				<h3><center> Titulo  do trabalho<br> '.$arquivo['titulo'].'</h3></center>
			 				<div class="row">
			 				<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../Trabalhos2017/'.$arquivo['idartigo'].'.pdf" height="500"> </iframe>
			 				</div>
				 	<br/><br/>';

		?>
	</div>

	<div class="row"><br>
				<center class="col-md-12 col-xs-12 col-lg-12">
					<button type="button" id="voltar" name="voltar" class="col-md-3 col-md-offset-4 btn btn-warning" onclick="history.go(-1)">Voltar</button>
					</center><br><br><br><br>
	</div>

</body>
</html>