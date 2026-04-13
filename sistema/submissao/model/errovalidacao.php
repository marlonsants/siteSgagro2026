<!-- verifica se o php retornou mesangem  -->
					<?php  
					// verifica se ocorreu erro
					if(isset($_GET['erro']))
					{ 
					// armazena o valor do erro 	
						$erro = $_GET['erro'];
					// se erro for = 1 email incorreto	
						if($erro == 3)
					{
						echo('<h5 style="color: black; font-size:15px">O e-mail está incorreto verifique e tente novamente </h5>');
					}
					// se não cpf incorreto
					else if($erro == 2)
					{
						echo('<h5 style="color: black; font-size:15px"> Você não está cadastrado ou tem pendencias em seu cadastro</h5>');
					}
					// fim do isset
					}
					else{
					// verifica se teve sucesso
					if (isset($_GET['msg']))
					{
						$msg = $_GET['msg'];
					if ($msg == 1)
					{
						echo('<h5 style="color: black; font-size:15px"> Atualização da senha feita com sucesso </h5>');
					}
					// fim do isset msg
					}
					// fim do else
					}
					?>
					<!-- fim do php -->