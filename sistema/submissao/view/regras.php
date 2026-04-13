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
    <script src="../js/tooltip.js"></script>
	<title>Instruções para submissão do trabalho</title>
	<link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
</head>
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
                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Instruções para submissão do trabalho</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

	<div class="jumbotron"><!--Jumbotron-->

		<center class="row"><!--Mensagem-->

				
			<h3 class="col-md-12 col-xs-12 col-xs-12">
				Como parte do processo de submissão, é preciso dar ciência da conformidade do trabalho submetido em relação a todos os itens listados a seguir:
				</h3>
		</center><!--Fim Mensagem-->

		<br>

		<div class="row"><!--Testo com as regras-->
			<div class="row">
					<div class=" col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1">
						<ol>
							<li> 	A contribuição é original e inédita, e não está sendo avaliada para publicação por outro evento e/ou revista científica simultaneamente. </li>
							<li> 	A versão submetida é definitiva, não sendo permitida a substituição do trabalho em nenhuma hipótese.</li>
							<li> 	O arquivo submetido está no formato PDF e em total em aderência às normas dispostas no manual de submissão. </li>
							<li> 	O arquivo submetido está destituído de qualquer tipo de informação que possa identificar os autores.</li>
							<li> 	O trabalho está submetido a uma única área temática do evento e inscrito em uma única modalidade (artigo, relato técnico ou resumo expandido). </li>
							<li> 	O número de autores do trabalho não ultrapassa cinco (05) pessoas. A contagem do número de trabalhos não distingue autoria. É proibida a inclusão/exclusão/alteração de autores após a submissão do trabalho.</li>
							<li>    Os trabalhos que envolvem pesquisas com seres humanos estão acompanhados da cópia do parecer do Comitê de Ética e Pesquisa (CEP) ao qual o respectivo trabalho foi submetido. O parecer deve ser anexado no campo "documento suplementar".</li>
						</ol>
						<b>IMPORTANTE: As submissões que não estiverem de acordo com os respectivos itens serão automaticamente desclassificadas e devolvidas aos autores.</b>
					<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
			<div class="checkbox">
    			<label>
      				<input type="checkbox" id="aceito1" name="aceito1"> Ciente e de acordo.</input>
    			</label>
  			</div>
  			</center>
		</div>
					<br/><br/><br/>
						<center>	
							<h3>DECLARAÇÃO DE DIREITO AUTORAL</h3>
							<ul style="text-align:left;">
							<li>Sendo o trabalho aprovado, o Simpósio em Gestão do Agronegócio se reserva o direito de efetuar, nos arquivos originais aprovados, alterações de ordem normativa, ortográfica e gramatical, com o intuito de manter o padrão culto da língua, respeitando, porém, o estilo dos autores.</li>
							<li>A submissão do trabalho autoriza, automaticamente, sua publicação, com exclusividade, nos anais do evento, bem como autoriza a incorporação do trabalho no acervo eletrônico do Simpósio em Gestão do Agronegócio, sem ônus alusivos aos direitos autorais, com base no disposto na Lei Federal nº 9.610, de 19 de fevereiro de 1998. Assegura-se ao Simpósio em Gestão do Agronegócio o direito à divulgação da informação e os direitos autorais, na forma da Lei. </li>
							<li>Cabe ressaltar que os trabalhos publicados no Simpósio em Gestão do Agronegócio são de acesso público e gratuito aos interessados, sendo proibido qualquer tipo de aplicação comercial. </li>
							<li>Os autores são totalmente responsáveis pelo conteúdo dos trabalhos publicados. </li>
							</ul>

							<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
			<div class="checkbox">
    			<label>
      				<input type="checkbox" id="aceito2" name="aceito2"> Ciente e de acordo.</input>
    			</label>
  			</div>
  			</center>
		</div>
						</center>
					</div>
		</div><!--Fim do texto com as mensagens-->
		
		</br>

		

		</br>

		<div class="row"><!--Botões-->
			<button type="submit" id="voltar" name="voltar" class="btn btn-warning col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2">
				Discordar
			</button>

			<button type="submit" id="continuar" name="continuar" class="btn btn-success col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2">
				Continuar
			</button>
		</div><!--Fim Botões-->

	</div><!-- Fim Jumbotron-->

	<script type="text/javascript">
		$(document).on('click','#continuar', function(){

			if ($('#aceito1').is(':checked') && $('#aceito2').is(':checked')){
			location.href="submissao_artigo.php";
		}else{
			alert('Certifique-se de ter selecionado os dois checkbox antes de continuar !!!');
		}


		});
	</script>

	

	<script type="text/javascript">
		$(document).on('click','#voltar', function(){
			location.href="../sessao/fecharsessao.php";

		});
	</script>


</body>
</html>