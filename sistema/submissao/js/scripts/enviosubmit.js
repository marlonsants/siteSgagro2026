$(document).on('click','#cad',function(){
					env = {};
				 	$.ajax({
			            type: "POST",
			            url: "../controller/ACAO/sl-ACAOsomaenvios.php",
			            data: env,
			            dataType : 'json',
			            success: function(data){
			                console.log(data);
				            if(data < 5){
				            	location.href='regras.php';
				            }else{
				            	alert('Você pode cadastrar apenas 5 trabalhos !!!');
				            }
			                              	                
			            }, 
			            error: function(data) {
			                console.log(data);
			               		
			            	}
	    			});

				 	
				 });