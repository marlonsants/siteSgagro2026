$(document).ready(function(){
			$(document).on('click','#voltar1',function(){
				if(confirm('Ao voltar a página voce devera preencher todo o formulario novamente, deseja continuar ?')){
					location.href="submissao_artigo.php";
				}
			});
		});