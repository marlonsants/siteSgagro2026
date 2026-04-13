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
	<div class="container-fluid">

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
    <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Submissão do Trabalho</title>
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
	<div class="container-fluid">

	    <!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	                <div class="col-md-6 col-xs-6 col-lg-6">
	                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>Submissão do Trabalho</b></i></center></h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Fim Banner-->
    	
		<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
				<b>¹O resumo deve possuir no maximo 1.500 caracteres contando espaços, pulo de linhas e outros caracteres.</b>
			</center>
		</div>
		</br>
		<div class="row">
			<center class="col-md-12 col-xs-12 col-lg-12">
				<b>²Os trabalhos devem ser submetidos no formato pdf e não podem ser publicados em outros formatos como '.doc', '.docx', entre outros.</b>
			</center>
		</div>
		</br>

		<form id="form_submissao" method="post" action="confirma_submissao.php" enctype="multipart/form-data" class="jumbotron">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-12 col-xs-12 col-lg-12">
					<label>Titulo</label></br>
					<input type="text" id="titulo" name="titulo" class="form-control">
				</div>
			</div>
			</div>

			</br>

			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-12 col-xs-12 col-lg-12">
					<label>Resumo e Abstract</label></br>
					<textarea id="resumo" name="resumo" rows="8" class="form-control" min="14" max="5000"></textarea>
				</div>
			</div>
			</div>

			</br>

			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
				<div class="col-md-4" id="categoriadiv">
					<label>Categoria do trabalho</label></br>
					<select class="form-control" id="categoria" name="categoria">
						<option value="Resumo Expandido">Resumo Expandido</option>
						<option value="Relato Técnico">Relato Técnico</option>
						<option value="Artigo Completo">Artigo Completo</option>
					</select>
				</div>

				<div class="col-md-4" id="areadiv">
					<label>Área temática</label></br>
					<select class="form-control" id="area" name="area">
						<option selected>Gestão de Pessoas e Estudos Organizacionais</option>
						<option>Desenvolvimento e Gestão</option>
						<option>Economia e Finanças</option>
						<option>Empreendedorismo, Inovação e Tecnologia</option>
						<option>Estratégia, Planejamento e Governança</option>
						<option>Logísticas e Operações</option>
						<option>Marketing e Mercados</option>
						<option>Sustentabilidade e Responsabilidade Sócio Ambiental</option>
					</select>
				</div>

				<div class="col-md-2" id="coautordiv">
					<label>Coautores</label></br>
					<select class="form-control" id="coautor" name="coautor">
						<option selected value="0">Nenhum</option>
						<option value="1">1 coautor</option>
						<option value="2">2 coautores</option>
						<option value="3">3 coautores</option>
						<option value="4">4 coautores</option>
					</select>
				</div>

				<div class="col-md-2">
					
					<div class="row">
						<label> Apresentação:</label>

					</div>
					<div class="row" id="tipoapresenta" style="margin-top:7px">
						Pôster

					</div>	
					<input type="hidden" id="apresentacao" name="apresentacao" value="Pôster"></input>
				</div>
			</div>
			</div>
			
				<div id="coautoresdiv" name="coautoresdiv"></div>
				
				</br>


			</br>

		</br>

		<div class="row"><!--Botões-->
			<button type="button" id="vstatus" name="vstatus" class="btn btn-success col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2">
				Voltar para status
			</button>
			<button type="button" id="confirmar_submissao" name="confirmar_submissao" class="btn btn-primary col-md-3 col-md-offset-2 col-xs-3 col-xs-offset-2 col-lg-3 col-lg-offset-2">
				Confirmar
			</button>
		</div><!--Fim Botões-->

			
		</form>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
			$(document).on('change','#categoria',function(){ 
				$('#tipoapresenta').html('');
				$('#apresentacao').val('');
				var categoria = $('#categoria option:selected').val();
				$('#tipoapresenta').append(categoria);
				$('#apresentacao').val(categoria);

			});
		});	

</script>


<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','#vstatus',function(){ 
				location.href="submit.php";
			});
		});	
</script>		

<!-- função buscar coautor atraves do cpf -->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('blur','.cpfcoautor',function(){
			var env = {};
				env.cpfa = $(this).val();
				env.coautor = $('#coautor option:selected').val();
				var idcoautor = $(this).attr('id');
				

				$.ajax({
					type: 'POST',
					url: '../controller/ACAO/sl-ACAObuscacoautor.php',
					data: env,
					dataType: 'json',

					success: function(data){

						if(env.cpfa == data[2]){
							alert('Você não pode se cadastrar como coautor');

							for(count = 1;count < 5;count++){
								if(idcoautor == 'cpfcoautor'+count){
									$('#cpfcoautor'+count).val('');
									$('#nomecoautor'+count).val('');
									$('#snomecoautor'+count).val('');	
									
								}
							}
							return;
						}
						console.log(data);
						var count = 0;
						if(data[1] < 5){
							for(count = 1;count < 5;count++){
								if(idcoautor == 'cpfcoautor'+count){
									$('#nomecoautor'+count).val(data[0][0]['nome']);
									$('#snomecoautor'+count).val(data[0][0]['sobrenome']);
								}
							}
						}else{
							alert('Este usuario ja enviou 5 trabalhos, portanto não pode mais participar de um novo trabalho');

							for(count = 1;count < 5;count++){
								if(idcoautor == 'cpfcoautor'+count){
									$('#cpfcoautor'+count).val('');
									$('#nomecoautor'+count).val('');
									$('#snomecoautor'+count).val('');	
									
								}
							}

							
						}
						

					},
					error: function(data){
						console.log(data);
						alert('Este coautor não possui cadastro no sistema !!!');
						for(count = 1;count < 5;count++){
							if(idcoautor == 'cpfcoautor'+count){
								$('#cpfcoautor'+count).val('');
								$('#nomecoautor'+count).val('');
								$('#snomecoautor'+count).val('');	
								
							}
						}
						
					},
					cache: false
				});
		});
	});

