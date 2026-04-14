<!DOCTYPE html>
<html>
<?php include_once("page_head.php"); ?>
<style type="text/css">
	body{
		background:
			radial-gradient(circle at top left, rgba(181, 207, 121, 0.28), transparent 28%),
			linear-gradient(180deg, #f3f0e4 0%, #f8f6ef 100%);
	}
	.submissao-page{
		max-width: 1180px;
		margin: 36px auto 60px;
		padding: 0 15px;
	}
	.submissao-hero,
	.submissao-sidebar,
	.submissao-guidelines{
		background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 251, 243, 0.98) 100%);
		border: 1px solid rgba(74, 108, 37, 0.12);
		border-radius: 24px;
		box-shadow: 0 18px 40px rgba(40, 58, 21, 0.10);
		overflow: hidden;
	}
	.submissao-hero{
		position: relative;
		margin-bottom: 30px;
	}
	.submissao-hero:before,
	.submissao-sidebar:before,
	.submissao-guidelines:before{
		content: "";
		display: block;
		height: 5px;
		background: linear-gradient(90deg, #5a8427 0%, #b5cf79 52%, #3f6f1d 100%);
	}
	.submissao-hero-media img{
		display: block;
		width: 100%;
		height: 300px;
		object-fit: cover;
	}
	.submissao-hero-body{
		padding: 30px 32px 32px;
	}
	.submissao-kicker{
		display: inline-block;
		margin-bottom: 12px;
		padding: 7px 14px;
		border-radius: 999px;
		background-color: rgba(181, 207, 121, 0.22);
		color: #4c7722;
		font-size: 12px;
		font-weight: bold;
		letter-spacing: 1px;
		text-transform: uppercase;
	}
	.submissao-hero-body h1{
		margin: 0 0 14px;
		color: #294116;
		font-size: 34px;
		font-weight: bold;
	}
	.submissao-lead,
	.submissao-text{
		color: #4c5643;
		font-size: 16px;
		line-height: 1.75;
	}
	.submissao-lead{
		margin-bottom: 14px;
	}
	.submissao-text{
		margin-bottom: 26px;
	}
	.submissao-section-title,
	.submissao-sidebar-title,
	.submissao-guidelines-title{
		margin: 0 0 16px;
		color: #2e4b1f;
		font-size: 24px;
		font-weight: bold;
	}
	.submissao-downloads{
		margin-bottom: 26px;
	}
	.submissao-download-link,
	.submissao-login-link,
	.fast-track-link{
		display: block;
		padding: 15px 18px;
		margin-bottom: 12px;
		border-radius: 14px;
		background-color: #ffffff;
		border: 1px solid #d8e2cc;
		box-shadow: 0 10px 24px rgba(54, 77, 28, 0.08);
		color: #2d471a;
		font-weight: bold;
		text-decoration: none;
		transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
	}
	.submissao-download-link:hover,
	.submissao-download-link:focus,
	.submissao-login-link:hover,
	.submissao-login-link:focus,
	.fast-track-link:hover,
	.fast-track-link:focus{
		background-color: #f8fbf3;
		color: #244012;
		text-decoration: none;
		transform: translateY(-1px);
		box-shadow: 0 14px 28px rgba(54, 77, 28, 0.12);
	}
	.submissao-download-link span,
	.fast-track-link span{
		display: block;
		margin-top: 4px;
		font-size: 13px;
		font-weight: normal;
		color: #6a7460;
	}
	.submissao-access-box{
		padding: 20px 22px;
		border-radius: 18px;
		background: linear-gradient(135deg, #eef5df 0%, #f9fbf3 100%);
		border: 1px solid #d5e1c5;
	}
	.submissao-access-box p{
		margin: 0 0 14px;
		color: #435038;
		font-size: 15px;
		line-height: 1.65;
	}
	.submissao-login-link{
		margin-bottom: 0;
		text-align: center;
		background: linear-gradient(135deg, #b5cf79 0%, #dceab8 100%);
		border-color: #b5cf79;
	}
	.submissao-sidebar{
		padding: 24px;
	}
	.submissao-sidebar-head{
		margin-bottom: 20px;
	}
	.submissao-sidebar-subtitle,
	.submissao-guidelines-subtitle{
		margin: 0;
		color: #6a7460;
		font-size: 15px;
		line-height: 1.6;
	}
	.fast-track-item{
		margin-bottom: 12px;
	}
	.fast-track-link strong{
		display: block;
		font-size: 16px;
	}
	.submissao-fast-track-list{
		margin: 26px 0 0;
		padding: 0;
		list-style: none;
		border: 1px solid #d8e2cc;
		border-radius: 18px;
		overflow: hidden;
		box-shadow: inset 0 0 0 1px rgba(255,255,255,0.65);
	}
	.submissao-fast-track-list li{
		padding: 15px 18px;
		background-color: #ffffff;
		border-bottom: 1px solid #e8eee0;
		font-size: 15px;
		line-height: 1.5;
	}
	.submissao-fast-track-list li:last-child{
		border-bottom: none;
	}
	.submissao-fast-track-list li:first-child{
		background: linear-gradient(135deg, #b5cf79 0%, #dceab8 100%);
		color: #25361a;
		font-weight: bold;
		text-transform: uppercase;
		letter-spacing: 0.4px;
	}
	.submissao-fast-track-list a{
		color: #2e4b1f;
		text-decoration: none;
	}
	.submissao-fast-track-list a:hover,
	.submissao-fast-track-list a:focus{
		text-decoration: underline;
	}
	.submissao-guidelines{
		margin-top: 34px;
	}
	.submissao-guidelines-body{
		padding: 28px 30px 32px;
	}
	.submissao-guidelines-frame{
		margin-top: 22px;
		padding: 14px;
		border-radius: 20px;
		background-color: #ffffff;
		border: 1px solid #d8e2cc;
		box-shadow: inset 0 0 0 1px rgba(248, 251, 243, 0.9);
	}
	.submissao-guidelines-frame iframe{
		width: 100%;
		height: 960px;
		border: none;
		border-radius: 12px;
	}
	@media (max-width: 991px){
		.submissao-page{
			margin-top: 24px;
		}
		.submissao-hero-body,
		.submissao-sidebar,
		.submissao-guidelines-body{
			padding: 22px;
		}
		.submissao-hero-body h1{
			font-size: 30px;
		}
		.submissao-hero-media img{
			height: 240px;
		}
	}
	@media (max-width: 767px){
		.submissao-page{
			padding: 0 8px;
			margin: 20px auto 36px;
		}
		.submissao-hero-body,
		.submissao-sidebar,
		.submissao-guidelines-body{
			padding: 18px 16px;
		}
		.submissao-hero-body h1{
			font-size: 26px;
		}
		.submissao-section-title,
		.submissao-sidebar-title,
		.submissao-guidelines-title{
			font-size: 22px;
		}
		.submissao-lead,
		.submissao-text,
		.submissao-access-box p,
		.submissao-sidebar-subtitle,
		.submissao-guidelines-subtitle,
		.submissao-fast-track-list li{
			font-size: 14px;
		}
		.submissao-download-link,
		.submissao-login-link,
		.fast-track-link{
			padding: 13px 14px;
		}
		.submissao-guidelines-frame{
			padding: 10px;
		}
		.submissao-guidelines-frame iframe{
			height: 620px;
		}
	}
</style>
<body> 

	<div class="container-fluid">
		<?php include_once("menu.php"); ?>
		<div class="submissao-page firstRow">
			<div class="row">
				<div class="col-md-7 col-xs-12">
					<div class="submissao-hero">
						<div class="submissao-hero-media">
							<img src="../webroot/images/estudando.jpg" alt="Participantes do SGAgro em atividades acadêmicas">
						</div>
						<div class="submissao-hero-body">
							<span class="submissao-kicker">Submissão de trabalhos</span>
							<h1>Produção científica com curadoria e visibilidade institucional</h1>
							<p class="submissao-lead">
								O SGAgro receberá trabalhos em formato completo ou em formato de resumo expandido para apresentação oral, estudos ou relatos tecnológicos na área de Gestão do Agronegócio.
							</p>
							<p class="submissao-text">
								Todos os trabalhos serão encaminhados para processo de dupla avaliação às cegas. Somente os trabalhos aprovados pelos avaliadores e inscritos nos programas serão publicados nos Anais do simpósio. Os melhores trabalhos serão encaminhados para revistas parceiras do evento em processo fast track, logo, caso sejam aceitos pelo sistema de avaliação destes periódicos, os trabalhos poderão ser publicados nas revistas.
							</p>

							<h2 class="submissao-section-title">Templates para download</h2>
							<div class="submissao-downloads">
								<a href="../template/Template_resumo_expandido2026.docx" class="submissao-download-link" download>Template do resumo expandido<span>Arquivo em formato .docx</span></a>
								<a href="../template/Template_Relato_Tecnico2026.docx" class="submissao-download-link" download>Template do relato técnico<span>Arquivo em formato .docx</span></a>
								<a href="../template/Template_Artigo2026.docx" class="submissao-download-link" download>Template do artigo completo<span>Arquivo em formato .docx</span></a>
								<a href="../template/Template_ProjetoPesquisa2026.docx" class="submissao-download-link" download>Template de projeto de pesquisa<span>Arquivo em formato .docx</span></a>
								<a href="../template/Template_PlanoNegocio2026.docx" class="submissao-download-link" download>Template do plano de negócios<span>Arquivo em formato .docx</span></a>
							</div>

							<div class="submissao-access-box">
								<p>Para submissão do trabalho, o autor deverá realizar o seu cadastro no sistema de submissão do SGAgro.</p>
								<a href="http://sistema.sgagro.org/" class="submissao-login-link" target="_blank">Acessar área de login</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5 col-xs-12">
					<div class="submissao-sidebar">
						<div class="submissao-sidebar-head">
							<h2 class="submissao-sidebar-title">Resultados Fast Track</h2>
							<p class="submissao-sidebar-subtitle">Consulte os resultados das edições anteriores e acompanhe as opções de periódicos parceiros do simpósio.</p>
						</div>

						<div class="fast-track-item">
							<a href="../template/Fast_Track_2024.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2024</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2023.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2023</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2022.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2022</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2021.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2021</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2020.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2020</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2019.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2019</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/Fast_Track_2018.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2018</strong><span>Visualizar documento em PDF</span></a>
						</div>
						<div class="fast-track-item">
							<a href="../template/fast_track_2017.pdf" target="_blank" class="fast-track-link"><strong>Resultado do Fast Track 2017</strong><span>Visualizar documento em PDF</span></a>
						</div>

						<ul class="submissao-fast-track-list">
							<li>As opções de fast track são:</li>
							<li><a href="#">Organizações Rurais &amp; Agroindustriais</a></li>
							<li><a href="#">Revista Estudos e Pesquisas em Administração (Repad)</a></li>
							<li><a href="#">Cuyonomics. Investigaciones em Economía Regional</a></li>
							<li><a href="#">Revista Contabilidade, Gestão e Governança</a></li>
							<li><a href="#">Revista Competitividade e Sustentabilidade - ComSus</a></li>
							<li><a href="#">Revista de Empreendedorismo, Negócios e Inovação (RENI)</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="submissao-guidelines">
				<div class="submissao-guidelines-body">
					<h2 class="submissao-guidelines-title">Normas para aceitação dos trabalhos</h2>
					<p class="submissao-guidelines-subtitle">Os trabalhos devem estar de acordo com as normas descritas neste documento para serem aceitos. Submissões fora do padrão indicado serão desclassificadas.</p>
					<div class="submissao-guidelines-frame">
						<iframe src="../template/Template_Geral2024_2.pdf" title="Normas gerais para submissão de trabalhos SGAgro"></iframe>
					</div>
				</div>
			</div>

			<?php require_once('rodape2019.php'); ?>
		</div>
		<!-- fim do container-fluid -->



	</body>
	</html>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>
