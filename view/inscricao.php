<!DOCTYPE html>
<html>
<?php include_once("page_head.php"); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>
<body>
<!-- inicio da row 1 -->
	<div class="container-fluid">
	<?php include_once("menu.php"); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="inscricao-box">
					<h2 class="inscricao-titulo">Inscrição</h2>
					<p class="inscricao-subtitulo">Confira os lotes, valores e condições de participação no SGAgro 2026.</p>
					<div class="inscricao-cta">
						<p><a href="https://www.funep.org.br/evento/xsgagro/" target="_blank"><button class="btn btn-success btn-inscricao" type="button" id="inscricao"><b>Clique aqui para realizar a sua inscrição</b></button></a></p>
					</div>

					<div class="row">
						<div class="col-md-12" >
							<table class="table table-hover inscricao-table">
								<thead>
									<tr>
										<th>Tipo</th>
										<th>Valores</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-tipo"><strong>1º. LOTE</strong><br>15/04/2026 a 15/06/2026</td>
										<td>R$ 100,00: Estudantes de pós-graduação, docentes e profissionais<br>R$ 50,00: Estudantes de graduação</td>
									</tr>
									<tr>
										<td class="col-tipo"><strong>2º. LOTE</strong><br>16/06/2026 a 07/08/2026</td>
										<td>R$ 150,00: Estudantes de pós-graduação, docentes e profissionais<br>R$ 75,00: Estudantes de graduação</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row">
					<!-- <div class="col-md-12">
						<div class="alert alert-danger">
							<p>
								*Até 17 de maio os respectivos valores permancem com descontos, após essa data será<br> acrescentado 30% nos valores das inscrições
							</p>
						</div>
					</div> -->
					
					<div class="col-md-12">
						<div class="observacao-box">
							<h4>Observação</h4>
							<p>A inscrição dá direito à participação integral no evento (palestras, oficinas e apresentação de trabalhos).</p>
							<p>O limite de envios de trabalhos (artigos, resumos expandidos, relatórios técnicos, projeto de pesquisa e plano de negócio) é de no máximo 10 (dez) trabalhos por autor, não distinguindo autoria de coautoria.</p>
							<p>Cada inscrição dará direito a apresentação de até 3 trabalhos aprovados (artigos, resumos expandidos, relatórios técnicos, projeto de pesquisa e plano de negócio).</p>
						</div>
					</div>	
					
					</div>
				</div>
					
			<?php require_once('rodape2019.php'); ?>
			</div>
		</div>
		<!-- fim da row 1 -->
		
	</div>
	<!-- fim do container-fluid -->
</body>
</html>

<style type="text/css">
	.inscricao-box{
		max-width: 980px;
		margin: 30px auto 60px;
		padding: 28px 30px 24px;
		background: #ffffff;
		border: 1px solid #dfe7d3;
		border-radius: 12px;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
	}
	.inscricao-titulo{
		margin: 0 0 6px;
		font-size: 30px;
		font-weight: 700;
		color: #2e4b1f;
		text-align: center;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}
	.inscricao-subtitulo{
		margin: 0 0 22px;
		font-size: 15px;
		color: #6b7564;
		text-align: center;
	}
	.inscricao-cta{
		margin-bottom: 22px;
		text-align: center;
	}
	.inscricao-cta p{
		margin: 0;
	}
	.btn-inscricao{
		padding: 12px 22px;
		font-size: 16px;
		border-radius: 8px;
		box-shadow: 0 6px 16px rgba(46, 75, 31, 0.18);
	}
	.table.inscricao-table{
		margin-bottom: 0;
		border: 1px solid #d8e2cc;
		border-radius: 10px;
		overflow: hidden;
	}
	.table.inscricao-table>thead>tr>th{
		background: #b5cf79;
		color: #25361a;
		font-size: 16px;
		font-weight: 700;
		text-align: center;
		border-bottom: 1px solid #a6c06d;
		padding: 16px 18px;
		vertical-align: middle;
	}
	.table.inscricao-table>tbody>tr>td{
		padding: 16px 18px;
		font-size: 17px;
		line-height: 1.45;
		vertical-align: middle;
		border-top: 1px solid #e8eee0;
		background-color: #ffffff;
	}
	.table.inscricao-table>tbody>tr:hover>td{
		background-color: #f8fbf3;
	}
	.col-tipo{
		width: 280px;
		font-weight: 700;
		color: #243117;
		text-align: center;
	}
	.observacao-box{
		margin-top: 22px;
		padding: 20px 22px;
		background: #f8fbf3;
		border: 1px solid #d8e2cc;
		border-radius: 10px;
	}
	.observacao-box h4{
		margin: 0 0 12px;
		font-size: 22px;
		font-weight: 700;
		color: #2e4b1f;
	}
	.observacao-box p{
		margin: 0 0 10px;
		font-size: 16px;
		line-height: 1.55;
		color: #37412f;
	}
	.observacao-box p:last-child{
		margin-bottom: 0;
	}
	@media (max-width: 767px){
		.inscricao-box{
			margin: 30px auto 30px;
			padding: 18px 15px;
		}
		.inscricao-titulo{
			font-size: 24px;
		}
		.inscricao-subtitulo{
			font-size: 14px;
			margin-bottom: 16px;
		}
		.btn-inscricao{
			width: 100%;
			white-space: normal;
		}
		.table.inscricao-table>thead>tr>th,
		.table.inscricao-table>tbody>tr>td{
			padding: 12px 10px;
			font-size: 14px;
		}
		.col-tipo{
			width: 120px;
			font-size: 13px;
		}
		.observacao-box{
			padding: 16px 14px;
		}
		.observacao-box h4{
			font-size: 20px;
		}
		.observacao-box p{
			font-size: 14px;
		}
	}
</style>
