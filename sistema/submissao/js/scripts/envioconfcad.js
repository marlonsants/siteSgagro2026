$(document).ready(function(){
			$(document).on('click','#continuar1',function(){ 
				env = {};
				var senha1 = "<?php echo $senha; ?>"
                env.senha = senha1 ;
                env.cargo = "<?php echo $cargo; ?>" ;
                env.nome = "<?php echo $nome; ?>" ;
                env.sobrenome = "<?php echo $sobrenome; ?>" ;
                env.nascimento = "<?php echo $nascimento; ?>" ;
                env.sexo = "<?php echo $sexo; ?>" ;
                env.pais = "<?php echo $pais; ?>" ;
                env.cpf = "<?php echo $cpf; ?>" ;
                env.endereco = "<?php echo $endereco; ?>" ;
                env.cidade = "<?php echo $cidade; ?>" ;
                env.estado = "<?php echo $estado; ?>" ;
                env.instituicao = "<?php echo $instituicao; ?>" ;
				env.email = "<?php echo $email; ?>" ;
                env.telefone = "<?php echo $telefone; ?>" ;
                env.contato = "<?php echo $contato; ?>" ;
                env.numero = "<?php echo $numero; ?>" ;
                env.complemento = "<?php echo $complemento; ?>" ;
                env.cep = "<?php echo $cep; ?>" ;
                env.bairro = "<?php echo $bairro; ?>" ;
                env.tipocadastro = "<?php echo $tipocadastro; ?>" ;
                
				$.ajax({
			            type: "POST",
			            url: "../controller/ACAO/sl-ACAOcadusu.php",
			            data: env,
			            dataType : 'html',
			            success: function(data){
			                console.log('sucesso'+data)
			                //$('#erros').html('<img src="data:image/png;base64,'+data+'"/>');
			            }, error: function(data) {
			                console.log(data);
			                alert("Erro, Houve uma falha ao salvar o registro!");
			            }
			    		});

		                var form = {};
		                form.email = $('#email').val();
		                                // envia a variavel email por GET   
		    			location.href="enviaemail.php?email="+env.email;	

			
			});

		});				