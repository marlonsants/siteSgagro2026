$(document).on('click','#salvar', function(){
		var env = {};
			env.email =  $('#email').val();
			env.confirma_email =  $('#confirma_email').val();
			env.cpf = 	 $('#cpf').val();
			env.senha1 = $('#senha1').val(); 
			env.senha2 = $('#senha2').val();

			 var count = 0;
                // verifica quais inputs estão vazios
                $.each(env, function(key,val){
                    if (val == '' ){
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

                    // verifica se a confirmação de senha e mail correspondem
                    if(env.senha1 != env.senha2 & env.email != env.confirma_email){
                       alert('O campo de confirmação da senha e do email não correspondem aos mesmos, verifique e tente novamente');
                       $('#senha1').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#senha2').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirma_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                    	$('#senha1').css({"border" : "2px inset"});
                        $('#senha2').css({"border" : "2px inset"});
                        $('#email').css({"border" : "2px inset"});
                        $('#confirma_email').css({"border" : "2px inset"});
                    }
                    // verifica se a confirmação de senha correspondem
                    if(env.senha1 != env.senha2){
                       alert('O campo de confirmação da senha não corresponde a mesma, verifique e tente novamente');
                       $('#senha1').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#senha2').css({"border" : "2px inset #F00", "padding": "2px"});
                        return;
                    }else{
                       $('#senha1').css({"border" : "2px inset"});
                       $('#senha2').css({"border" : "2px inset"});
                    }
                    // verifica se a confirmação de mail correspondem
                    if(env.email != env.confirma_email){
                       alert('O campo de confirmação do email não correspondem ao mesmo, verifique e tente novamente');
                       $('#email').css({"border" : "2px inset #F00", "padding": "2px"});
                       $('#confirma_email').css({"border" : "2px inset #F00", "padding": "2px"});
                       return;
                    }else{
                    	$('#email').css({"border" : "2px inset"});
                        $('#confirma_email').css({"border" : "2px inset"});
                    }
	
		$.ajax({
			type: 'POST',
			url: "../controller/ACAO/sl-ACAOcriaNsenha.php",
			data: env,
			dataType: 'html',

			success: function(data){
				console.log("sucesso"+data)
			},
			error: function(data){
				console.log("erro"+data);
			},
			cache: false
		});
	});