$(document).ready(function(){ 
				var env = {};
					env.email = <?php echo "'$email'"; ?> ;
				

				$.ajax({
		            type: "POST",
		            url: "../controller/ACAO/sl-ACAOquanttrab.php",
		            data: env,
		            dataType : 'json',
		            success: function(data){
		                console.log(data);
		                
		                var count = 0;
		                $.each(data,function(key,val){
		                	if(data[count][0]['idartigo'] == ''){
		                		var status = '<td>Pendente, arquivo PDF não enviado</td> <td> <form  method="POST" action="upload.php" enctype="multipart/form-data" id="form'+count+'"> <input type="file" class="enviar btn btn-success" id="enviar'+count+'" name="arquivo"></input> <br> <input type="submit" class="enviar btn btn-success" id="enviar'+count+'" value=" Enviar trabalho "> </input> <input type="hidden" name="idartigo" value="'+data[count][0]['id_artigo']+'"</input></form></td>';
		                	}else{
		                		var status = '<td>Arquivo PDF enviado com sucesso. Por favor aguarde o resultado. </td> <td><form method="POST" action="viewartigo.php"> <input type="submit" class="verartigo btn btn-primary" id="veratigo'+count+'" value="Vizualizar trabalho" >  </input> <input type="hidden" name="idartigo" value="'+data[count][0]['id_artigo']+'"</input> </form></td>';
		                	}
		                	
		                	var linha = '<tr id="'+data[count][0]['id_artigo']+'"> <td>'+data[count][0]['titulo']+'</td> <td>'+status+'</td> </tr>';
		                	$('#trabalhos').append(linha);
		                	count++;
		                
		                });
		             

		            }, error: function(data) {
		                	console.log(data);
		               		$('#trabalhos').append('Nenhum trabalho cadastrado até o momento');
		            	}
		    		});
				});