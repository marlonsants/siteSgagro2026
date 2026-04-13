<?php header ('Content-type: text/html; charset=UTF-8'); 
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

<?php
$search = array("\n","\r");
$titulo = $_POST['titulo'];
$resumoerro = $_POST['resumo'];
$resumo = str_replace($search,'' , $resumoerro);
$area = $_POST['area'];
$coautor = $_POST['coautor'];
$apresentacao = $_POST['apresentacao'];
$categoria = $_POST['categoria'];

if($coautor != "0"){
	$ncoautor = (int) $coautor + 1;
	$count = 0;
	for($count = 1; $count < $ncoautor;$count++){
		eval('$nomecoautor'.$count.' = $_POST["nomecoautor'.$count.'"]; ');
		eval('$snomecoautor'.$count.' = $_POST["snomecoautor'.$count.'"]; ');
		eval('$cpfcoautor'.$count.' = $_POST["cpfcoautor'.$count.'"]; ');
	}
	$sobra = 5;
	for($i = $ncoautor ;$i < $sobra;$i++){
		eval('$nomecoautor'.$i.' = "coautor não cadastrado"; ');
		eval('$snomecoautor'.$i.' = "coautor não cadastrado "; ');
		eval('$cpfcoautor'.$i.' = " coautor não cadastrado "; ');
	} 
}else{
	for($count = 1; $count < 5;$count++){
		eval('$nomecoautor'.$count.' = "coautor não cadastrado"; ');
		eval('$snomecoautor'.$count.' = "coautor não cadastrado "; ');
		eval('$cpfcoautor'.$count.' = " coautor não cadastrado "; ');
	}
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
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Confirmação de Dados Cadastrado</title>
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
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Confirmação da submissão</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->


	    
		<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
				<h4>Confira aqui se as informações estão corretas e clique em avançar, caso contrario clique em voltar para corrigi-las.</h4>
			</center>
		</div>

		<div class="jumbotron">		
			<div class="panel panel-default">

				<div class="panel-heading"><b>TRABALHO</b></div>
					
					<div class="panel-body">
						
							<div class="row">
								<email class="col-md-12 col-xs-12 col-lg-12"><?php echo "<b>Título do trabalho:</b> " . $titulo; ?> </email>
								<usuario class="col-md-12 col-xs-12 col-lg-12"><?php echo "<b>Área:</b> " . $area;  ?> </usuario>
							</div>
							
							<div class="row">
								<categoria class="col-md-12 col-xs-12 col-lg-12"><?php echo "<b>Categoria:</b> " . $categoria;  ?> </categoria>
								<apresentacao class="col-md-12 col-xs-12 col-lg-12"><?php echo "<b>Apresentação:</b> " . $apresentacao;  ?> </apresentacao>
							</div>

							<?php				
							//Se Existir apenas o coautor 1;
						if( ($nomecoautor1 != 'coautor não cadastrado') and ($nomecoautor2 == 'coautor não cadastrado') and ($nomecoautor3 == 'coautor não cadastrado') and ($nomecoautor4 == 'coautor não cadastrado')){					
							echo('<div class="row"></br>
								<coautor class="col-md-12 col-xs-12 col-lg-12"> <b>Nome co-autor 1:</b> '.$nomecoautor1.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"> <b>Sobrenome co-autor 1: </b> '.$snomecoautor1.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"> <b>CPF co-autor 1:</b> '.$cpfcoautor1.' </coautor>
							</div>');

							//Se Existir apenas o coautor 1 e 2;
						}else if(($nomecoautor1 != 'coautor não cadastrado') and ($nomecoautor2 != 'coautor não cadastrado') and ($nomecoautor3 == 'coautor não cadastrado') and ($nomecoautor4 == 'coautor não cadastrado')){
							echo('<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 1:</b> '.$nomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 1: </b> '.$snomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 1:</b> '.$cpfcoautor1.' </coautor>
								</div>');					
							echo('	
								<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
								</div>');

							//Se Existir apenas o coautor 1, 2 e 3;
						}else if(($nomecoautor1 != 'coautor não cadastrado') and ($nomecoautor2 != 'coautor não cadastrado') and ($nomecoautor3 != 'coautor não cadastrado') and ($nomecoautor4 == 'coautor não cadastrado')){	
							echo('<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 1:</b>  '.$nomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 1: </b>  '.$snomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 1:</b>  '.$cpfcoautor1.' </coautor>
								</div>');					
							echo('	
								<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
								</div>');
	
							echo('	
							<div class="row"></br>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 3:</b>  '. $nomecoautor3.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 3: </b>  '. $snomecoautor3.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 3:</b>  '. $cpfcoautor3.' </coautor>
							</div>');

							//Se Existir todos os coautores ;
						}else if(($nomecoautor1 != 'coautor não cadastrado') and ($nomecoautor2 != 'coautor não cadastrado') and ($nomecoautor3 != 'coautor não cadastrado') and ($nomecoautor4 != 'coautor não cadastrado')){	
							echo('<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 1:</b>  '.$nomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 1: </b>  '.$snomecoautor1.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 1:</b>  '.$cpfcoautor1.' </coautor>
								</div>');					
							echo('	
								<div class="row"></br>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 2:</b>  '.$nomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 2: </b>  '.$snomecoautor2.' </coautor>
									<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 2:</b>  '.$cpfcoautor2.' </coautor>
								</div>');
	
							echo('	
							<div class="row"></br>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 3:</b>  '. $nomecoautor3.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 3: </b>  '. $snomecoautor3.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 3:</b>  '. $cpfcoautor3.' </coautor>
							</div>');				
							echo('	
							<div class="row"></br>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Nome co-autor 4:</b>  '. $nomecoautor4.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>Sobrenome co-autor 4: </b>  '.$snomecoautor4.' </coautor>
								<coautor class="col-md-12 col-xs-12 col-lg-12"><b>CPF co-autor 4:</b>  '. $cpfcoautor4.' </coautor>
							</div>');
						}?>
							
							
							<div class="row">
								<resumo class="col-md-12 col-xs-12 col-lg-12"><?php echo "<b>Resumo do Artigo:</b> " . $resumo; ?></resumo> 
							</div>
						
					</div>
					
				
			</div>

			</br>

			<div class="row">
				<button type="button" id="voltar1" name="voltar1" class="btn btn-warning col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2" >Voltar</button>
				<button type="button" id="continuar1" name="continuar1" class="btn btn-success col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2">Continuar</button>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../js/scripts/btnvoltarconfsubmissao.js"></script>
	<script type="text/javascript">

        $(document).ready(function(){
            
            $(document).on('click','#continuar1',function(){

                env = {};
                env.titulo = <?php echo "'$titulo'"; ?> ;
                env.resumo = <?php echo "'$resumo'"; ?> ;
                env.area = <?php echo "'$area'"; ?> ;
                env.coautor = <?php echo "'$coautor'"; ?> ;
                env.apresentacao = <?php echo "'$apresentacao'"; ?> ;
                env.categoria = <?php echo "'$categoria'"; ?> ;

                env.nomecoautor1 = <?php echo "'$nomecoautor1'"; ?> ;
                env.snomecoautor1 = <?php echo "'$snomecoautor1'"; ?> ;
                env.cpfcoautor1 = <?php echo "'$cpfcoautor1'"; ?> ;

                env.nomecoautor2 = <?php echo "'$nomecoautor2'"; ?> ;
                env.snomecoautor2 = <?php echo "'$snomecoautor2'"; ?> ;
                env.cpfcoautor2 = <?php echo "'$cpfcoautor2'"; ?> ;

                env.nomecoautor3 = <?php echo "'$nomecoautor3'"; ?> ;
                env.snomecoautor3 = <?php echo "'$snomecoautor3'"; ?> ;
                env.cpfcoautor3 = <?php echo "'$cpfcoautor3'"; ?> ;
                env.nomecoautor4 = <?php echo "'$nomecoautor4'"; ?> ;
                env.snomecoautor4 = <?php echo "'$snomecoautor4'"; ?> ;
                env.cpfcoautor4 = <?php echo "'$cpfcoautor4'"; ?> ;
              
                
                
               $.ajax({
                        type: "POST",
                        url: "../controller/ACAO/sl-ACAOcadartigo.php",
                        data: env,
                        dataType : 'html',
                        success: function(data){
                            console.log('sucesso'+data)
                            if(data.length > 0){
                            	 var form = {};
                       			 form.titulo = $('#titulo').val();
                                        
                         		location.href="fim.php";   
                            }
                        }, error: function(data) {
                            console.log(data);
                            alert("Erro, Houve uma falha ao salvar o registro!");
                        }
                        });

                       


            
            });

        });             
	</script>


	</body>
</html>