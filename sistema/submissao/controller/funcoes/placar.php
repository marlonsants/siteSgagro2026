<?php 


// conta quantos cadastros existem
$busca = select('count(id_usuario) as total','sl_cadusu',"cpf <> ' ' ");
$totalcad = $busca[0]['total'];

// conta quantos cadastros existem
$busca = select('count(id_artigo) as total','sl_artigo',"titulo <> ' ' ");
$totaltrab = $busca[0]['total'];

$trabalhos = select('count(id_artigo) as total','sl_artigo',"status = 1 ");
$trabalhosAprovados = $trabalhos[0]['total'];


?> 


<script type="text/javascript">

function placar(total,id){
	$(document).ready( function(){
		var totalusu = total ;
		var string = totalusu.toString(); 
		if(string.length == 3){
			var x = 0;
			var um = string.charAt(0);
			var dois = string.charAt(1);
			var tres = string.charAt(2);

			for(x=0;x<10;x++){
				
				if(um == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				
				if(dois == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				
				if(tres == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}
		}

		if(string.length == 2){
			var x = 0;
			var um = string.charAt(0);
			var dois = string.charAt(1);
			var tres = string.charAt(2);

			for(x=0;x<10;x++){
				
				if(um == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			for(x=0;x<10;x++){
				
				if(dois == x){
					$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%;" class="digitos">');
				}
			}

			
		}

		if(string.length == 1){
			var x = 0;
			var um = string.charAt(0);
			

			for(x=0;x<10;x++){
				
				if(um == x){
	$("#"+id).append('<img src="../images/digitos/d'+x+'.bmp" style="width:18%; heigth:18%; margin-left:103px; margin-right:60px">');
				}
			}

					
		}
		
		
	});
}

var usuarios = <?php echo "'$totalcad'"; ?>;
var trabalhos = <?php echo "'$totaltrab'"; ?>;
var trabalhosAprovados = <?php echo "'$trabalhosAprovados'"; ?>;

placar(usuarios,"usuarios");
placar(trabalhos,"trabalhos");
placar(trabalhosAprovados,"trabaprovado");
placar(0,"inscricao");

</script>