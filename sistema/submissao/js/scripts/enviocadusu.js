 $(document).ready(function(){
            
            $(document).on('click','#salvar',function(){

                env = {};
                env.senha = $('#senha').val();
                env.confirmar_senha = $('#confirmar_senha').val();
                env.nome = $('#nome').val();
                env.sobrenome = $('#sobrenome').val();
                env.nascimento = $('#nascimento').val();
                env.sexo = $('#sexo option:selected').val();
                env.pais = $('#pais  option:selected').val();
                env.cpf = $('#cpf').val();
                env.endereco = $('#endereco').val();
                env.cidade = $('#cidade').val();
                env.estado = $('#estado  option:selected').val();
                env.instituicao = $('#instituicao').val();
                env.email = $('#email').val();
                env.confirmar_email = $('#confirmar_email').val();
                env.telefone = $('#telefone').val();
                env.contato = $('#contato').val();
                env.numero = $('#numero').val();
                env.complemento = $('#complemento').val();
                env.cep = $('#cep').val();
                env.bairro = $('#bairro').val();
                env.cargo = $('#cargo').val();

               if ($('#autor').is(':checked') && $('#avaliador').is(':checked') == false ){
                   $('#tipocadastro').val('Autor');
                }
                 if ($('#avaliador').is(':checked') && $('#autor').is(':checked') == false ){
                    $('#tipocadastro').val('Avaliador');

                }

                if ($('#autor').is(':checked') && $('#avaliador').is(':checked')){
                     $('#tipocadastro').val('Autor e Avaliador');
                }
                if($('#autor').is(':checked') == false && $('#avaliador').is(':checked') == false){ 
                    alert('você não selecionou nehum opção no campo cadastrar como');
                    env.tipocadastro = '';
                   
                }




                // verifica a idade 
                var idade = $('#nascimento').val();
				var dia = idade.substr(0,2);
				var mes = idade.substr(3,2);
				var ano = idade.substr(6,4);
				console.log(dia);
				console.log(mes);
				console.log(ano);
				var anos = calculaIdade(ano, mes, dia);

				

				// verifica se todos os campos foram preenchidos 
                var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' & key != 'contato' & key != 'complemento'  & key != 'cargo'){
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

                    if(anos < 17 || anos > 90){
				    alert("Data de nascimento invalida, verifique e tente novamente");
				    return;
				}

                    // verifica se a confirmação de senha e mail correspondem
                    if(env.senha != env.confirmar_senha & env.email != env.confirmar_email){
                       alert('O campo de confirmação da senha e do email não correspondem aos mesmos, verifique e tente novamente');
                       $('#senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                        $('#senha').css({"border" : "2px inset"});
                        $('#confirmar_senha').css({"border" : "2px inset"});
                        $('#email').css({"border" : "2px inset"});
                        $('#confirmar_email').css({"border" : "2px inset"});
                    }
                    if(env.senha != env.confirmar_senha){
                       alert('O campo de confirmação da senha não corresponde a mesma, verifique e tente novamente');
                       $('#senha').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_senha').css({"border" : "2px inset #F00", "padding": "2px"});
                        return;
                    }else{
                        $('#senha').css({"border" : "2px inset"});
                        $('#confirmar_senha').css({"border" : "2px inset"});
                }
                    if(env.email != env.confirmar_email){
                       alert('O campo de confirmação do email não correspondem ao mesmo, verifique e tente novamente');
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirmar_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                        $('#email').css({"border" : "2px inset"});
                        $('#confirmar_email').css({"border" : "2px inset"});
                    }
                    console.log(env);

                    $("#formcad").submit();
            });
        });