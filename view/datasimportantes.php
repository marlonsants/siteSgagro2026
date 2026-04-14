<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>

<div class="container-fluid">
	<?php include_once("menu.php"); ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="datas-box">
			<h2 class="datas-titulo">Datas Importantes</h2>
			<p class="datas-subtitulo">Cronograma oficial do Simpósio SGAgro 2026.</p>
			<table class="table table-hover datas-table">	
				<thead>	
					<tr>
						<th>Data</th>
						<th>Atividade</th>
					</tr>
				</thead>

				<tbody>	
					<tr class="destaque-amarelo">
						<td class="col-data">12/04/2026</td>
						<td>Abertura para submissão de trabalhos</td>
					</tr>

					<tr>
						<td class="col-data">15/04/2026</td>
						<td>Início das inscrições com desconto para o Simpósio (primeiro lote)</td>
					</tr>

					<tr>
						<td class="col-data">15/06/2026</td>
						<td>Fim das inscrições com desconto para o Simpósio (primeiro lote)</td>
					</tr>

					<tr>
						<td class="col-data">16/06/2026</td>
						<td>Início das inscrições sem desconto para o Simpósio (segundo lote)</td>
					</tr>

					<tr class="destaque-amarelo">
						<td class="col-data">27/07/2026</td>
						<td>Encerramento da submissão de trabalhos</td>
					</tr>

					<tr class="destaque-verde">
						<td class="col-data">12/04/2026 a 01/08/2026</td>
						<td>Período de avaliação dos trabalhos submetidos ao Simpósio - Fluxo Contínuo</td>
					</tr>

					<tr class="destaque-amarelo">
						<td class="col-data">03/08/2026</td>
						<td>Publicação final dos resultados das submissões</td>
					</tr>

					<tr>
						<td class="col-data">07/08/2026</td>
						<td>Fim das inscrições sem desconto para o Simpósio (segundo lote)</td>
					</tr>

					<tr>
						<td class="col-data">10/08/2026</td>
						<td>Programação das apresentações de trabalho</td>
					</tr>

					<tr class="destaque-amarelo">
						<td class="col-data">19 e 20 /08/2026</td>
						<td>Realização do Evento SGAgro</td>
					</tr>
					
				</tbody>
			</table>
		</div>

	</div>

<?php require_once('rodape2019.php'); ?>

<style>
	.datas-box{
		max-width: 980px;
		margin: 30px auto 40px;
		padding: 28px 30px 24px;
		background: #ffffff;
		border: 1px solid #dfe7d3;
		border-radius: 12px;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
	}
	.datas-titulo{
		margin: 0 0 6px;
		font-size: 30px;
		font-weight: 700;
		color: #2e4b1f;
		text-align: center;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}
	.datas-subtitulo{
		margin: 0 0 22px;
		font-size: 15px;
		color: #6b7564;
		text-align: center;
	}
	.table.datas-table{
		margin-bottom: 0;
		border: 1px solid #d8e2cc;
		border-radius: 10px;
		overflow: hidden;
	}
	.table.datas-table>thead>tr>th{
		background: #b5cf79;
		color: #25361a;
		font-size: 16px;
		font-weight: 700;
		text-align: center;
		border-bottom: 1px solid #a6c06d;
		padding: 16px 18px;
	}
	.table.datas-table>tbody>tr>td{
		padding: 16px 18px;
		font-size: 17px;
		line-height: 1.45;
		vertical-align: middle;
		border-top: 1px solid #e8eee0;
		background-color: #ffffff;
	}
	.table.datas-table>tbody>tr:hover>td{
		background-color: #f8fbf3;
	}
	.table.datas-table>tbody>tr.destaque-amarelo>td{
		background-color: #fff5b8;
	}
	.table.datas-table>tbody>tr.destaque-verde>td{
		background-color: #d8efad;
	}
	.table.datas-table>tbody>tr.destaque-amarelo:hover>td{
		background-color: #fff0a0;
	}
	.table.datas-table>tbody>tr.destaque-verde:hover>td{
		background-color: #cde69e;
	}
	.col-data{
		width: 220px;
		font-weight: 700;
		color: #243117;
		text-align: center;
	}
	.risco {text-decoration: line-through;}
	.footerTable{background-color: #337AB7; color:#fff;}
	@media (max-width: 767px){
		.datas-box{
			margin: 30px auto 30px;
			padding: 18px 15px;
		}
		.datas-titulo{
			font-size: 24px;
		}
		.datas-subtitulo{
			font-size: 14px;
			margin-bottom: 16px;
		}
		.table.datas-table>thead>tr>th,
		.table.datas-table>tbody>tr>td{
			padding: 12px 10px;
			font-size: 14px;
		}
		.col-data{
			width: 120px;
			font-size: 13px;
		}
	}
</style>