</script>	

<!-- se nescessário adciona coautores -->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#coautor',function(){
			var ncoautor = $('#coautor option:selected').attr('value');
			ncoautor = parseInt(ncoautor) + 1;
			var count = 0;
			console.log(ncoautor);
			$('#coautoresdiv').html('');
			for(count = 1;count < ncoautor;count++){

				var linha = '<div class="row">'+
								'<div class="col-md-12 col-xs-12 col-lg-12">'+
									'<div class="col-md-4 coautores" id="coautores'+count+'" name="coautores'+count+'">'+
										'<label></br>CPF do coautor - '+count+'</cpf></label></br>'+
										'<input type="text" id="cpfcoautor'+count+'" name="cpfcoautor'+count+'" class="form-control cpfcoautor">'+
									'</div>'+

									'<div class="col-md-4" id="coautores'+count+'" name="coautores'+count+'">'+
										'<label></br>Nome do coautor - '+count+'</label></br>'+
										'<input type="text" id="nomecoautor'+count+'" name="nomecoautor'+count+'" class="form-control" readonly>'+
									'</div>'+

									'<div class="col-md-4">'+
										'<label></br>Sobrenome do coautor - '+count+'</label></br>'+
										'<input type="text" id="snomecoautor'+count+'" name="snomecoautor'+count+'" class="form-control" readonly>'+
									'<div>'+
								'</div>'+
							'</div>';

				$('#coautoresdiv').append(linha);

				 $("#cpfcoautor"+count+"").mask("999.999.999-99");
			}
		});
	});	

</script>

<!-- envia as variaveis do form via post -->
<script type="text/javascript">

		$(document).ready(function(){
            
            $(document).on('click','#confirmar_submissao',function(){

				env = {};
                env.titulo = $('#titulo').val();
                env.resumo = $('#resumo').val();
                env.area = $('#area option:selected' ).val();
                env.coautor = $('#coautor option:selected').val();
                env.apresentacao = $('#apresentacao').val();
                env.orientador = $('#orientador').val();
                env.descricao = $('#descricao').val();
                env.categoria = $('#categoria option:selected').val();
                env.artigo = $('#arquivo').val();

                env.nomecoautor1 = $('#nomecoautor1').val();
                env.snomecoautor1 = $('#snomecoautor1').val();
                env.cpfcoautor1 = $('#cpfcoautor1').val();

                env.nomecoautor2 = $('#nomecoautor2').val();
                env.snomecoautor2 = $('#snomecoautor2').val();
                env.cpfcoautor2 = $('#cpfcoautor2').val();

                env.nomecoautor3 = $('#nomecoautor3').val();
                env.snomecoautor3 = $('#snomecoautor3').val();
                env.cpfcoautor3 = $('#cpfcoautor3').val();
                env.nomecoautor4 = $('#nomecoautor4').val();
                env.snomecoautor4 = $('#snomecoautor4').val();
                env.cpfcoautor4 = $('#cpfcoautor4').val();

                var quant = env.resumo.length;

               

                if(quant > 1500){
                	alert('O resumo deve possuir no maximo 1.500 caracteres, contando com os espaços!!!\nO seu possui '+quant+' caracteres');
                	console.log(quant);
                	return;
                }

                if ($("#coautores").length){
                	console.log("coautores existem");
                	var coautor = $('#coautor option:selected').attr('value');
            		var	ncoautor = parseInt(coautor) + 1;
                	var count = 0;

                	for(count = 1;count < ncoautor;count++){
                		eval('env.nomecoautor'+count+'= $("#nomecoautor'+count+'").val();');
                		eval('env.snomecoautor'+count+'= $("#snomecoautor'+count+'").val();');
                		eval('env.cpfcoautor'+count+'= $("#cpfcoautor'+count+'").val();');
                	}
                }
                
               

               console.log(env);
                
                var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' & key != 'contato'){
                        // aplica formatação css os inputs vazios
                        $("#"+key).css({"border" : "2px inset #F00", "padding": "2px"});
                        count++;
                        // volta a formatação original os inputs que foram preenchidos
                    }else{
                        $("#"+key).css({"border" : "2px inset"});
                    }
                });
                    // se hover inputs vazios não submete o form 
                    if (count != 0){
                        alert('Atenção aos campos com preenchimento obrigatórios!!!');
                        return;
                    // senão submete    
                    }

                    
                    console.log(env);

                    $("#form_submissao").submit();
                     
			});
		});

		
	</script>


</body>
</html>